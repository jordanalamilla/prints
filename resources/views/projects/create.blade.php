@extends( 'layouts/app' )

@section( 'content' )

{!! Form::open(['action' => 'ProjectsController@store']) !!}
    
    <!--TITLE-->
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', '', ['placeholder' => 'Title']); !!}

    <br>
    
    <!--DESCRIPTION-->
    {!! Form::label('description', 'Description'); !!}
    {!! Form::textarea('description', '', ['placeholder' => 'Description']); !!}

    <br>
    
    <!--MEDIA-->
    {!! Form::label('media', 'Media'); !!}
    {!! Form::text('media', '', ['placeholder' => 'Graphite, Charcoal']); !!}

    <br>
    
    <!--DATE-->
    {!! Form::label('date', 'Date'); !!}
    {!! Form::text('date', '', ['placeholder' => 'Month Year']); !!}

{!! Form::close() !!}

@endsection