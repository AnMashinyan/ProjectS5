
<header class="tm-header" id="tm-header">

    <div class="tm-header-wrapper">

        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo">
                <img src="{{asset('assets/caregiverPage/img/user2.png')}}" alt="" width="70" height="70">

            </div>
                 <h1 class="text-center">  {{Auth()->user()->name}}</h1>
             </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item">
                    <a href="{{route('home')}}" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Main
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="{{route('img.single')}}" class="tm-nav-link">

                    <i class="fas fa-pen"></i>
                        Images
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="{{route('task.single')}}" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Tasks
                    </a>
                </li>
                <li class="tm-nav-item">
                    <form method="GET" class="form-inline tm-search-form" action="{{route('search')}}">
                        <input class="form-control tm-search-input @error('s') is-invalid @enderror" name="s"
                               type="text" placeholder="Search..."
                               aria-label="Search" required>
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </li>

                    <li class="tm-nav-item">
                        <a href="{{route('caregiverIndex')}}" class="tm-nav-link">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            To the Caregiver Page
                        </a>
                    </li>
                <li class="tm-nav-item">

                    <a href="{{route('logout')}}"  class="tm-nav-link">

                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        Logout
                    </a>
                </li>

            </ul>
        </nav>

        @include('layouts.sidebar')
    </div>
</header>
