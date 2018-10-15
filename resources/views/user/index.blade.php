@extends('layouts.admin.application')

@section('metadata')
@stop

@section('styles')
@stop

@section('title')

@stop

@section('header')
	<h1>User</h1>
@stop
@section('content')
	<div class="container">
		<a href="{!! action('ArticleController@create') !!}"><button class="genric-btn primary">Create</button></a>
		<div class="content  mt-4">
			<table class="table table-bordered">
				<thead>
				<tr>
					<td>Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Role</td>
					<td>Description</td>
					<td>Action</td>
				</tr>
				</thead>
				<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->roles()->first()->name}}</td>
						<td>{{$user->roles()->first()->description}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>

	</div>

@endsection