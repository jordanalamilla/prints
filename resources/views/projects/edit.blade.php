@extends( 'layouts/app' )

@section( 'content' )

{!! Form::open(['action' => 'ProjectsController@store']) !!}
    
    <!--TITLE-->
    {!! Form::label('title', 'Title'); !!}
    {!! Form::text('title', $project->title, ['placeholder' => 'Title']); !!}

    <br>
    
    <!--DESCRIPTION-->
    {!! Form::label('description', 'Description'); !!}
    {!! Form::textarea('description', $project->description, ['placeholder' => 'Description']); !!}

    <br>
    
    <!--MEDIA-->
    {!! Form::label('media', 'Media'); !!}
    {!! Form::text('media', $project->media, ['placeholder' => 'Graphite, Charcoal']); !!}

    <br>
    
    <!--DATE-->
    {!! Form::label('date', 'Date'); !!}
    {!! Form::text('date', $project->creation_date, ['placeholder' => 'Month Year']); !!}

    <br>
    
    <!--PRINTS AVAILABLE-->
    {!! Form::label('prints_available', 'Prints Available'); !!}
    {!! Form::text('prints_available', $project->prints_available, ['placeholder' => '10']); !!}

    <br>
    
    <!--PRINT SIZE-->
    {!! Form::label('print_size', 'Print Size'); !!}
    {!! Form::text('print_size', $project->print_size, ['placeholder' => '11 x 15 inch']); !!}

    <br>
    
    <!--PRINT PRICE-->
    {!! Form::label('print_price', 'Print Price'); !!}
    {!! Form::text('print_price', $project->print_price, ['placeholder' => '50.00']); !!}

    <br>

    <!--ORIGINAL AVAILABLE-->
    {!! Form::label('original_avaiable', 'Original Available?'); !!}
    {!! Form::checkbox('original_avaiable', '', $project->original_available); !!}

    <div id="original-details">

        <!--ORIGINAL SIZE-->
        {!! Form::label('original_size', 'Original Size'); !!}
        {!! Form::text('original_size', $project->original_size, ['placeholder' => 'Month Year']); !!}

        <br>

        <!--ORIGINAL PRICE-->
        {!! Form::label('original_price', 'Original Price'); !!}
        {!! Form::text('original_price', $project->original_price, ['placeholder' => '800.00']); !!}

    </div>

{!! Form::close() !!}

@endsection