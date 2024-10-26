

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('reticulas.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de reticulas
                </caption>
                <tr>
                    <th>ID</th>
                    <th>IDRETICULA</th>
                    <th>Descripcion</th>
                    <th>Fecha en vigor</th>
                    <th>Carrera ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($reticulas as $reticula )
                <tr class="table-primary">
                    <td scope="row">{{$reticula->id}}</td>
                    <td scope="row">{{$reticula->idreticula}}</td>
                    <td>{{ $reticula->descripcion}}</td>
                    <td>{{ $reticula->fechaEnVigor}}</td>
                    <td>{{ $reticula->carrera_id}}</td>
                    <td> <a href="{{route('reticulas.edit', $reticula->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('reticulas.show', $reticula->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('reticulas.show', $reticula->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$reticulas->links()}}
    </div>