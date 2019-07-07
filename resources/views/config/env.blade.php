@extends('layouts.default')

@section('content')
    
    
    <div class="title m-b-md">
        env file
    </div>

    <div class="col-12">
        APP_DEBUG: {{ env('APP_DEBUG') }}
    </div>
    <div class="col-12">
        FORMATION_MAIL_FROM: {{ env('FORMATION_MAIL_FROM') }}
    </div>
    <div class="col-12">
        FORMATION_MAIL_TO_REPLY: {{ env('FORMATION_MAIL_TO_REPLY') }}
    </div>
        
@endsection


