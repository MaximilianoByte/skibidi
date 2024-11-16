@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif
@php
    $sortField = $sortField ?? 'id'; // Campo predeterminado
    $sortDirection = $sortDirection ?? 'asc'; // Dirección predeterminada
@endphp


<a href="{{ route('deptos.create') }}" class="btn button btn-primary">Nuevo</a>
<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
            <caption>Catálogo de Departamentos</caption>
            <tr>
                <th>
                    <a href="{{ route('deptos.index', ['sort' => 'id', 'direction' => $sortField === 'id' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                        ID
                    </a>
                </th>
                <th>
                    <a href="{{ route('deptos.index', ['sort' => 'iddepto', 'direction' => $sortField === 'iddepto' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                        IDDEPTO
                    </a>
                </th>
                <th>
                    <a href="{{ route('deptos.index', ['sort' => 'nombredepto', 'direction' => $sortField === 'nombredepto' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                        Nombre de Depto
                    </a>
                </th>
                <th>
                    <a href="{{ route('deptos.index', ['sort' => 'nombremediano', 'direction' => $sortField === 'nombremediano' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                        Nombre Mediano
                    </a>
                </th>
                <th>
                    <a href="{{ route('deptos.index', ['sort' => 'nombrecorto', 'direction' => $sortField === 'nombrecorto' && $sortDirection === 'asc' ? 'desc' : 'asc']) }}">
                        Nombre Corto
                    </a>
                </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($deptos as $depto)
            <tr class="table-primary">
                <td scope="row">{{ $depto->id }}</td>
                <td scope="row">{{ $depto->iddepto }}</td>
                <td>{{ $depto->nombredepto }}</td>
                <td>{{ $depto->nombremediano }}</td>
                <td>{{ $depto->nombrecorto }}</td>
                <td><a href="{{ route('deptos.edit', $depto->id) }}" class="btn button btn-primary">Editar</a></td>
                <td><a href="{{ route('deptos.destroy', $depto->id) }}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{ route('deptos.show', $depto->id) }}" class="btn button btn-warning">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    {{ $deptos->links() }}
</div>
