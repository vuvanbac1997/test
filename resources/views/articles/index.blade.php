@extends('layouts.admin.application')

@section('metadata')
@stop

@section('styles')
@stop

@section('title')

@stop

@section('header')
	<h1>Article</h1>
@stop
@section('content')
<div class="container">
	<a href="{!! action('ArticleController@create') !!}"><button class="genric-btn primary">Create</button></a>
	<div class="content  mt-4">
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<td>Id</td>
				<td>Creator</td>
				<td>Title</td>
				<td>Content</td>
			</tr>
			</thead>
			<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{$article->id}}</td>
					<td>{{$article->user['name']}}</td>
					<td>{{$article->title}}</td>
					<td>{{$article->content}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>

</div>
@stop