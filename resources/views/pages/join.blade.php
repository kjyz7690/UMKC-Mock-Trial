@extends('app')

@section('content')

    <div class="container">
    <h2>Who Are We looking for?</h2>
        <p>We are looking for UMKC pre-law students, engineering students, theater students, and everyone in between! We strive to have
            a diverse group of students from various academic backgrounds. We are just looking for students who will be dedicated,
            hard-working, and team-oriented.</p>
	<h2>Contact Us</h2>
    <p class="lead">Interested in joining UMKC Mock Trial team? Please enter your contact
        information below and a current member will get in contact with you with shortly.</p>
    <div class="panel panel-default">
        <div id="response">

        </div>
        <div class="panel-body">
            {!! Form::open(array('method' => 'post',
                                 'id' => 'join')) !!}
                <div class="form-group">
                    {!! Form::label('name','Name:') !!}
                    {!! Form::text('name', 'Name', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::text('email', 'Email',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('phone','Phone Number:') !!}
                    {!! Form::text('phone', 'Phone Number',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                <p>Year in School(as of fall 2015):</p>
                    {!! Form::select('year', array('Freshman', 'Sophomore', 'Junior', 'Senior')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('comment','Comments:') !!}
                    {!! Form::textarea('comment','Comments',['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('Submit',['class' => 'btn btn-primary btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function($) {
            $('#join').submit(function(event) {
                event.preventDefault();

                var $form = $(this);
                var data = $form.serialize();
                var url = $form.attr('action');
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data
                });
            });
        });
    </script>
@stop
