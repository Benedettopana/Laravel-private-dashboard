<header>
    <div class="my-header">
        <div class="header-container">

            {{-- left header --}}
            <div class="left-header d-flex">
                {{-- LOGO --}}
                <a class="navbar-brand text-white me-5" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                <div class="d-flex gap-3">
                    @auth
                    <div class="">
                        <a class="text-secondaty" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                    </div>
                    <div class="">
                        <a class="text-secondaty" href="{{ route('courses.index') }}">{{ __('courses') }}</a>
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
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>

                @else
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>
