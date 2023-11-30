<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex flex-wrap gap-5 justify-center">
                    <div class="flex-[1_1_calc(25%-20px)] text-center">
                        <p class="text-fuchsia-50">{{$film->title}}</p>
                        <div class="flex justify-center">
                            <img src="{{$film->image}}" alt="{{$film->title}}" style="max-width: 100%; max-height: 100%;">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
