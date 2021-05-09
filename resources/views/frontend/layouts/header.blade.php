<div class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <h1 hidden>Mamamy</h1>
            <a class="navbar-brand mx-auto" href="javascript:void(0)">
                <img src={{ asset('assets/frontend/images/icons/logo.png') }} class="logo"  alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <div class="navbar-collapse collapse" id="navb">
                <ul class="navbar-nav mx-auto">
                    @foreach($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteName() === $menu['route'] ? 'color-master' : 'text-dark' }}"
                               href="{{ route($menu['route'] ? $menu['route'] : 'test') }}">
                                {{ $menu['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="icon-header">
                <a href="javascript:void(0)"><i class="fa fa-user text-secondary mx-1"></i></a>
                <a href="javascript:void(0)"><i class="fa fa-search text-secondary mx-1"></i></a>
                <a href="javascript:void(0)"><i class="fa fa-bell text-secondary mx-1"></i></a>
            </div>
        </nav>
    </div>

</div>
