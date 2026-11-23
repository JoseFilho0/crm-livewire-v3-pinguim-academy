<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="recovery-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="recovery-title" class="mb-6 text-center text-2xl font-semibold">Recuperação de senha</h1>

        @if($message)
            <x-alert icon="o-exclamation-triangle" class="alert-success mb-4">
                <span>Você receberá um e-mail com o link para recuperação de senha.</span>
            </x-alert>
        @endif

        <x-form wire:submit="startPasswordRecovery">
            <x-input label="Email" wire:model="email"/>
            <x-slot:actions>
                <div class="w-full flex items-center justify-between gap-2">
                    <a wire:navigate href="{{ route('login') }}" class="underline text-xs link-primary">
                        Voltar para a página de login.
                    </a>
                    <div>
                        <x-button label="Enviar" class="btn-primary" type="submit" spinner="submit"/>
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </section>
</div>
