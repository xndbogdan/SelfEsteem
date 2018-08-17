@extends('layouts.app')

@section('content')
    <div id="clouds">
        <div class="cloud x1"></div>
        <!-- Time for multiple clouds to dance around -->
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class="container is-paddingless is-marginless">
        <div class="center-container">
            <div class="shadow"></div>
            <div class="mug"></div>
            <div class="cat">
                <ul class="eyes is-paddingless is-marginless">
                    <li></li>
                    <li></li>
                </ul>
                <div class="mouth"></div>
            </div>


        </div>


    </div>
    <div class="welcome w-100">
        <div class="d-flex justify-content-center">
                <h1 class="text-muted">Hello!
                <br><span class="h4 text-muted">We're glad you are here. Please make an account to be able to post.</span>
                </h1>
        </div>
    </div>

@endsection
