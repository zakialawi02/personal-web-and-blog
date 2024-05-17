<header>

    <a href="#" class="logo">>_<span class="C1">"</span><span class="C2">
            < </a>
        </span>
        <div id="menu" class="fas fa-bars">
        </div>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a class="active" href="/blog">blog</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
            <a class="btn-Gal" href="https://gallery.zakialawi.my.id/" target="_blank">Gallery</a>
            @auth()
                <form action="/logout" method="POST">
                    @csrf
                    @method("POST")
                    <button type="submit" class="btn-Signout" title="Logout"><i class="fa-solid fa-right-from-bracket"></i></i></button>
                </form>
                <a class="btn-Login" href="/admin" title="Dashboard"><i class="fa-solid fa-rocket"></i></i></a>
            @else
                <a class="btn-Login" href="/login" target="_blank" title="Login"><i class="fas fa-sign-in-alt"></i></a>
            @endauth



        </nav>

</header>
