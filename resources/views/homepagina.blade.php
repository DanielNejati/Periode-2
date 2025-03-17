<x-app-layout>
    <h1>Homepagina</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Uitloggen</button>
    </form>
</x-app-layout>
