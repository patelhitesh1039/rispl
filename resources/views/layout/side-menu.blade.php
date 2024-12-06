@extends('../layout/main')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../layout/components/mobile-menu')
    @include('../layout/components/top-bar')
    <div class="flex overflow-hidden">
        <nav class="side-nav">
            <ul>
                <li class="side-menu side-menu--active">
                    <a href="/dashboard" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="home"></i>
                        </div>
                        <div class="side-menu__title">
                            Home
                        </div>
                    </a>
                </li>
                <li class="side-menu">
                    <a href="/customers" class="side-menu">
                        <div class="side-menu__icon">
                            <i data-lucide="user"></i>
                        </div>
                        <div class="side-menu__title">
                            Customer
                        </div>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @yield('subcontent')
        </div>
        <!-- END: Content -->
    </div>
@endsection
