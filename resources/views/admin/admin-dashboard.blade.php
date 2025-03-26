<x-app-layout>
    {{--    Admin dashboard     --}}
    <div class="flex justify-center items-center min-h-[70vh]">
        <div class="flex flex-col min-w-[600px] max-w-[600px] lg:max-w-[800px] lg:min-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Admin dashboard</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex flex-row mb-5">
                    {{--                      CRUD for festivals    --}}
                    <div class="flex justify-center bg-gray-400 p-2 text-2xl min-w-[400px]">Festivals</div>
                    <div class="ml-[120px] flex gap-5">
                        <a href="{{route('management.indexFestival')}}">
                            <img src="{{asset('photos/oogicoon.png')}}" class="w-[50px] bg-blue-500">
                        </a>
                        <a href="{{route('festival.create')}}">
                            <img src="{{asset('photos/plus.png')}}" class="w-[50px] bg-blue-500">
                        </a>
                    </div>
                </div>
                <div class="flex flex-row mb-5">
                    {{--                     CRUD for busrides          --}}
                    <div class="flex justify-center bg-gray-400 p-2 text-2xl min-w-[400px]">Busritten</div>
                    <div class="ml-[120px] flex gap-5">
                        <a href="{{route('management.indexBusrides')}}">
                            <img src="{{asset('photos/oogicoon.png')}}" class="w-[50px] bg-blue-500">
                        </a>
                        <a href="{{route('busride.create')}}">
                            <img src="{{asset('photos/plus.png')}}" class="w-[50px] bg-blue-500">
                        </a>
                    </div>
                </div>

                <div class="flex flex-row mb-5">
                    {{-- Lijst om gebruikers te bekijken          --}}
                    <div class="flex justify-center bg-gray-400 p-2 text-2xl min-w-[400px]">Gebruikers</div>
                    <div class="ml-[120px] flex gap-5">
                        <a href="{{route('management.indexUsers')}}">
                            <img src="{{asset('photos/oogicoon.png')}}" class="w-[50px] bg-blue-500">
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>

</x-app-layout>
