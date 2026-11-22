<?php

use App\Livewire\Auth\Password\Recovery;
use App\Models\User;
use App\Notifications\PasswordRecoveryNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Livewire;

use function Pest\Laravel\get;

test('needs to have a route to password recovery', function () {
    get(route('auth.password.recovery'))
        ->assertSeeLivewire('auth.password.recovery')
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

test('testing email property', function ($value, $rule) {
    Livewire::test(Recovery::class)
        ->set('email', $value)
        ->call('startPasswordRecovery')
        ->assertHasErrors(['email' => $rule]);
})->with([
    'required' => ['value' => '', 'rule' => 'required'],
    'email'    => ['value' => 'any email', 'rule' => 'email'],
]);
