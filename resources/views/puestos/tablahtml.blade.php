

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('puestos.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de Puestos
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Puesto</th>
                    <th>Tipo de Puesto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($puestos as $puesto )
                <tr class="table-primary">
                    <td scope="row">{{$puesto->id}}</td>
                    <td>{{ $puesto->nombre}}</td>
                    <td>{{ $puesto->tipo}}</td>
                    <td> <a href="{{route('puestos.edit', $puesto->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('puestos.show', $puesto->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('puestos.show', $puesto->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$puestos->links()}}
    </div>