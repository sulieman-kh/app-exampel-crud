@extends('layout')
@section('title','Show a mobile')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 ">
            Mobile
        </div>
        <div class="flex items-center mt-8">
            <img class="mobile-img" src="{{Voyager::image($mobile['image'])}}">
            <h3>{{ $mobile['name']}}  {{ $mobile['model'] }} - {{ $mobile['storage']}}GB 
            <strong>${{ $mobile['price'] }}</strong> 
        </h3>                 
        </div>

    <div class="flex justify-center mt-8">
        <a class="edit-btn" href="{{route('mobiles.edit', $mobile -> id)}}">edit</a>               
        
        <form action="{{ route('mobiles.destroy',$mobile -> id)}}" method="post">
            @csrf
            @method('delete')
            <input class="delete-btn" type="submit" value="delete">               
        </form>
    </div>
    </div>
@endsection
