@extends( 'layouts/app' )

@section( 'content' )

<h2>Edit Project</h2>

{!! Form::open( ['action' => [ 'ProjectsController@update', $project->id ] ] ) !!}

    {!! Form::hidden( '_method', 'PUT' ) !!}
    
    <!--TITLE-->
    <div class="form-group" id="form-create-title">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', $project->title, [
            'class' => 'form-control',
            'placeholder' => 'Title'
        ]); !!}
    </div>
    
    <!--DESCRIPTION-->
    <div class="form-group" id="form-create-description">
        {!! Form::label('description', 'Description'); !!}
        {!! Form::textarea('description', $project->description, [
            'class' => 'form-control',
            'id'            => 'article-ckeditor',
            'placeholder'   => 'Description'
        ]); !!}
    </div>
    
    <!--MEDIA-->
    <div class="form-group" id="form-create-media">
        {!! Form::label('media', 'Media'); !!}
        {!! Form::text('media', $project->media, [
            'class' => 'form-control',
            'placeholder' => 'Graphite, Charcoal'
        ]); !!}
    </div>
    
    <!--DATE-->
    <div class="form-group" id="form-create-date">
        {!! Form::label('date', 'Date'); !!}
        {!! Form::text('date', $project->creation_date, [
            'class' => 'form-control',
            'placeholder' => 'Month Year'
        ]); !!}
    </div>
    
    <!--PRINTS AVAILABLE-->
    <div class="form-group" id="form-create-prints-available">
        {!! Form::label('prints_available', 'Prints Available'); !!}
        {!! Form::text('prints_available', $project->prints_available, [
            'class' => 'form-control',
            'placeholder' => '10'
        ]); !!}
    </div>
    
    <!--PRINT SIZE-->
    <div class="form-group" id="form-create-print-size">
        {!! Form::label('print_size', 'Print Size'); !!}
        {!! Form::text('print_size', $project->print_size, [
            'class' => 'form-control',
            'placeholder' => '11 x 15 inch'
        ]); !!}
    </div>
    
    <!--PRINT PRICE-->
    <div class="form-group" id="form-create-print-price">
        {!! Form::label('print_price', 'Print Price'); !!}
        {!! Form::text('print_price', $project->print_price, [
            'class' => 'form-control',
            'placeholder' => '50.00'
        ]); !!}
    </div>

    <!--ORIGINAL AVAILABLE-->
    <div class="form-group" id="form-create-original-available">
        {!! Form::label('original_available', 'Original Available?'); !!}
        {!! Form::text('original_available', $project->original_available, [
            'class' => 'form-control',
            'placeholder' => 'yes/no'
        ]); !!}
    </div>

    <div id="original-details">

        <!--ORIGINAL SIZE-->
        <div class="form-group" id="form-create-original-size">
            {!! Form::label('original_size', 'Original Size'); !!}
            {!! Form::text('original_size', $project->original_size, [
                'class' => 'form-control',
                'placeholder' => 'Month Year'
            ]); !!}
        </div>

        <!--ORIGINAL PRICE-->
        <div class="form-group" id="form-create-original-price">
            {!! Form::label('original_price', 'Original Price'); !!}
            {!! Form::text('original_price', $project->original_price, [
                'class' => 'form-control',
                'placeholder' => '800.00'
            ]); !!}
        </div>
        
    </div>

    {!! Form::submit( 'Update', [
        'class' => 'btn btn-primary'
    ]) !!}

{!! Form::close() !!}

<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@endsection