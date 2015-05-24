@extends('app')

@section('content')
	<h1>Join</h1>
    <p>We are excited that you are interested in trying out for the UMKC Mock Trial team! Please enter your contact
    information below and a current member will get in contact with you with shortly.</p>
    <form>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" class="form-control" placeholder="Phone Number">
        </div>
        <div class="form-group">
        <p>Year in School(as of fall 2015):</p>
            <select class="form-control" id="year">
                <option id="fresh">Freshman</option>
                <option id="soph">Sophomore</option>
                <option id="jun">Junior</option>
                <option id="sen">Senior</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Comments:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop
