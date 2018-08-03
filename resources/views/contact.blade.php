@extends( 'layouts/app' )

@section( 'content' )

<h1>Contact</h1>

{!! Form::open(['action' => 'MailController@send']) !!}
    
    <!--TITLE-->
    <div class="form-group" id="form-email-sender">
        {!! Form::label('sender', 'Your Email Address'); !!}
        {!! Form::text('sender', '', [
            'class' => 'form-control',
            'placeholder' => 'your.email@here.com'
        ]); !!}
    </div>
    
    <!--MESSAGE-->
    <div class="form-group" id="form-email-content">
        {!! Form::label('content', 'Message'); !!}
        {!! Form::textarea('content', '', [
            'class' => 'form-control',
            'id' => 'article-ckeditor',
            'placeholder' => 'Type your message here...'
        ]); !!}
    </div>

    {!! Form::submit( 'Send', [
        'class' => 'btn btn-primary'
    ]) !!}

{!! Form::close() !!}

<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>

@endsection