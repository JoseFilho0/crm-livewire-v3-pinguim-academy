<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="reset-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="reset-title" class="mb-6 text-center text-2xl font-semibold">Redefinição de senha</h1>

        @if($message = session()->get('status'))
            <x-alert icon="o-exclamation-triangle" class="alert-error mb-4">
                {{ $message }}
            </x-alert>
        @endif

        <x-form wire:submit="updatePassword">
            <x-input label="Email" value="{{ $this->obfuscatedEmail }}" readonly/>
            <x-input label="Email Confirmation" wire:model="email_confirmation"/>
            <x-input label="Password" wire:model="password" type="password"/>
            <x-input label="Password Confirmation" wire:model="password_confirmation" type="password"/>
            <x-slot:actions>
                <div class="w-full flex items-center justify-between gap-2">
                    <a wire:navigate href="{{ route('login') }}" class="underline text-xs link-primary">
                        Voltar para a página de login.
                    </a>
                    <div>
                        <x-button label="Cancelar" class="btn-primary" type="submit" spinner="submit"/>
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </section>
</div>
