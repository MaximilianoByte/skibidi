

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('periodos.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de periodos
                </caption>
                <tr>
                    <th>IDPERIODO</th>
                    <th>Periodo</th>
                    <th>Descripcion</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha Final</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($periodos as $periodo )
                <tr class="table-primary">
                    <td scope="row">{{$periodo->idperiodo}}</td>
                    <td>{{ $periodo->periodo}}</td>
                    <td>{{ $periodo->descCorta}}</td>
                    <td>{{ $periodo->fechaIni}}</td>
                    <td>{{ $periodo->fechaFin}}</td>
                    <td> <a href="{{route('periodos.edit', $periodo->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('periodos.show', $periodo->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('periodos.show', $periodo->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$periodos->links()}}
    </div>