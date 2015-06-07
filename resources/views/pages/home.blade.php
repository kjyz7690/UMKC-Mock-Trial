@extends('app')
@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/courtroom1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="images/team2.jpg"  alt="...">
                <div class=carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="jumbotron">
        <h2>Interested In Joining?</h2>
        <p>We are currently looking for dedicated mockers for our 2015-2016 season.</p>
        <p>Want to join but don't have any experience? No Problem! We will teach you everything you need to know.</p>
        <p><a class="btn btn-primary btn-lg" href="join" role="button">Learn more</a></p>
    </div>
    <div class="container">
        <h2>Who Are We?</h2>
        <p>The UMKC Mock Trial Team is a student organization dedicated to competing in intercollegiate tournaments across the
            United States. In these competitions, student competitors put on imitation trials as either the prosecution
            or defense team. Competitors demonstrate their command of the court room by playing both the roles of witnesses
            and attorneys in a realistic trial setting.
        </p>
        <h2>News</h2>
        <p class="lead">Come Meet us at the Get Involved Fairs this summer during UMKC orientation days! Get Involved Fairs
        are at 9:00 am on the following days.</p>
        <ul class="list-unstyled"">
            <li>Saturday, June 13</li>
            <li>Friday, June 19</li>
            <li>Tuesday, June 23</li>
            <li>Friday, June 26</li>
            <li>Saturday, June 27</li>
            <li>Saturday, July 18</li>
            <li>Friday, July 24</li>
            <li>Saturday, July 25</li>
            <li>Friday, July 31</li>
        </ul>
    </div>
    <script>
        $(document).onready({
            $('.carousel').carousel('cycle');
        });
    </script>
@stop