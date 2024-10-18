<nav
    class="navbar navbar-expand-sm navbar-light bg-primary"
  >
    <div class="container">
        <a class="navbar-brand" href="#">PM</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/" aria-current="page"
                        >INICIO
                        <span class="visually-hidden">(current)</span></a
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Catalogos</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                        <a class="dropdown-item" href="#"
                            >Periodos</a
                        >
                        <a class="dropdown-item" href="#"
                            >Plazas</a
                        >
                        <a class="dropdown-item" href="#"
                            >Puestos</a
                        >
                        <a class="dropdown-item" href="#"
                            >Personal</a
                        >
                        <a class="dropdown-item" href="#"
                            >Deptos</a
                        >
                        <a class="dropdown-item" href="#"
                            >Carreras</a
                        >
                        <a class="dropdown-item" href="#"
                            >Reticual</a
                        >
                        <a class="dropdown-item" href="#"
                            >Materias</a
                        >
                        <a class="dropdown-item" href="#"
                            >Alumnos</a
                        >
                    </div>
                </li>

                <li class="nav-item dropdown">
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle text-black" aria-expanded="false" data-bs-toggle="dropdown" type="button">Horarios </button>
  <div class="dropdown-menu horizontal">
            <a href="#" class="dropdown-item">Docentes</a>
            <a href="#" class="dropdown-item">Alumnos</a>
  </div>
</div>
        </li>

       <!-- Proyectos Individuales (horizontal submenu) -->
       <li class="nav-item dropdown">
        <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle text-black" aria-expanded="false" data-bs-toggle="dropdown" type="button">Proyectos Individuales </button>
  <div class="dropdown-menu horizontal">
            <a href="#" class="dropdown-item">Capacitación</a>
            <a href="#" class="dropdown-item">Asesorías Doc.</a>
            <a href="#" class="dropdown-item">Proyectos</a>
            <a href="#" class="dropdown-item">Material Didáctico</a>
            <a href="#" class="dropdown-item">Docencia e Inv.</a>
            <a href="#" class="dropdown-item">Asesoría Proyectos Ext.</a>
            <a href="#" class="dropdown-item">Asesoría a S.S.</a>
  </div>
</div>
        </li>

            <!-- Sin Submenús -->
            <li class="nav-item">
            <a class="nav-link" href="#">Instrumentación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tutorías</a>
          </li>

          <!-- Periodo Select -->
          <li class="nav-item">
            <label class="nav-link">Periodo:</label>
            <select class="form-select form-select-sm">
              <option value="ene-jun-24">Ene-Jun 24</option>
              <option value="ago-dic-24">Ago-Dic 24</option>
              <option value="ene-jun-25">Ene-Jun 25</option>
            </select>
          </li>
        </ul>
        
               
            </ul>

    @auth
   <form action="{{route('logout')}}" method="post">
    @csrf
    <button>Logout</button>
   </form>
    @endauth


        </div>
    </div>
  </nav>



<style>
    .horizontal.dropdown-menu.show {
  display: flex;
}
</style>
 