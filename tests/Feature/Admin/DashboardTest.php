<?php

use App\Enum\Can;
use App\Livewire\Admin\Dashboard;
use App\Models\User;

use function Pest\Laravel\{actingAs, get};

it('should block access to users without the permission _be an admin_', function () {
    $user = User::factory()->create();

    actingAs($user);

    Livewire::test(Dashboard::class)
        ->assertForbidden();

    get(route('admin.dashboard'))
        ->assertForbidden();
});

it('shows the admin menu and opens the dashboard for an authorized user', function () {
    $this->withoutVite();
    $user = User::factory()->withPermission(Can::BE_AN_ADMIN)->create();

    actingAs($user);

    get(route('dashboard'))
        ->assertOk()
        ->assertSee(route('admin.dashboard'));

    get(route('admin.dashboard'))->assertOk();
});
