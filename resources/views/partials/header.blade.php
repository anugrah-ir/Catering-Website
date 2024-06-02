<header>
    <nav class="z-3 navbar fixed-top" style="background-color:#070952;">
        <div class="container-fluid">
            <div class="row w-100 align-items-center">
                <div class="col-auto">
                    <a class="navbar-brand" href="/"><img src="images/logo.png" width="50" height="50" alt="logo"></a>
                </div>
                <div class="col-md-8 ms-md-auto">
                    <ul class="nav nabar-nav justify-content-center" style="margin-left: 25px;">
                        <li class="nav-item">
                            <a class="nav-link" href="/" style="color:#DF86A1">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about" style="color:#DF86A1">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact" style="color:#DF86A1">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/order" style="color:#DF86A1">ORDER</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <ul class="nav">
                        @auth
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="nav-link btn btn-link" style="color:#DF86A1;">Log Out</button>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login" style="color:#DF86A1">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register" style="color:#DF86A1">Sign Up</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
