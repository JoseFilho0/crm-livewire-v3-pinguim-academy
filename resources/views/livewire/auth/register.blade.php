<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="register-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="register-title" class="mb-6 text-center text-2xl font-semibold">Criar conta</h1>

        <x-form wire:submit="submit">
            <x-input label="Nome" wire:model="name" autocomplete="name" />
            <x-input label="E-mail" wire:model="email" type="email" autocomplete="email" />
            <x-input label="Confirme seu e-mail" wire:model="email_confirmation" type="email" autocomplete="off" />
            <x-input label="Senha" wire:model="password" type="password" autocomplete="new-password" />

            <x-slot:actions>
                <x-button label="Cancelar" type="reset" />
                <x-button label="Registrar" class="btn-primary" type="submit" spinner="submit" />
            </x-slot:actions>
        </x-form>
    </section>
</div>
