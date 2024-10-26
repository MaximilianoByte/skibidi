

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('carreras.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de carreras
                </caption>
                <tr>
                    <th>ID</th>
                    <th>IDCARRERA</th>
                    <th>Nombre de carrera</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th>Id depto</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($carreras as $carrera )
                <tr class="table-primary">
                    <td scope="row">{{$carrera->id}}</td>
                    <td scope="row">{{$carrera->idcarrera}}</td>
                    <td>{{ $carrera->nombrecarrera}}</td>
                    <td>{{ $carrera->nombremediano}}</td>
                    <td>{{ $carrera->nombrecorto}}</td>
                    <td>{{ $carrera->depto_id}}</td>
                    <td> <a href="{{route('carreras.edit', $carrera->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('carreras.show', $carrera->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('carreras.show', $carrera->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$carreras->links()}}
    </div>