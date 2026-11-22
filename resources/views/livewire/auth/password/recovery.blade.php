<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="register-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="register-title" class="mb-6 text-center text-2xl font-semibold">Recuperação de senha</h1>
        @if($message)
            <x-alert icon="o-exclamation-triangle" class="alert-success">
                <span>Você vai receber um email com o link de recuperação de senha.</span>
            </x-alert>
        @endif

        <x-form wire:submit="startPasswordRecovery">
            <x-input label="E-mail" wire:model="email" type="email" autocomplete="email" />

            <x-slot:actions>
                <div class="w-full flex justify-between items-center">
                    <a wire:navigate href="{{ route('login') }}" class="underline text-xs link-primary">Voltar para página de login</a>
                    <div class="flex justify-center items-center gap-2">
                        <x-button label="Recuperar senha" class="btn-primary" type="submit" spinner="tryToLogin" />
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </section>
</div>
