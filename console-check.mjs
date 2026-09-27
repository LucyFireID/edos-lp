import puppeteer from 'puppeteer';
import { spawn } from 'child_process';
import fs from 'fs';

const log = (msg) => fs.appendFileSync('D:\\Git\\edos-lp\\console-check.log', msg + '\n');
log('starting server');

const server = spawn('php', ['artisan', 'serve', '--host=127.0.0.1', '--port=8002'], {
  cwd: 'D:\\Git\\edos-lp',
  stdio: 'ignore',
  shell: true,
  detached: true,
});

await new Promise((resolve) => setTimeout(resolve, 3000));
log('server started, launching browser');

try {
  const browser = await puppeteer.launch({ headless: 'new', args: ['--no-sandbox', '--disable-setuid-sandbox'] });
  const page = await browser.newPage();

  const messages = [];
  page.on('console', (msg) => {
    const type = msg.type();
    if (['warning', 'warn', 'error'].includes(type)) {
      messages.push({ type, text: msg.text() });
    }
  });
  page.on('pageerror', (err) => messages.push({ type: 'pageerror', text: err.message }));

  await page.goto('http://127.0.0.1:8002/', { waitUntil: 'networkidle2' });
  await new Promise((resolve) => setTimeout(resolve, 2000));

  log('clicking menu items');
  const ids = ['home', 'nurture', 'qurani', 'universities', 'news'];
  for (const id of ids) {
    try {
      await page.click(`a[href="#${id}"]`);
      await new Promise((resolve) => setTimeout(resolve, 600));
    } catch (e) {
      log('click error: ' + e.message);
    }
  }
  await new Promise((resolve) => setTimeout(resolve, 1000));

  log('messages: ' + JSON.stringify(messages));
  fs.writeFileSync('D:\\Git\\edos-lp\\console-messages.json', JSON.stringify(messages, null, 2));

  await browser.close();
} catch (e) {
  log('error: ' + e.message + '\n' + e.stack);
} finally {
  try { process.kill(-server.pid); } catch (e) {}
  try { server.kill(); } catch (e) {}
}
