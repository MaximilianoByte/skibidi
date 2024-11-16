

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('lugares.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de lugares
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Lugar</th>
                    <th>Nombre Corto</th>
                    <th>Edificio ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach ($lugars as $lugar)
    <tr class="table-primary">
        <td scope="row">{{$lugar->id}}</td>
        <td>{{ $lugar->nombrelugar }}</td>
        <td>{{ $lugar->nombrecorto }}</td>
        <td>{{ $lugar->edificio_id }}</td>
        <td><a href="{{route('lugares.edit', $lugar->id)}}" class="btn button btn-primary">Editar</a></td>
        <td><a href="{{route('lugares.show', $lugar->id)}}" class="btn button btn-danger">Eliminar</a></td>
        <td><a href="{{route('lugares.show', $lugar->id)}}" class="btn button btn-warning">Ver</a></td>
    </tr>
@endforeach

            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$lugars->links()}}
    </div>