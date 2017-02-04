@extends('layouts.app')

@section('content')
{{--inside .row--}}
<section class="accommodation-container">
    <div class="row">
        @foreach($accommodations as $accommodation)
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-4">
            <div class="item-slide">
                <div class="img-container">
                    <img src="http://orig11.deviantart.net/6356/f/2010/156/e/f/swallowed_by_nature_by_danutza88.jpg" alt="dasdas"/>
                    <div class="text-container">
                        <h4>{{$accommodation->title}}</h4>
                        <div class="desc">									
                            <span>{{$accommodation->room_type}}</span>
                            <span>{{$accommodation->wifi}}</span>
                            <span>{{$accommodation->aircon}}</span>
                            <h3>&euro;{{$accommodation->price}}</h3>
                        </div>
                        <div class="details">								
                            <a href="/accommodation/{{$accommodation->id}}">See details</a>
                        </div>
                    </div>
                </div>
                <!--
                <div class="slide-hover">                    
                    <div class="text-container">
                        <h4>{{$accommodation->title}}</h4>
                        <p>{{$accommodation->description}}</p>
                        <h4></h4>
                        <div class="desc">									
                            <span>{{$accommodation->room_type}}</span>
                            <span>{{$accommodation->wifi}}</span>
                            <span>{{$accommodation->aircon}}</span>
                            <h3>&euro;{{$accommodation->price}}</h3>
                        </div>
                        <div class="details">
                            <a href="#">See details</a>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
        
        @endforeach

    </div>

</section>




























    
    

@endsection