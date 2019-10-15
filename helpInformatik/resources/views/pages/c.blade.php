@extends('layout')
@section('content')
    <section>
        <div class="home-container">
            <div class="item">
                <!-- Masthead Avatar Image -->
                <img class="mb-0" src="{{asset('img/c.png')}}" alt="{{$title}} Logo">

                <h1 class="masthead-heading text-uppercase mb-3">{{$title}}</h1>
                <p class="masthead-subheading font-weight-light mb-5">Von Studenten für Studenten</p>
            </div>
        </div>
    </section>
@endsection
