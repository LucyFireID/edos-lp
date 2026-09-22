<?php

namespace Tests\Feature;

use Livewire\Livewire;
use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_landing_page_renders(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Qosim Al Hadi')
            ->assertSee('Bhakti Kepada Negeri')
            ->assertSee('Daftar Sekarang');
    }

    public function test_contact_form_validates_input(): void
    {
        Livewire::test('pages::school.landing')
            ->set('name', 'A')
            ->set('email', 'not-an-email')
            ->set('phone', '123')
            ->set('message', 'short')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'phone', 'message']);
    }

    public function test_contact_form_submits(): void
    {
        Livewire::test('pages::school.landing')
            ->set('name', 'Budi Santoso')
            ->set('email', 'budi@example.com')
            ->set('phone', '081234567890')
            ->set('message', 'Saya ingin bertanya mengenai pendaftaran siswa baru.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('sent', true)
            ->assertSet('name', '');
    }
}
