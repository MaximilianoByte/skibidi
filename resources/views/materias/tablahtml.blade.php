

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('materias.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de materias
                </caption>
                <tr>
                    <th>ID</th>
                    <th>IDMATERIA</th>
                    <th>Nombre de materia</th>
                    <th>Nivel</th>
                    <th>Nombre mediano</th>
                    <th>Nombre corto</th>
                    <th>Modalidad</th>
                    <th>Fecha en Vigor</th>
                    <th>Semestre</th>
                    <th>RETICULA ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($materias as $materia )
                <tr class="table-primary">
                    <td scope="row">{{$materia->id}}</td>
                    <td scope="row">{{$materia->idmateria}}</td>
                    <td>{{ $materia->nombreMateria}}</td>
                    <td>{{ $materia->nivel}}</td>
                    <td>{{ $materia->nombreMediano}}</td>
                    <td>{{ $materia->nombreCorto}}</td>
                    <td scope="row">{{$materia->modalidad}}</td>
                    <td scope="row">{{$materia->fechaEnVigor}}</td>
                    <td>{{ $materia->semestre}}</td>
                    <td>{{ $materia->reticula_id}}</td>
                    <td> <a href="{{route('materias.edit', $materia->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('materias.show', $materia->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('materias.show', $materia->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$materias->links()}}
    </div>