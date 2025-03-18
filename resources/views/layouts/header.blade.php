<header class="min-h-28 p4 bg-blue-500 p-4">
    <div class="flex justify-between">
        <a class="p-5" href="{{route('homepagina')}}">
            <img src="{{asset('photos/FastWheelsLogo.jpg')}}" alt="" class="rounded max-w-[150px]">
        </a>
        <div class="flex flex-row">
            <div class="flex items-center gap-10 md:gap-20">
                <a href="{{route('dashboard')}}" class="text-xl md:text-2xl">Busritten</a>
                <a href="{{route('dashboard')}}" class="text-xl md:text-2xl">Festivals</a>
            </div>
        </div>
        <div class="flex flex-row mr-5">
            <div class="flex items-center">
                <a href="{{route('profile.edit')}}" class="text-md">
                    <img src="{{asset('photos/profiel-icon.png')}}" alt="" class="max-w-[75px]">
                </a>

            </div>
        </div>
    </div>
</header>
