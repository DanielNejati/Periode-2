<x-app-layout>

    @livewire('busride-search')
{{--            <div class="flex gap-2 flex-col mb-10">--}}
{{--                --}}{{--    Individual bustrips--}}
{{--                @if(!$busrides->isEmpty())--}}
{{--                    @foreach ($busrides as $busride)--}}
{{--                        <div class="flex justify-center text-lg lg:text-xl p-2">--}}
{{--                            <div class="flex flex-row items-center min-w-[800px] max-w-[800px] lg:min-w-[1000px] lg:max-w-[1000px] bg-gray-400">--}}
{{--                                <div--}}
{{--                                    class="p-2 min-w-[250px] max-w-[250px] flex justify-center:">{{$busride->Festival->name}}--}}
{{--                                </div>--}}
{{--                                <div class="scale-230 flex items-center text-white"><p>|</p></div>--}}
{{--                                <div class="p-2 min-w-[400px] max-w-[400px] flex justify-center align-middle">--}}
{{--                                    <div> {{$busride->departure}}</div>--}}
{{--                                    <img src="{{asset('photos/pijltje.png')}}" alt="" class="max-w-[30px] max-h-[30px]">--}}
{{--                                    <div>{{$busride->location}}</div>--}}
{{--                                </div>--}}
{{--                                <div class="scale-230 flex items-center text-white"><p>|</p></div>--}}
{{--                                <div class="p-2 min-w-[200px] max-w-[200px] flex justify-center">--}}
{{--                                    {{carbon\carbon::parse($busride->departure_time)->format('H:i')}}--}}
{{--                                    ---}}
{{--                                    {{carbon\carbon::parse($busride->arrival_time)->format('H:i')}}--}}
{{--                                </div>--}}
{{--                                <div class="scale-230 flex items-center text-white"><p>|</p></div>--}}
{{--                                <div title="Hiermee kan je een ticket kopen naar het passende busrit" class="p-2 min-w-[150px] max-w-[150px] flex justify-center">--}}
{{--                                    <img src="{{asset('photos/winkelwagen.png')}}" class="max-w-[30px] max-h-[30px]">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <div>Er zijn geen busritten beschikbaar.</div>--}}
{{--                @endif--}}
{{--            </div>--}}

</x-app-layout>
