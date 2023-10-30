<x-app-layout>

            @if($films)
                <p>Estas son tus peliculas</p>
                @foreach ($films as $film)
                    <div>
                        <p>{{$film->title}}</p>
                        <img src={{$film->image}} width=100/>
                    </div>

                @endforeach
            @else
                <p>Tenemos un problema con el servidor y no hay peliculas</p>
            @endif

</x-app-layout>
