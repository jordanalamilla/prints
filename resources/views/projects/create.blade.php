@extends( 'layouts/app' )

@section( 'content' )

<h2>Create Project</h2>

{!! Form::open(['action' => 'ProjectsController@store']) !!}
    
    <!--TITLE-->
    <div class="form-element" id="form-create-title">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', '', [
            'class' => 'form-control',
            'placeholder' => 'Title'
        ]); !!}
    </div>
    
    <!--DESCRIPTION-->
    <div class="form-group" id="form-create-description">
        {!! Form::label('description', 'Description'); !!}
        {!! Form::textarea('description', '', [
            'class' => 'form-control',
            'id' => 'article-ckeditor',
            'placeholder' => 'Description'
        ]); !!}
    </div>
    
    
    <!--MEDIA-->
    <div class="form-group" id="form-create-media">
        {!! Form::label('media', 'Media'); !!}
        {!! Form::text('media', '', [
            'class' => 'form-control',
            'placeholder' => 'Graphite, Charcoal'
        ]); !!}
    </div>
    
    <!--DATE-->
    <div class="form-group" id="form-create-date">
        {!! Form::label('date', 'Date'); !!}
        {!! Form::text('date', '', [
            'class' => 'form-control',
            'placeholder' => 'September 2018'
        ]); !!}
    </div>
    
    <!--PRINTS AVAILABLE-->
    <div class="form-group" id="form-create-prints-available">
        {!! Form::label('prints_available', 'Prints Available'); !!}
        {!! Form::text('prints_available', '', [
            'class' => 'form-control',
            'placeholder' => '10'
        ]); !!}
    </div>
    
    <!--PRINT SIZE-->
    <div class="form-group" id="form-create-print-size">
        {!! Form::label('print_size', 'Print Size'); !!}
        {!! Form::text('print_size', '', [
            'class' => 'form-control',
            'placeholder' => '11 x 15 inch'
        ]); !!}
    </div>
    
    <!--PRINT PRICE-->
    <div class="form-group" id="form-create-print-price">
        {!! Form::label('print_price', 'Print Price'); !!}
        {!! Form::text('print_price', '', [
            'class' => 'form-control',
            'placeholder' => '50.00'
        ]); !!}
    </div>

    <!--ORIGINAL AVAILABLE-->
    <div class="form-group" id="form-create-original-available">
        {!! Form::label('original_avaiable', 'Original Available?'); !!}
        {!! Form::text('original_avaiable', '', [
            'class' => 'form-control',
            'placeholder' => 'yes/no'
        ]); !!}
    </div>

    <div id="original-details">

        <!--ORIGINAL SIZE-->
        <div class="form-group" id="form-create-original-size">
            {!! Form::label('original_size', 'Original Size'); !!}
            {!! Form::text('original_size', '', [
                'class' => 'form-control',
                'placeholder' => '18 x 24 inch'
            ]); !!}
        </div>

        <!--ORIGINAL PRICE-->
        <div class="form-group" id="form-create-original-price">
            {!! Form::label('original_price', 'Original Price'); !!}
            {!! Form::text('original_price', '', [
                'class' => 'form-control',
                'placeholder' => '800.00'
            ]); !!}
        </div>
        
    </div>

    {!! Form::submit( 'Create', [
        'class' => 'btn btn-primary'
    ]) !!}

{!! Form::close() !!}

<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@endsection