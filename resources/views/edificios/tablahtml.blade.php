

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('edificios.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de edificios
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre Edificio</th>
                    <th>Nombre Corto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($edificios as $edificio )
                <tr class="table-primary">
                    <td scope="row">{{$edificio->id}}</td>
                    <td>{{ $edificio->nombreedificio}}</td>
                    <td>{{ $edificio->nombrecorto}}</td>
                    <td> <a href="{{route('edificios.edit', $edificio->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('edificios.show', $edificio->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('edificios.show', $edificio->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$edificios->links()}}
    </div>