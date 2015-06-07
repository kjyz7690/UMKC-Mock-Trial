@extends('app')

@section('content')
    <div class="container">
    <h2>Meet the Team</h2>
    @for ($i = 0; $i < $rows - 1; $i++)
        <div class="row">
        @for($j=3*$i; $j < $i*3+3; $j++)
            <div class="col-md-4 team">
                <img class="img-circle" src="{{$team[$j]->pic}}" alt="{{$team[$j]->first_name}}" width="140" height="140">
                <h3>{{$team[$j]->first_name}} {{$team[$j]->last_name}}</h3>
                <p>Bio: {{$team[$j]->bio}}</p>
            </div>
        @endfor
        </div>
    @endfor
    @if($last_row > 0)
        <div class="container">
            <div class="row">
            @for($k=($rows-1)*3; $k<(($rows-1)*3 + $last_row); $k++)
                <div class="col-md-4 {{$k % 3 == 0? 'col-md-offset-2':''  }} team">
                    <img class="img-circle" src="{{$team[$k]->pic}}" alt="{{$team[$k]->first_name}}" width="140" height="140">
                    <h3>{{$team[$k]->first_name}} {{$team[$k]->last_name}}</h3>
                    <p>Bio: {{$team[$k]->bio}}</p>
                </div>
            @endfor
            </div>
        </div>
    @endif
    </div>
@stop
