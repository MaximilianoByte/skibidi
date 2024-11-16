

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('personalplazas.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de personalplazas
                </caption>
                <tr>
                    <th>ID</th>
                    <th>Tipo de Nombramiento</th>
                    <th>Plaza_ID</th>
                    <th>Personal_ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($personalplazas as $personalplaza )
                <tr class="table-primary">
                    <td scope="row">{{$personalplaza->id}}</td>
                    <td>{{ $personalplaza->tiponombramiento}}</td>
                    <td>{{ $personalplaza->plaza_id}}</td>
                    <td>{{ $personalplaza->personal_id}}</td>
                    <td> <a href="{{route('personalplazas.edit', $personalplaza->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('personalplazas.show', $personalplaza->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('personalplazas.show', $personalplaza->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$personalplazas->links()}}
    </div>