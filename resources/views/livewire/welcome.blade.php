<div class="bg-green-300 text-green-700">
    Hello, world!!

    @auth
        <p>Olá, {{ auth()->user()->name }}!</p>

        <livewire:auth.logout />
    @endauth
</div>
