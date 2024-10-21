

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('plazas.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de Plazas
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Plaza</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($plazas as $plaza )
                <tr class="table-primary">
                    <td scope="row">{{$plaza->id}}</td>
                    <td>{{ $plaza->nombrePlaza}}</td>
                    <td> <a href="{{route('plazas.edit', $plaza->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('plazas.show', $plaza->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('plazas.show', $plaza->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$plazas->links()}}
    </div>