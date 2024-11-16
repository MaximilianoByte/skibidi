

@if(session('mensaje'))
<p class="text-primary">{{ session('mensaje') }}</p>
@endif

   <a href="{{route('personal.create')}}" class="btn button btn-primary">Nuevo</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-striped table-hover table-borderless table-primary align-middle"
        >
            <thead class="table-light">
                <caption>
                    Catalogo de personal
                </caption>
                <tr>
                    <th>ID</th>
                    <th>RFC</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Licenciatura</th>
                    <th>LICTIT</th>
                    <th>Especializacion</th>
                    <th>ESPTIT</th>
                    <th>Maestria</th>
                    <th>MAETIT</th>
                    <th>Doctorado</th>
                    <th>DOCTIT</th>
                    <th>FechaIngSEP</th>
                    <th>FechaIngINS</th>
                    <th>Depto ID</th>
                    <th>Puesto ID</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($personals as $personale )
                <tr class="table-primary">
                    <td scope="row">{{$personale->id}}</td>
                    <td>{{ $personale->RFC}}</td>
                    <td>{{ $personale->nombres}}</td>
                    <td>{{ $personale->apellidop}}</td>
                    <td>{{ $personale->apellidom}}</td>
                    <td>{{ $personale->licenciatura}}</td>
                    <td>{{ $personale->lictit}}</td>
                    <td>{{ $personale->especializacion}}</td>
                    <td>{{ $personale->esptit}}</td>
                    <td>{{ $personale->maestria}}</td>
                    <td>{{ $personale->maetit}}</td>
                    <td>{{ $personale->doctorado}}</td>
                    <td>{{ $personale->doctit}}</td>
                    <td>{{ $personale->fechaingsep}}</td>
                    <td>{{ $personale->fechaingins}}</td>
                    <td>{{ $personale->depto_id}}</td>
                    <td>{{ $personale->puesto_id}}</td>
                    <td> <a href="{{route('personal.edit', $personale->id)}}" class="btn button btn-primary">Editar</a></td>
                    <td> <a href="{{route('personal.show', $personale->id)}}" class="btn button btn-danger">Eliminar</a></td>
                    <td> <a href="{{route('personal.show', $personale->id)}}" class="btn button btn-warning">Ver</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
        {{$personals->links()}}
    </div>