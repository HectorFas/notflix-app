<x-app-layout>
    <div style="float: right; margin: 10px;">
        <form action="/films/search" method="GET">
            <label for="search" style="font-size: 14px;">Search:</label>
            <input type="text" name="search" required style="width: 150px; height: 25px; font-size: 14px;">
            <button type="submit" style="height: 25px;">Search</button>
        </form>
    </div>

    <div class="film-container">
        @forelse ($films as $film)
            <div class="film-item">
                <p>{{$film->title}}</p>
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
</style>



