<x-app-layout>

    <div class="flex justify-center items-center mt-15 mb-15">
        <div class="flex flex-col bg-gray-300 min-w-[1000px] max-w-[1000px] lg:min-w-[1200px] lg:max-w-[1200px]">
            <div class="flex justify-center bg-gray-400 p-4 text-3xl">
                Gebruiker wijzigen
            </div>
            <form action="{{route('user.usersUpdate', $user->user_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex justify-center mt-10 mb-10">
                    <div class="flex flex-col min-w-[1000px]">
                        <div class="mb-4">
                            <label for="name">Naam:</label>
                            <input type="text" name="name" id="name"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   value="{{$user->name}}">
                            @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email">Email<label>
                                    <input type="text" name="email" id="email"
                                           class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                           value="{{$user->email}}">
                                    @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="tel">Telefoon:</label>
                            <input type="text" name="tel" id="tel"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   value="{{$user->tel}}">
                            @error('tel')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="saldo">Saldo:</label>
                            <input type="number" name="saldo" id="saldo"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   value="{{$user->saldo}}">
                            @error('saldo')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="vip_punten">Vip punten:</label>
                            <input type="number" name="vip_punten" id="vip_punten"
                                   class="flex justify-center w-full p-2 border border-gray-300 rounded"
                                   value="{{$user->vip_punten}}">
                            @error('vip_punten')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4 flex justify-center items-center gap-5">
                            <label for="role">Rol:</label>
                            <select name="role" id="role">
                                <option value="" hidden="">{{$user->role}}</option>
                                <option value="Admin">Admin</option>
                                <option value="Customer">Customer</option>
                                <option value="Planner">Planner</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit"> Veranderen </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
