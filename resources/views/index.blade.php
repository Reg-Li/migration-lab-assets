@extends('layouts.master')

@section('title', 'Home Page')

@section('content')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>{{ $name }}</h1>
                <hr>
                <p>Home Page (index.blade.php)</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

@endsection