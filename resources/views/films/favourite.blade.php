<x-app-layout>
    <div class="film-container">
        @forelse ($favouriteFilms as $film)
            <div class="film-item">
                <p class="film-title">{{$film->title}}</p>
                <div class="content-container">
                    <div class="image-container">
                        <img src="{{$film->image}}" alt="{{$film->title}}">
                    </div>
                    <livewire:counter :filmid="$film->id"/>
                </div>
            </div>
        @empty
            <p>Tenemos un problema con el servidor y no hay películas</p>
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

    .content-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .image-container {
        display: flex;
        justify-content: center;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .film-title {
        color: wheat;
    }

    @media (max-width: 768px) {
        .film-item {
            flex-basis: calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .film-item {
            flex-basis: calc(100% - 20px);
        }
    }
</style>
