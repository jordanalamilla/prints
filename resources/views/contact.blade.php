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
    
    <!--DESCRIPTION-->
    <div class="form-group" id="form-email-content">
        {!! Form::label('content', 'Content'); !!}
        {!! Form::textarea('content', '', [
            'class' => 'form-control',
            'placeholder' => 'Type your message here...'
        ]); !!}
    </div>

    {!! Form::submit( 'Send', [
        'class' => 'btn btn-primary'
    ]) !!}

{!! Form::close() !!}

@endsection