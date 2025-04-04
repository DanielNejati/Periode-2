<div>
    <div class="flex justify-center mt-10">
        <input wire:model.live="search" type="text" placeholder="Zoeken op naam">
    </div>


    <div class="flex gap-2 flex-col mb-10 mt-15">
        {{--        Individual bustrips--}}
        @if(!$results->isEmpty())
            @foreach ($results as $result)
                <div class="flex justify-center text-lg lg:text-xl p-2">
                    <div
                        class="flex flex-row items-center min-w-[850px] max-w-[850px] lg:min-w-[1062.5px] lg:max-w-[1062.5px] bg-gray-400">
                        <div
                            class="p-2 min-w-[250px] max-w-[250px] flex justify-center:">{{$result->festival->name}}
                        </div>
                        <div class="scale-230 flex items-center text-white"><p>|</p></div>
                        <div class="p-2 min-w-[400px] max-w-[400px] flex justify-center align-middle">
                            <div> {{$result->departure}}</div>
                            <img src="{{asset('photos/pijltje.png')}}" alt="" class="max-w-[30px] max-h-[30px]">
                            <div>{{$result->location}}</div>
                        </div>
                        <div class="scale-230 flex items-center text-white"><p>|</p></div>
                        <div class="p-2 min-w-[200px] max-w-[200px] flex justify-center">
                            {{carbon\carbon::parse($result->departure_time)->format('H:i')}}
                            -
                            {{carbon\carbon::parse($result->arrival_time)->format('H:i')}}
                        </div>
                        <div class="scale-230 flex items-center text-white"><p>|</p></div>
                        <form action="{{route('shoppingcart.store')}}" method="post">
                            <div title="Hiermee kan je een ticket kopen naar het passende busrit"
                                 class="p-2 min-w-[200px] max-w-[200px] flex justify-around">
                                <input class="max-w-[70px]" type="number" value="1" name="quantity" id="quantity">
                                <button>
                                    <img src="{{asset('photos/winkelwagen.png')}}" class="max-w-[30px] max-h-[30px]">

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        @else
            <div class="flex justify-center text-3xl mt-15">
                {{ $availableBusrides }}
            </div>
        @endif
    </div>
</div>
