<div class="bg-green-300 text-green-700">
    Hello, world!!

    @auth
        <p>Olá, {{ auth()->user()->name }}!</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="rounded bg-green-700 px-3 py-1 text-white">Sair</button>
        </form>
    @endauth
</div>
