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
    {!! Form::text('date', '', ['placeholder' => 'September 2018']); !!}

    <br>
    
    <!--PRINTS AVAILABLE-->
    {!! Form::label('prints_available', 'Prints Available'); !!}
    {!! Form::text('prints_available', '', ['placeholder' => '10']); !!}

    <br>
    
    <!--PRINT SIZE-->
    {!! Form::label('print_size', 'Print Size'); !!}
    {!! Form::text('print_size', '', ['placeholder' => '11 x 15 inch']); !!}

    <br>
    
    <!--PRINT PRICE-->
    {!! Form::label('print_price', 'Print Price'); !!}
    {!! Form::text('print_price', '', ['placeholder' => '50.00']); !!}

    <br>

    <!--ORIGINAL AVAILABLE-->
    {!! Form::label('original_avaiable', 'Original Available?'); !!}
    {!! Form::checkbox('original_avaiable', '', true); !!}

    <div id="original-details">

        <!--ORIGINAL SIZE-->
        {!! Form::label('original_size', 'Original Size'); !!}
        {!! Form::text('original_size', '', ['placeholder' => '18 x 24 inch']); !!}

        <br>

        <!--ORIGINAL PRICE-->
        {!! Form::label('original_price', 'Original Price'); !!}
        {!! Form::text('original_price', '', ['placeholder' => '800.00']); !!}

    </div>

    {!! Form::submit( 'Create' ) !!}

{!! Form::close() !!}

@endsection