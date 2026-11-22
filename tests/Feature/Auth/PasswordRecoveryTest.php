<?php

use App\Livewire\Auth\Password\Recovery;
use App\Models\User;
use App\Notifications\PasswordRecoveryNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;

use function Pest\Laravel\get;

test('needs to have a route to password recovery', function () {
    get(route('auth.password.recovery'))
        ->assertOk();
});

it('should be able to request for a password recovery sending notification to user', function () {
    Notification::fake();

    /** @var User $user */
    $user = User::factory()->create();

    Livewire::test(Recovery::class)
        ->assertDontSee('Você vai receber um email com o link de recuperação de senha.')
        ->set('email', $user->email)
        ->call('startPasswordRecovery')
        ->assertSee('Você vai receber um email com o link de recuperação de senha.');

    Notification::assertSentTo(
        $user,
        PasswordRecoveryNotification::class
    );
});

test('making sure the email is a real email', function () {
    Livewire::test(Recovery::class)
        ->assertDontSee('Você vai receber um email com o link de recuperação de senha.')
        ->set('email', $user->email)
        ->call('startPasswordRecovery')
        ->assertSee('Você vai receber um email com o link de recuperação de senha.');
});
