<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="register-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="register-title" class="mb-6 text-center text-2xl font-semibold">Login</h1>

        @if ($message = sesseion()->get('status'))
            <x-alert icon="o-exclamation-triangle" class="alert-error">
                {{ $message }}
            </x-alert>
        @endif

        @if ($errors->hasAny(['invalidCredentials', 'rateLimiter']))
            <x-alert icon="o-exclamation-triangle" class="alert-warning">
                @error('invalidCredentials')
                    <span>{{ $message}}</span>
                @enderror

                @error('rateLimiter')
                    <span>{{ $message}}</span>
                @enderror
            </x-alert>
        @endif
        
        <x-form wire:submit="tryToLogin">
            <x-input label="E-mail" wire:model="email" type="email" autocomplete="email" />
            <x-input label="Senha" wire:model="password" type="password" autocomplete="new-password" />

            <div class="w-full text-right test-xs">
                <a href="{{ route('password.recovery') }}" class="underline text-xs link-primary">Esqueceu sua senha?</a>
            </div>

            <x-slot:actions>
                <div class="w-full flex justify-between items-center">
                    <a wire:navigate href="{{ route('auth.register') }}" class="underline text-xs link-primary">Eu quero criar uma conta</a>
                    <div class="flex justify-center items-center gap-2">
                        <x-button label="Login" class="btn-primary" type="submit" spinner="tryToLogin" />
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </section>
</div>
