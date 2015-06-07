@extends('app')
@section('content')
    <!-- Carousel
 ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="images/courtroom1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Join the Team</h1>
                        <p>We are currently looking for dedicated mockers for our 2015-2016 season.</p>
                        <p>Want to join but don't have any experience? No Problem! We will teach you everything you need to know.</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ url('/join') }}" role="button">Learn More</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="team2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Events</h1>
                        <p>See what our Team is going to be up to this season!</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Meet the Team</h1>
                        <p>Meet the dedicated students of the UMKC Mock Trial Team</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->
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
            $('.carousel').carousel()
        });
    </script>
@stop