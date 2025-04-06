<div>
    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col min-w-[1200px] max-w-[1200px] lg:max-w-[1400px] lg:min-w-[1400px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">User List</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex justify-center">
                    <p class="bg-gray-400 p-3">Filter by:</p>
                </div>
                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">
                    <div>
                        <input id="user_id" name="user_id" type="checkbox" wire:click="setSearchBy('user_id')" {{ $searchByUserId ? 'checked' : '' }}>
                        <label for="user_id" class="select-none">ID</label>
                    </div>
                    <div>
                        <input id="name" name="name" type="checkbox" wire:click="setSearchBy('name')" {{ $searchByName ? 'checked' : '' }}>
                        <label for="name" class="select-none">Name</label>
                    </div>
                    <div>
                        <input id="email" name="email" type="checkbox" wire:click="setSearchBy('email')" {{ $searchByEmail ? 'checked' : '' }}>
                        <label for="email" class="select-none">Email</label>
                    </div>
                </div>
                <div class="flex justify-center flex-row text-xl mt-5 gap-5">
                    <input class="min-w-[500px]" wire:model.live="search" placeholder="Search user..." type="search">

                </div>

                <div class="mb-10">
                    @foreach($users as $user)
                        <div class="flex justify-center">
                            <div class="flex flex-wrap mt-10 min-w-[1200px] max-w-[1200px] bg-gray-400 p-3 rounded-xl">
                                <div class="flex flex-row">
                                    <div class="flex justify-center items-center">
                                        <label for="user_id" class="flex justify-center text-xl min-w-[40px] max-w-[40px]">{{$user->user_id}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="user_name" class="flex justify-center min-w-[300px] max-w-[300px]">{{$user->name}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="email" class="flex justify-center text-xl min-w-[450px] max-w-[450px]">{{$user->email}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="tel" class="flex justify-center text-xl min-w-[200px] max-w-[200px]">{{$user->tel}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <label for="saldo" class="flex justify-center text-xl min-w-[100px] max-w-[100px]">€{{$user->saldo}}</label>
                                        <div class="scale-280 mb-2.5 text-white"> |</div>
                                        <a href="" class="flex justify-center min-w-[70px] max-w-[70px]">
                                            <img src="{{asset('photos/accounthistory.png')}}" class="max-w-[40px] ">
                                        </a>
                                        <a href="{{route('user.usersEdit', $user->user_id)}}" class="flex justify-center min-w-[70px] max-w-[70px]">
                                            <img src="{{asset('photos/pencil.png')}}" class="max-w-[40px] ">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
