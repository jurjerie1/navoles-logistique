<header class="bg-bleu flex-center">
        <div class="container ">
        <nav class="navbar navbar-expand-lg  navbar-dark bg-bleu ">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-center " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('entreprise.gestion') }}">Mon entreprise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('entreprise..gestion.employe') }}">Mes employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('missions.part1.add') }}">Enregistrer une misson</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('missions.index') }}">Mes Missons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Mon profil</a>
                    </li>
                    @if(Auth::user()->role_app_site >= 1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">Admin</a>
                    </li>
                    @endif
                </ul>
                </div>
            </div>
        </nav>
        </div>
    </header>
