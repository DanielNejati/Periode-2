<header class="min-h-28 p4 bg-blue-500 p-4">
    <div class="flex justify-between">
        <a class="p-5" href="{{route('homepagina')}}">
            <img src="{{asset('photos/FastWheelsLogo.jpg')}}" alt="" width="150px" class="rounded-md">
        </a>
        <div class="flex flex-row">
            <div class="flex items-center gap-20 text-2xl">
                <a href="{{route('dashboard')}}" class="text-md">Busritten</a>
                <a href="{{route('dashboard')}}" class="text-md">Festivals</a>
            </div>
        </div>
        <div class="flex flex-row mr-5">
            <div class="flex items-center">
                <a href="{{route('profile.edit')}}" class="text-md">
                    <img src="{{asset('photos/profiel-icon.png')}}" alt="" width="75px">
                </a>

            </div>
        </div>
    </div>
</header>
