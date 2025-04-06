<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="flex flex-row bg-gray-50">
            <div class="flex items-center min-w-[320px]">
                <input placeholder="Zoek het type festival..." class="min-w-[320px]">
                <img src="{{asset('photos/searchglass.png')}}" alt="" class="max-w-[40px]">
            </div>
        </div>
    </div>

{{--    @if(!$searchresult->isEmpty())--}}
{{--        @foreach($searchresult as $sr)--}}
{{--            {{$sr->bus_id}}--}}
{{--        @endforeach--}}
{{--    @else--}}
{{--        Er zijn geen festivals gevonden--}}
{{--    @endif--}}

</x-app-layout>
