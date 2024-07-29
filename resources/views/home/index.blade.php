@extends('layouts.app-master')

@section('content')
<div class="bg-light w-100">
    @auth
    <h1>Home page</h1>
    <a href="{{ route('dashboard.index') }}" class="btn btn-lg btn-warning me-2">Goto Dashboard</a>
    </br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth

    @guest
    <h1>Home page</h1>
    <p class="lead">You are viewing the home page. Please login to view the restricted data.</p>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('images/shoe.jpg') }}" alt="Card image cap" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endguest
</div>
@endsection
