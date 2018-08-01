@extends( 'layouts/app' )

@section( 'content' )

<h1>Contact</h1>

{!! Form::open(['action' => 'MailController@send']) !!}
    
    <!--TITLE-->
    <div class="form-element" id="form-email-sender">
        {!! Form::label('sender', 'Your Email Address'); !!}
        {!! Form::text('sender', '', ['placeholder' => 'your.email@here.com']); !!}
    </div>
    
    <!--DESCRIPTION-->
    <div class="form-element" id="form-email-content">
        {!! Form::label('content', 'Content'); !!}
        {!! Form::textarea('content', '', ['placeholder' => 'Type your message here...']); !!}
    </div>

    {!! Form::submit( 'Send' ) !!}

{!! Form::close() !!}

@endsection