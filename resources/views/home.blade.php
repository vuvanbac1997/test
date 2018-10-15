<!DOCTYPE html>
<html>
    <head>
        <!-------------------------------- Begin: Meta ----------------------------------->
    @include('layouts.web.meta')
    @yield('metadata')
    <!-------------------------------- End: Meta ----------------------------------->

        <!-------------------------------- Begin: stylesheet ----------------------------------->
    @include('layouts.web.style')
    @yield('styles')
    <!-------------------------------- End: stylesheet ----------------------------------->

    </head>
    <style>
        .content{
            box-shadow:0px 4px 5px 0px rgba(0,0,0,0.5);
            background-color: rgba(108,187,35,0.85);
        }
        .content h1{
            font-family: "Poppins",sans-serif;

        }
        .content .card{
            box-shadow:0px 4px 5px 0px rgba(0,0,0,0.5);
        }

    </style>
</html>
<body>
        <div class="oz-body-wrap">
            @include('layouts.web.header')
            <!-------------------------------- End: Header ----------------------------------->

            <div class="card content">
                <div class="row">
                    <div class="container">
                        <h1 class="text-center mb-2">Article</h1>
                        <hr>
                    </div>
                </div>

                <div class="row mb-3 ml-3">
                    <div class="col-md-4">
                        <a href="{!! action('ArticleController@create') !!}"><button class="genric-btn primary-border">Create</button></a>
                    </div>
                </div>
                <div class="row mr-3 ml-3 mb-3">
                    @foreach($articles as $article)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    {{$article['title']}}
                                    @if($article->user->roles->first()->name == 'admin')
                                        <span class=" badge badge-info"> ad</span>
                                    @endif
                                    @if (Auth::user()->id == $article['user_id'])
                                        <a href="{!! URL::action('ArticleController@edit', $article->id) !!}"><button class="btn btn-info float-right btn-sm ">Edit</button></a>
                                        <a href="{!! URL::action('ArticleController@destroy', $article->id) !!}"><button class="mr-1 btn btn-danger float-right btn-sm">Delete</button></a>
                                    @endif
                                    <hr>
                                    {{ $article['content'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @include('layouts.web.faq')
            @include('layouts.web.contact')
            @include('layouts.web.footer')
        </div>
        @include('layouts.web.script')
</body>
{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<a href="{!! URL::action('ArticleController@create') !!}"><button class="btn btn-primary">Create</button></a>--}}
            {{--@if(Auth::user()->roles->first()->name == 'admin')--}}
                {{--<a href="/admin"><button class="btn btn-danger">Back</button></a>--}}
            {{--@endif--}}

        {{--</div>--}}
    {{--</div>--}}
    {{----}}
    {{--<div class="row justify-content-center">--}}
        {{--@foreach($articles as $article)--}}
        {{--<div class="col-md-8 mt-3">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--{{$article['title']}}--}}
                    {{--@if($article->user->roles->first()->name == 'admin')--}}
                        {{--<span class=" badge badge-info"> ad</span>--}}
                    {{--@endif--}}
                    {{--@if (Auth::user()->id == $article['user_id'])--}}
                        {{--<a href="{!! URL::action('ArticleController@edit', $article->id) !!}"><button class="btn btn-info float-right btn-sm ">Edit</button></a>--}}
                        {{--<a href="{!! URL::action('ArticleController@destroy', $article->id) !!}"><button class="btn btn-danger float-right btn-sm">Delete</button></a>--}}
                    {{--@endif--}}
                {{--</div>--}}
                {{--<div class="card-body">--}}
                    {{--{{ $article['content'] }}--}}

                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}

{{--</div>--}}
{{--@endsection--}}
