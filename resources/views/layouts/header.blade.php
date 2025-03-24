<header class="min-h-28 p4 bg-blue-500 p-4">
    <div class="flex justify-between">
        <a class="p-5" href="{{route('homepage')}}">
            <img src="{{asset('photos/FastWheelsLogo.jpg')}}" alt="" class="rounded-sm max-w-[150px]">
        </a>
        <div class="flex flex-row">
            <div class="flex items-center gap-10 md:gap-20">
                {{--                Checkt of de huidige pagina de buspagina is, zo ja dan wordt de tekst 'busrides' met een underline weergegeven.--}}
                @if(Request()->path() === 'busrides')
                    <a href="{{route('busride.index')}}" class="border-b-4 text-xl md:text-2xl">Busritten</a>
                @else
                    <a href="{{route('busride.index')}}" class="text-xl md:text-2xl">Busritten</a>
                @endif
                {{--                Checkt of de huidige pagina de festival is, zo ja dan wordt de tekst 'festivals' met een underline weergegeven.--}}
                @if(Request()->path() === 'festival')
                    <a href="{{route('festival.index')}}" class=" border-b-4 text-xl md:text-2xl">Festivals</a>
                @else
                    <a href="{{route('festival.index')}}" class="text-xl md:text-2xl">Festivals</a>
                @endif

{{--                Checkt of de gebruiker geauthenticeerd is en of de rol van de gebruiker Admin is , zo ja dan wordt de tekst 'Dashboard' met een underline weergegeven.--}}
                @auth
                    @if(Request()->user()->role === 'Admin')
                        @if(Request()->path() === "admin-dashboard")
                            <a href="{{route('admin-dashboard')}}" class="border-b-4 text-xl md:text-2xl">Dashboard</a>
                        @else
                            <a href="{{route('admin-dashboard')}}" class=" text-xl md:text-2xl">Dashboard</a>
                        @endif
                    @else

                    @endif
                @endauth

            </div>
        </div>
        <div class="flex flex-row mr-5">
            <div class="flex items-center">
                <a href="{{route('profile.edit')}}" class="text-md">
                    @if(Request()->path() === 'profile')
                        <img src="{{asset('photos/profiel-icon.png')}}" alt="" class="border-b-4 max-w-[75px]">
                    @else
                        <img src="{{asset('photos/profiel-icon.png')}}" alt="" class="max-w-[75px]">
                    @endif
                </a>

            </div>
        </div>
    </div>
</header>
