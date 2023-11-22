<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Latest films!") }}
                    <div class="film-container">
                        @forelse ($latestFilms as $film)
                        <div class="film-item">
                            <p class="film-title">{{$film->title}}</p>
                            <div class="image-container">
                                <img src="{{$film->image}}" alt="{{$film->title}}" style="max-width: 100%; max-height: 100%;">
                            </div>
                        </div>
                        @empty
                            <p>Tenemos un problema con el servidor y no hay peliculas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Keep watching") }}
                    <div class="film-container">
                        @forelse ($films as $film)
                        <div class="film-item">
                            <p class="film-title">{{$film->title}}</p>
                            <div class="image-container">
                                <img src="{{$film->image}}" alt="{{$film->title}}" style="max-width: 100%; max-height: 100%;">
                            </div>
                        </div>
                        @empty
                            <p>Tenemos un problema con el servidor y no hay peliculas</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<style>
    .film-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Ajusta este valor según tus necesidades de espacio entre las películas */
        justify-content: center; /* Centra los elementos en el eje horizontal */
    }

    .film-item {
        flex: 1 0 calc(25% - 20px); /* 25% para que haya 4 elementos por fila */
        box-sizing: border-box;
        text-align: center;
    }

    .image-container {
        display: flex;
        justify-content: center; /* Centra la imagen en el contenedor */
    }

    .film-title {
        color: wheat;
    }

</style>
