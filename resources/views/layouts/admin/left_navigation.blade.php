<aside class="left-sidebar" style="text-decoration: none;">
    <div class="logo">
        {{--<a href="#welcome">--}}
            {{--<img src="{{ asset('static/web/img/logo.png') }}" alt="">--}}
        {{--</a>--}}
    </div>
    <nav class="left-nav">
        <ul id="nav">
            <li class="current"><a href="{!! action('AdminController@index') !!}">Welcome</a></li>
            <li><a href="{!! action('ArticleController@index') !!}">Article</a></li>
            <li><a href="{!! action('UserController@index') !!}">User</a></li>
        </ul>
    </nav>
</aside>