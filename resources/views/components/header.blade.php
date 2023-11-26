<header class="top-area">
    <div class="header-area">
        <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Shihab</a>
                </div>

                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="{{ request()->routeIs('home') ? 'active' : '' }}>"><a
                                href="{{ route('home') }}">Home</a></li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}>"><a
                                href="{{ route('about') }}">About</a></li>
                        <li class="{{ request()->routeIs('projects') ? 'active' : '' }}"><a
                                href="{{ route('projects') }}">Projects</a></li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a
                                href="{{ route('contact') }}">contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>

    <div class="clearfix"></div>

</header>
