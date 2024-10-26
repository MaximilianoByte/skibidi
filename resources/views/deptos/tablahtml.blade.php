

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('deptos.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de deptos
                </caption>
                <tr>
                    <th>ID</th>
                    <th>IDDEPTO</th>
                    <th>Nombre de depto</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($deptos as $depto )
                <tr class="table-primary">
                    <td scope="row">{{$depto->id}}</td>
                    <td scope="row">{{$depto->iddepto}}</td>
                    <td>{{ $depto->nombredepto}}</td>
                    <td>{{ $depto->nombremediano}}</td>
                    <td>{{ $depto->nombrecorto}}</td>
                    <td> <a href="{{route('deptos.edit', $depto->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('deptos.show', $depto->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('deptos.show', $depto->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$deptos->links()}}
    </div>