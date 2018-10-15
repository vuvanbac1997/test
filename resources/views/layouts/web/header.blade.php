<!-- Start Header Area -->
<header class="default-header">
    <div class="container-fluid">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="{!! action('HomeController@index') !!}"><img src="{{ URL::asset('static/web/img/logo.png') }}" alt=""></a>
                </div>
                <div class="main-menubar d-flex align-items-center">

                    <nav class="hide">
                        <a href="{!! action('HomeController@index') !!}">Home</a>
                        @if (Auth::check() )
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </nav>
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="banner-area relative">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center">
            <div class="banner-left col-lg-6">
                <img class="d-flex mx-auto img-fluid" src="{{ URL::asset('static/web/img/header-img.png') }}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="story-content">
                    <h6 class="text-uppercase">From the for User interface</h6>
                    <h1>Behind Every <span class="sp-1">Success</span><br>
                        There is a <span class="sp-2">Cactus</span></h1>
                    <a href="#" class="genric-btn primary circle arrow">Get Started<span class="lnr lnr-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>