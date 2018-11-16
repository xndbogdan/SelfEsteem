@extends('layouts.app')

@section('content')
<div class="container">
        <div class="mt-5 bg-white p-4 rounded">
            @foreach($questionnaires as $questionnaire)
                <div class="d-flex justify-content-between w-100">
                    <div>
                        <a class="float-left">{!! $questionnaire->name!!}</a>&nbsp;
                    </div>
                   <div>
                       <button class="float-right btn btn-dark disabled">Take it (not implemented)</button>
                   </div>

                </div>
            @endforeach
        </div>
</div>
@endsection
