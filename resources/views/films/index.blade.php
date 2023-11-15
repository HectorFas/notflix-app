<x-app-layout>


        <p>Estas son tus peliculas</p>
        @forelse ($films as $film)
            <div>
                <p>{{$film->title}}</p>
                <img src={{$film->image}} width=100/>
                <livewire:counter :filmid="$film->id"/>
            </div>

        @empty
            <p>Tenemos un problema con el servidor y no hay peliculas</p>
        @endforelse

</x-app-layout>
