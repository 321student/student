@extends('layouts.app')

@section('content')

<div class="col-xs-12">
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <form class="form-horizontal" autocomplete="off" method="post" action="{{ url('/accommodation') }}">
        {{ csrf_field() }}
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <input name="title" type="text" class="form-control" id="accommodation-title" placeholder="Title *" value="{{old('title')}}">
            </div>
        </div>
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <textarea name="description" class="form-control" id="accommodation-description" placeholder="Description *" ></textarea>
            </div>
        </div>

        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <label class="radio-inline">Room type: *</label>
                <label class="radio-inline"><input type="radio" name="room_type" value="Shared">Shared</label>
                <label class="radio-inline"><input type="radio"  name="room_type" value="Private">Private</label>
            </div>
        </div>
        
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <label class="checkbox-inline">Facilities:</label>
                <label class="checkbox-inline"><input type="checkbox" name="wifi" value="1">WiFi</label>
                <label class="checkbox-inline"><input type="checkbox"  name="broadband" value="1">Broadband</label>
                <label class="checkbox-inline"><input type="checkbox"  name="aircon" value="1">Air Condition</label>

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8 col-sm-offset-2">
                <label>Price/week *<input class="form-control" type="number" name="price" min="0" step="1"></label>
            </div>
        </div>
                

        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <input name="address_line_1" type="text" class="form-control"  placeholder="Address Line 1 *" >
            </div>
        </div>
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <input name="address_line_2" type="text" class="form-control"  placeholder="Address Line 2">
            </div>
        </div>
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">

                <select name="country" class="form-control country" >
                    <option selected="selected" disabled>Select Country *</option>
                    @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                    @endforeach
                   
                </select>
            </div>
        </div>
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <select name="county" class="form-control county" >
                    <option selected="selected">Select County *</option>
                    
                </select>
            </div>
        </div>
        
        <div class="form-group">            
            <div class="col-sm-8 col-sm-offset-2">
                <select name="city" class="form-control city" >
                    <option selected="selected">Select City *</option>
                    
                </select>
            </div>
        </div>
        
        

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8 col-sm-offset-2">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>



    </form>


</div>


@endsection