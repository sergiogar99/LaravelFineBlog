@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    <a class="btn btn-primary btn-sm btn-secondary float-right" href="{{route('admin.posts.create')}}"> Add New Category</a>

    <h1>Posts List</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop