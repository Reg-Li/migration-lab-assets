@extends('layouts.master')

@section('title', 'Services Page')

@section('content')

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Services</h1>
                <hr>
                <p>Services Page (services.blade.php)</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @forelse(range(1, 4) as $index)
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3>{!! '<span style="color:red">Hello</span>' !!}</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                @empty
                No Posts
                @endforelse

            </div>
        </div>
    </section>

@endsection