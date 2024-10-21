

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('alumnos.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de Alumnos
                </caption>
                <tr>
                    <th>ID</th>
                    <th>No. Ctrl</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Sexo</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($alumnos as $alumno )
                <tr class="table-primary">
                    <td scope="row">{{$alumno->id}}</td>
                    <td>{{ $alumno->noctrl}}</td>
                    <td>{{ $alumno->nombre}}</td>
                    <td>{{ $alumno->apellido}}</td>
                    <td>{{ $alumno->apellidom}}</td>
                    <td>{{ $alumno->sexo}}</td>
                    <td>{{ $alumno->email}}</td>
                    <td> <a href="{{route('alumnos.edit', $alumno->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('alumnos.show', $alumno->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('alumnos.show', $alumno->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$alumnos->links()}}
    </div>