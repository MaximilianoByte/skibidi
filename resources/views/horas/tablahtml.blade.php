

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('horas.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de horas
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Hora de Inicio</th>
                    <th>Hora de Fin</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($horas as $hora )
                <tr class="table-primary">
                    <td scope="row">{{$hora->id}}</td>
                    <td>{{ $hora->hora_ini}}</td>
                    <td>{{ $hora->hora_fin}}</td>
                    <td> <a href="{{route('horas.edit', $hora->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('horas.show', $hora->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('horas.show', $hora->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$horas->links()}}
    </div>