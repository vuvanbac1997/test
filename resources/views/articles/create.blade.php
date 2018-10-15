@extends('layouts.admin.application')

@section('metadata')
@stop

@section('styles')
@stop

@section('title')

@stop

@section('header')

@stop
@section('content')
<div class="container">
	<a href="{!!  URL::action('ArticleController@index') !!}"><button class="genric-btn danger">Back</button></a>
	<div class="content mt-4">
		<form method ="POST" action="{!! URL::action('ArticleController@store')!!}" class="form-group">
		@csrf
		<label for="Title">Title</label>
		<input id="Title" name="title" type="text" class="form-control" placeholder="Title">
		<label for="Content">Content</label>
		<input id="Content" name="content" type="text" class="form-control" placeholder="Content">
		<label for="submit">
			<button class="genric-btn primary mt-2">Thêm</button>
		</label>
		</form>
	</div>


</div>
@endsection