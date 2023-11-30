<x-app-layout>

    <div class="film-container">
        @forelse ($favouriteFilms as $film)
            <div class="film-item">
                <p class="film-title">{{$film->title}}</p>
                <div class="image-container">
                    <img src="{{$film->image}}" alt="{{$film->title}}" style="max-width: 100%; max-height: 100%;">
                </div>
                <livewire:counter :filmid="$film->id"/>
            </div>
        @empty
            <p>Tenemos un problema con el servidor y no hay peliculas</p>
        @endforelse
    </div>
</x-app-layout>

<style>
    .film-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .film-item {
        flex: 1 0 calc(25% - 20px);
        box-sizing: border-box;
        text-align: center;
    }

    .image-container {
        display: flex;
        justify-content: center;
    }

    .film-title {
        color: wheat;
    }
</style>
