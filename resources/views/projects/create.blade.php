@extends( 'layouts/app' )

@section( 'content' )

{!! Form::open(['action' => 'ProjectsController@store']) !!}
    
    <!--TITLE-->
    <div class="form-element" id="form-create-title">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', '', ['placeholder' => 'Title']); !!}
    </div>
    
    <!--DESCRIPTION-->
    <div class="form-element" id="form-create-description">
        {!! Form::label('description', 'Description'); !!}
        {!! Form::textarea('description', '', ['placeholder' => 'Description']); !!}
    </div>
    
    
    <!--MEDIA-->
    <div class="form-element" id="form-create-media">
        {!! Form::label('media', 'Media'); !!}
        {!! Form::text('media', '', ['placeholder' => 'Graphite, Charcoal']); !!}
    </div>
    
    <!--DATE-->
    <div class="form-element" id="form-create-date">
        {!! Form::label('date', 'Date'); !!}
        {!! Form::text('date', '', ['placeholder' => 'September 2018']); !!}
    </div>
    
    <!--PRINTS AVAILABLE-->
    <div class="form-element" id="form-create-prints-available">
        {!! Form::label('prints_available', 'Prints Available'); !!}
        {!! Form::text('prints_available', '', ['placeholder' => '10']); !!}
    </div>
    
    <!--PRINT SIZE-->
    <div class="form-element" id="form-create-print-size">
        {!! Form::label('print_size', 'Print Size'); !!}
        {!! Form::text('print_size', '', ['placeholder' => '11 x 15 inch']); !!}
    </div>
    
    <!--PRINT PRICE-->
    <div class="form-element" id="form-create-print-price">
        {!! Form::label('print_price', 'Print Price'); !!}
        {!! Form::text('print_price', '', ['placeholder' => '50.00']); !!}
    </div>

    <!--ORIGINAL AVAILABLE-->
    <div class="form-element" id="form-create-original-available">
        {!! Form::label('original_avaiable', 'Original Available?'); !!}
        {!! Form::checkbox('original_avaiable', '', true); !!}
    </div>

    <div id="original-details">

        <!--ORIGINAL SIZE-->
        <div class="form-element" id="form-create-original-size">
            {!! Form::label('original_size', 'Original Size'); !!}
            {!! Form::text('original_size', '', ['placeholder' => '18 x 24 inch']); !!}
        </div>

        <!--ORIGINAL PRICE-->
        <div class="form-element" id="form-create-original-price">
            {!! Form::label('original_price', 'Original Price'); !!}
            {!! Form::text('original_price', '', ['placeholder' => '800.00']); !!}
        </div>
        
    </div>

    {!! Form::submit( 'Create' ) !!}

{!! Form::close() !!}

@endsection