@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mt-4 bg-white p-4">
            @foreach($questionnaires as $questionnaire)
                <div class="col-md-12 m-2">
                    <a class="float-left">{!! $questionnaire->name!!}</a>&nbsp;
                    <button class="float-right">Take it</button>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
