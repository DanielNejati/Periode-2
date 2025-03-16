<header class="min-h-28 p4 bg-blue-300 p-4">
    <div class="flex justify-between">
        <a href="{{route('homepagina')}}">
            <img src="{{asset('photos/FastWheelsLogo.jpg')}}" alt="" width="120px" class="rounded-md">
        </a>
        <div class="flex flex-row">
            <div class="flex items-center gap-4">
                <a href="{{route('dashboard')}}" class="text-md">Busritten</a>
                <a href="{{route('dashboard')}}" class="text-md">Festivals</a>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="flex items-center">
                Dropdownmenu
            </div>
        </div>
    </div>
</header>
