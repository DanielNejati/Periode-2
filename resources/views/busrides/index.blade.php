<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="bg-gray-50">
            <input>
        </div>
    </div>

    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Busritten
            </div>
            {{--            Head-column--}}
            <div class="text-lg lg:text-2xl font-bold m-5">
                <div class="flex flex-row min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
                    <div class="p-2 min-w-[360px] max-w-[360px] flex justify-center">Festival name</div>
                    <div class="p-2 min-w-[375px] max-w-[375px] flex justify-center">Departure</div>
                    <div class="p-2 min-w-[240px] max-w-[240px] flex justify-center"> Time:</div>
                </div>
            </div>
            <div class="flex gap-2 flex-col mb-10">
                {{--    Individual bustrips--}}
                @if(!$busrides->isEmpty())
                    @foreach ($busrides as $busride)
                        <div class="flex justify-center text-lg lg:text-xl p-2">
                            <div class="flex flex-row items-center min-w-[800px] max-w-[800px] lg:min-w-[1000px] lg:max-w-[1000px] bg-gray-400">
                                <div
                                    class="p-2 min-w-[250px] max-w-[250px] flex justify-center:">{{$busride->Festival->name}}
                                </div>
                                <div class="scale-230 flex items-center text-white"><p>|</p></div>
                                <div class="p-2 min-w-[400px] max-w-[400px] flex justify-center align-middle">
                                    <div> {{$busride->departure}}</div>
                                    <img src="{{asset('photos/pijltje.png')}}" alt="" class="max-w-[30px] max-h-[30px]">
                                    <div>{{$busride->location}}</div>
                                </div>
                                <div class="scale-230 flex items-center text-white"><p>|</p></div>
                                <div class="p-2 min-w-[200px] max-w-[200px] flex justify-center">
                                    {{carbon\carbon::parse($busride->departure_time)->format('H:i')}}
                                    -
                                    {{carbon\carbon::parse($busride->arrival_time)->format('H:i')}}
                                </div>
                                <div class="scale-230 flex items-center text-white"><p>|</p></div>
                                <div class="p-2 min-w-[150px] max-w-[150px] flex justify-center">
                                    <img src="{{asset('photos/winkelwagen.png')}}" class="max-w-[30px] max-h-[30px]">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>Er zijn geen busritten beschikbaar.</div>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
