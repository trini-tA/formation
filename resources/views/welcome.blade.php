
@extends('layouts.default')

@section('content')
    
    
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href="/env">env</a>
        <a href="/coming-soon">coming-soon</a>
        
    </div>
        
    <button id="test" class="content-button">Test</button>
    <button id="test-2" class="content-button">Test-2</button>
    <div id="append">
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $('.content-button').on( 'click', function(){
            //" + this.id + "
            $.get( "/api/block/" + this.id, function( data ) {
                $( "#append" ).html( data );
            })
            .fail( function(error){
                alert( JSON.stringify ( error ) );
            });

        });
    </script>
@endsection
