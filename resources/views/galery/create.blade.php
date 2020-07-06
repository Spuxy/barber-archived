<h1>Contact page</h1>
{!! Form::open(['url' => '/photo', 'method' => 'POST']) !!}
{{  Form::token()}}
<div class="columns">
    <div class="column">
        {{  Form::label('name', 'First name')   }}
        {{  Form::text('name')   }}
    </div>
    <div class="column">
        {{  Form::label('url', 'URL')   }}
        {{  Form::text('url')   }}
    </div>
    <div class="column">
        {{  Form::label('email', 'E-Mail Address')   }}
        {{  Form::text('email')   }}
    </div>
    <div class="column">
        {{ Form::submit('Click Me!') }}
    </div>
</div>
{!! Form::close() !!}