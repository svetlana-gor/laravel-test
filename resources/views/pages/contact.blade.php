@extends('layouts.app')

@section('title', " - " . $page->title)

@section('content')
	{!!$page->content!!}
	
	@include('layouts.form')

	@if(Session::has('message'))
		{{Session::get('message')}}
	@endif

@endsection