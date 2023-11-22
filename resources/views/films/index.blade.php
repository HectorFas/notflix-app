<x-app-layout>
    <div style="float: right; margin: 10px;">
        <form action="/films/search" method="get">
            <label class="text-white" for="search" style="font-size: 14px;">Search:</label>
            <input type="text" name="search" required style="width: 150px; height: 25px; font-size: 14px;">
            <button class="bg-purple-50 text-purple-500" type="submit" style="height: 25px;">Search</button>
        </form>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-wrap gap-5 justify-center">
                @forelse ($films as $film)
                    <div class="flex-[1_1_calc(25%-20px)] text-center">
                        <p class="text-fuchsia-50">{{$film->title}}</p>
                        <div class="flex justify-center">
                            <img src="{{$film->image}}" alt="{{$film->title}}" style="max-width: 100%; max-height: 100%;">
                        </div>
                        <livewire:counter :filmid="$film->id"/>
                    </div>
                @empty
                    <p>Tenemos un problema con el servidor y no hay peliculas</p>
                @endforelse
            </div>
        </div>
    </div>
    @if (count($films) == 4)
        <div class="py-12"></div>
    @endif
</x-app-layout>



