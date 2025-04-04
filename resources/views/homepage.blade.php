<x-app-layout>

    {{-- Trip-planner  --}}

    <div class="flex justify-center mt-10">
        <div
            class="flex justify-center min-w-[600px] max-w-[600px] lg:min-w-[800px] lg:max-w-[800px] p-4 bg-gray-50 rounded-lg">
            <form action="">
                @csrf
                <div class="flex flex-col">
                    <div class="flex flex-row gap-8 lg:gap-20">

                        <datalist>
                            <option value="p">pddd</option>
                        </datalist>

                        <div class="flex flex-col">
                            <label class="flex justify-center text-2xl">
                                Van:
                            </label>
                            <input type="text" id="departure" name="departure">
                        </div>
                        <img src="{{asset('photos/pijltje.png')}}" alt="" class="max-w-[100px] p-2">
                        <div class="flex flex-col">
                            <label class="flex justify-center text-2xl">
                                Naar:
                            </label>
                            <input type="text" id="location" name="location">
                        </div>
                    </div>
                    <div class="flex justify-center gap-20">
                        <input type="date">
                    </div>
                    <div class="flex justify-center mt-5">
                        <div class="flex justify-center">
                            <button class="p-2 bg-gray-500 hover:bg-gray-700 text-white w-32 rounded-lg text-white">
                                Zoeken
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{--    Recommended bus-trips--}}

    {{-- Title--}}
    <div class="text-2xl mt-16 flex justify-center">
        <div class="bg-gray-50 flex justify-center w-96 p-3">
            Aanbevolen Festivals:
        </div>
    </div>

    {{-- Festivals--}}

    <div class="flex flex-wrap gap-10 justify-center mb-10">

        <div class=" mt-5 bg-gray-100 ">
            <div class="flex flex-row gap-10 p-5">
                <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[250px] max-h-[250px] p-2">
                <div class="p-5 bg-gray-50 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                    <div class="text-2xl">Titel</div>
                    <div class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti
                        dolores eius expedita in magnam minima natus, nostrum odit perspiciatis possimus reiciendis
                        ullam vero. Aliquam atque nihil quaerat recusandae voluptate! dadawda dadwal dlamdwj ldwmdajm
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center m-5">
                <div class="flex gap-10">
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Meer info
                    </a>
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Ticket boeken
                    </a>
                </div>
            </div>
        </div>

        <div class=" mt-5 bg-gray-100 ">
            <div class="flex flex-row gap-10 p-5">
                <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[250px] max-h-[250px] p-2">
                <div class="p-5 bg-gray-50 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                    <div class="text-2xl">Titel</div>
                    <div class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti
                        dolores eius expedita in magnam minima natus, nostrum odit perspiciatis possimus reiciendis
                        ullam vero. Aliquam atque nihil quaerat recusandae voluptate! dadawda dadwal dlamdwj ldwmdajm
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center m-5">
                <div class="flex gap-10">
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Meer info
                    </a>
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Ticket boeken
                    </a>
                </div>
            </div>
        </div>
        <div class=" mt-5 bg-gray-100 ">
            <div class="flex flex-row gap-10 p-5">
                <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[250px] max-h-[250px] p-2">
                <div class="p-5 bg-gray-50 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                    <div class="text-2xl">Titel</div>
                    <div class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti
                        dolores eius expedita in magnam minima natus, nostrum odit perspiciatis possimus reiciendis
                        ullam vero. Aliquam atque nihil quaerat recusandae voluptate! dadawda dadwal dlamdwj ldwmdajm
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center m-5">
                <div class="flex gap-10">
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Meer info
                    </a>
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Ticket boeken
                    </a>
                </div>
            </div>
        </div>

        <div class=" mt-5 bg-gray-100 ">
            <div class="flex flex-row gap-10 p-5">
                <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[250px] max-h-[250px] p-2">
                <div class="p-5 bg-gray-50 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                    <div class="text-2xl">Titel</div>
                    <div class="text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti
                        dolores eius expedita in magnam minima natus, nostrum odit perspiciatis possimus reiciendis
                        ullam vero. Aliquam atque nihil quaerat recusandae voluptate! dadawda dadwal dlamdwj ldwmdajm
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-center m-5">
                <div class="flex gap-10">
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Meer info
                    </a>
                    <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                        Ticket boeken
                    </a>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
