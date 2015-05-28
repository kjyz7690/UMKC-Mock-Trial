@extends('app')

@section('content')
    <h2>Why Should You Join?</h2>
    <div class="container why">
        <div class="row">
            <div class="col-lg-4">
                <img class="img-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h4>Have Fun</h4>
                <p>
                    The UMKC Mock Trial Team is a great way to get involved on campus! The team works hard but they play hard too.
                    It’s not unusual to see this group  out on team dinners or at other social events that are a lot of fun.
                    If you’re looking to join an organization that you will truly enjoy look no further!
                </p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h4>Gain Valuable Skills</h4>
                <p>
                    There are lots of things you can learn by joining the UMKC Mock Trial Team.  From learning how to give effective
                    speeches to building your acting skills, this program will teach you.
                </p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="#" alt="Generic placeholder image" width="140" height="140">
                <h4>Travel</h4>
                <p>
                    Do you like to travel? So do we! As a member of the UMKC Mock Trial Team you will have to opportunity to travel
                    across the country competing against different universities.
                </p>
            </div>
        </div>
    </div>
    <h2>Who Are We looking for?</h2>
        <p>We are looking for UMKC pre-law students, engineering students, theater students, and everyone in between! We strive to have
            a diverse group of students from various academic backgrounds. We are just looking for students who will be dedicated,
            hard-working, and team-oriented.</p>
	<h2>Contact Us</h2>
    <p class="lead">Interested in joining UMKC Mock Trial team? Please enter your contact
        information below and a current member will get in contact with you with shortly.</p>
    <div class="panel panel-default">
        <div class="panel-body">
                {!! Form::open() !!}
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
                {!! Form::submit('Submit',['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
