<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="bg-gray-50">
            <input>
        </div>
    </div>

    @foreach ($festivals as $festival)
    <div class="flex flex-wrap gap-10 justify-center mb-2">

        <div class=" mt-5 bg-gray-100 ">
            <div class="flex flex-row gap-10 p-5">
                <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[200px] max-h-[200px] p-2">
                <div class="flex items-center p-5 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                    <div class="flex flex-col ml-15">
                        <div class="flex justify-center text-3xl">{{$festival->name}}</div>
                        <div class="flex flex-row gap-10 mt-5">
                            <a href="{{route('festival.show',$festival->festival_id)}}" class="p-2 bg-blue-500 hover:bg-blue-700 rounded-lg">
                                Meer info
                            </a>
                            <a href="" class="p-2 bg-blue-500 hover:bg-blue-700 rounded-lg">
                                Ticket boeken
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
