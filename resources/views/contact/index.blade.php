<h1>Contact page</h1>
{!! Form::open(['url' => '/contact', 'method' => 'POST']) !!}
    {{  Form::token()}}
    <div class="columns">
        <div class="column">
            {{  Form::label('firstName', 'First name')   }}
            {{  Form::text('firstName')   }}
        </div>
        <div class="column">
            {{  Form::label('lastName', 'Last Name')   }}
            {{  Form::text('lastName')   }}
        </div>
        <div class="column">
            {{  Form::label('email', 'E-Mail Address')   }}
            {{  Form::text('email')   }}
        </div>
        <div class="column">
            {{  Form::textArea('body')   }}
        </div>
        <div class="column">
            {{ Form::submit('Click Me!') }}
        </div>
    </div>
{!! Form::close() !!}