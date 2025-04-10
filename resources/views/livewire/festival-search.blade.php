<div>
    <div class="flex justify-center mt-10">
        <input wire:model.live="search" type="text" placeholder="Zoeken op naam">
    </div>

    @if($results->isNotEmpty())
        <div class="mt-10 flex flex-wrap justify-center gap-10 min-w-[1600px]">
            @foreach($results as $result)
                <div class="flex flex-wrap gap-10 justify-center mb-2">

                    <div class=" mt-5 bg-gray-100 max-w-[700px] ">
                        <div class="flex flex-row gap-10 p-5">
                            <img src="{{asset('photos/layluna.jpeg')}}" alt="" class="max-w-[200px] max-h-[200px] p-2">
                            <div
                                class="flex items-center p-5 min-w-[300px] max-w-[300px] lg:min-w-[500px] lg:max-w-[500px]">
                                <div class="flex flex-col ml-15">
                                    <div class="flex justify-center text-3xl">{{$result->name}}</div>
                                    <div class="flex flex-row gap-10 mt-5">
                                        <a href="{{route('festival.show',$result->festival_id)}}"
                                           class="p-2 bg-gray-500 text-white hover:bg-gray-700 rounded-lg">
                                            Meer info
                                        </a>
                                        <a href="" class="p-2 bg-gray-500 hover:bg-gray-700 text-white rounded-lg">
                                            Ticket boeken
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="flex justify-center text-3xl mt-15">
                    {{ $availableFestivals }}
                </div>

            @endif
        </div>
</div>
