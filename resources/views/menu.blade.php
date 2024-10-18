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
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ayuda</a>
                </li>

            </ul>

      
    <!-- LOGIN Y LOGOUT-->
    <li class="nav-item" role="presentation">
        <a href="{{ route('login') }}" class="nav-link" 
            >Login</a
        >
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{ route('register') }}" class="nav-link" 
            >Register</a
        >
    </li>



            <form class="d-flex my-2 my-lg-0">
                <input
                    class="form-control me-sm-2"
                    type="text"
                    placeholder="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0 bg-white"
                    type="submit"
                >
                    Search
                </button>
            </form>
        </div>
    </div>
  </nav>