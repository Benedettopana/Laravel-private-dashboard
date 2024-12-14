<header>
    <div class="my-header">
        <div class="header-container">

            {{-- left header --}}
            <div class="left-header d-flex">
                {{-- LOGO --}}
                <a class="navbar-brand text-white me-5" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                <div>
                    @auth
                    <div class="">
                        <a class="text-secondaty" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    </div>
                    @endauth
                </div>
            </div>

            {{-- right header --}}
            <div class="right-header">
                @guest
                    <div class="btn btn-outline-primary">
                        <a class="nav-link" href="{{ route('register.form') }}">{{ __('Registrazione') }}</a>
                    </div>
                    <div class="btn btn-outline-primary">
                        <a class="nav-link" href="{{ route('login.form') }}">{{ __('Login') }}</a>
                    </div>

                @else
                    <div>
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </div>
                @endguest
            </div>
        </div>

        {{-- <nav class="navbar ">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login.form') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.form') }}">{{ __('Registrazione') }}</a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                        </li>
                    @endguest
                    </ul>
            </div>
        </nav> --}}
    </div>
</header>
