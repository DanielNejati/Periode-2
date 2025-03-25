@vite(['resources/js/checkbox.js'])
<x-app-layout>
    <div class="flex justify-center items-center mt-15">
        <div class="flex flex-col min-w-[600px] max-w-[600px] lg:max-w-[800px] lg:min-w-[800px] bg-gray-400">
            <div class="flex justify-center p-4 text-3xl">Festival Lijst</div>
            <div class="bg-gray-300 p-6 text-2xl">
                <div class="flex justify-center">
                    <p class="bg-gray-400 p-3">Zoeken op:</p>
                </div>
                {{-- Checkboxes to search by the selected box--}}
                <div class="flex flex-row justify-center gap-15 items-center text-xl mt-5" id="searchby">
                    <div>
                        <input id="busrit_id" name="busrit_id" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="busrit_id" class="select-none">Festival-id</label>
                    </div>
                    <div>
                        <input id="festival_name" name="festival_name" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="festival_name" class="select-none">Festival naam</label>
                    </div>
                    <div>
                        <input id="locatie" name="locatie" type="checkbox" onchange="checkOnlyOne(this, searchby)">
                        <label for="locatie" class="select-none">Locatie</label>
                    </div>
                </div>
                {{-- Search bar  + option to search by date--}}
                <div class="flex justify-center flex-row text-xl mt-5 gap-5">
                    <input class="min-w-[500px]" placeholder="Busrit zoeken..." type="search">
                    <div class="flex flex-col" id="searchsortby">
                        <div>
                            <input id="date_first" name="date_first" type="checkbox" onchange="checkOne(this, searchsortby)">
                            <label for="date_first" class="select-none">Meest recente</label>
                        </div>
                        <div>
                            <input id="date_last" name="date_last" type="checkbox" onchange="checkOne(this, searchsortby)">
                            <label for="date_last" class="select-none">Laatste eerst</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
