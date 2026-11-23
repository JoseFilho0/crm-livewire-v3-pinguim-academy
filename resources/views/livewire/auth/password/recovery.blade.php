<div class="grid min-h-screen place-items-center bg-base-200 px-4 py-8">
    <section aria-labelledby="recovery-title" class="w-full max-w-md rounded-box border border-base-300 bg-base-100 p-6 shadow-sm sm:p-8">
        <h1 id="recovery-title" class="mb-6 text-center text-2xl font-semibold">Password recovery</h1>

        @if($message)
            <x-alert icon="o-exclamation-triangle" class="alert-success mb-4">
                <span>You will receive an email with the password recovery link.</span>
            </x-alert>
        @endif

        <x-form wire:submit="startPasswordRecovery">
            <x-input label="Email" wire:model="email"/>
            <x-slot:actions>
                <div class="w-full flex items-center justify-between gap-2">
                    <a wire:navigate href="{{ route('login') }}" class="underline text-xs link-primary">
                        Never mind, get back to login page.
                    </a>
                    <div>
                        <x-button label="Submit" class="btn-primary" type="submit" spinner="submit"/>
                    </div>
                </div>
            </x-slot:actions>
        </x-form>
    </section>
</div>
