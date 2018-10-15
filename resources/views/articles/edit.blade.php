@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-md-8 offset-2">
		@if(Auth::user()->roles->first()->name == 'user')
            <a href="{!!  URL::action('HomeController@index') !!}"><button class="btn btn-danger mb-3">Back</button></a>
        @endif
		<form method ="POST" action="{!! URL::action('ArticleController@update', $article->id)!!}" class="form-group">
		@csrf
			<label for="Title">Title</label>
			<input id="Title" name="title" type="text" class="form-control" placeholder="Title" value="{{ $article->title}}">
			<label for="Content">Content</label>
			<input id="Content" name="content" type="text" class="form-control" placeholder="Content" value="{{ $article->content}}">
			<label for="submit">
				<button class="btn btn-primary mt-2">Thêm</button>
			</label>
		</form>

	</div>
</div>
@endsection