@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> 

    <h1>Dashboard Documentation</h1>
@stop

@section('content')
    
    
    <br>
    <p>Here you have all the options related with de Posts in this Blog.</p>
    <br>

    <div x-data="{ open1: false }" class= "py-2" >
        <button class="btn btn-primary btn-sm btn-secondary" @click= "open1 = !open1" >Categories Info</button>
        <p x-show="open1" class="py-1">Here you can see all de funcionalities related with the Categories of the Posts. </p> 
    </div>
    <div x-data="{ open2: false }" class= "py-2">
        <button class="btn btn-primary btn-sm btn-secondary" @click= "open2 = !open2" >Tags Info</button>
        <p x-show="open2" class= "py-1">Here you can see all de funcionalities related with the Tags of the Posts.</p>  
    </div>

    <div x-data="{ open3: false }" class= "py-2">
        <button class="btn btn-primary btn-sm btn-secondary" @click="open3 = !open3">List Post Info</button>
        <p x-show="open3" class= "py-1">Here you can see all your Posts.</p>  
    </div>

    <div x-data="{ open4: false }" class= "py-2">
        <button class="btn btn-primary btn-sm btn-secondary" @click="open4 = !open4">Create New Post Info</button>
        <p x-show="open4" class= "py-1">Here you can Create a new Post.</p>  
    </div>
      
@stop

