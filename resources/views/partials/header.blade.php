<header>
    <nav class="z-3 navbar fixed-top" style="background-color:#070952;"> 
        <div class="container-fluid" >
            <a class="navbar-brand" href="/"><img src="images/logo.png" width="50" height="50" alt="logo"></a>
            <ul class="nav nabar-nav" style="margin-left:95px">
                <a class="nav-link" href="/" style="color:#DF86A1">HOME</a>
                <a class="nav-link" href="/about" style="color:#DF86A1">ABOUT US</a>
                <a class="nav-link" href="/contact" style="color:#DF86A1">CONTACT</a>
                <a class="nav-link" href="/order" style="color:#DF86A1">ORDER</a>
            </ul>
            <ul class="nav">
                @auth  <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link" style="color:#DF86A1">Log Out</button>
                    </form>
                </li>
                @else
                    <a class="nav-link" href="/login" style="color:#DF86A1">Login</a>
                    <a class="nav-link" href="/register" style="color:#DF86A1">Sign Up</a>
                @endauth
            </ul>
        </div>
    </nav>
</header>
