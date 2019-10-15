@extends('layout')
@section('content')
    <section>
        <div class="home-container">
            <div class="item">
                <!-- Masthead Avatar Image -->
                <img class="mb-0" src="{{asset('img/logo.png')}}" alt="{{$title}} Logo">

                <h1 class="masthead-heading text-uppercase mb-3">{{$title}}</h1>
                <p class="masthead-subheading font-weight-light mb-5">Von Studenten für Studenten</p>
            </div>
            <div class="cards">
                <div class="card">
                    <img src="{{asset('img/analysis.png')}}" class="card-img-top" alt="Analysis Bild">

                    <div class="card-body">
                        <h5 class="card-title">Analysis</h5>
                        <p class="card-text">Kurvendisskursion ???<br> Schau mal vorbei</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('page', ['page' => 'analysis'])}}" class="btn btn-primary">Find Analysis Help</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/c.png')}}" class="card-img-top" alt="Programmieren in C Bild">
                    <!--- hier img einfügen und svg ersetzen-->
                    <div class="card-body">
                        <h5 class="card-title">C</h5>
                        <p class="card-text">Von if-else bis Verkettete Liste</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('page', ['page' => 'c'])}}" class="btn btn-primary">Go coding</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/ra.png')}}" class="card-img-top" alt="Rechnerarchitektur Bild">
                    <div class="card-body">
                        <h5 class="card-title">Rechnerarchitektur</h5>
                        <p class="card-text">Assembler? Schaltungen?? Kein Problem</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('page', ['page' => 'ra'])}}" class="btn btn-primary">Assemblieren Sie hier </a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/algdat.png')}}" class="card-img-top" alt="Algorithmen und Datenstrukturen Bild">
                    <!--- hier img einfügen und svg ersetzen-->
                    <div class="card-body">
                        <h5 class="card-title">AlgDat</h5>
                        <p class="card-text">Algorithmen & Friends</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('page', [ 'page' => 'algdat'])}}" class="btn btn-primary">Go here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
