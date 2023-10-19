<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li
            @class([
                'nav-item',
                'active' => \Route::currentRouteName() === 'home'
            ])
        >
            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li
            @class([
                'nav-item',
                'active' => in_array(\Route::currentRouteName(), ['blog.index', 'blog.show'])
            ])
        >
            <a class="nav-link" href="{{ route('blog.index') }}">Blog <span class="sr-only">(current)</span></a>

        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">World <span class="sr-only">(current)</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                <a class="dropdown-item" href="#">Action in</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton3" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">Community<span
                    class="sr-only">(current)</span></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                <a class="dropdown-item" href="#">Action in</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>

        <li
            @class([
                'nav-item',
                'active' => \Route::currentRouteName() === 'contact'
            ])
        >
            <a class="nav-link" href="{{ route('contact') }}">Contact <span class="sr-only">(current)</span></a>
        </li>
    </ul>
</div>
