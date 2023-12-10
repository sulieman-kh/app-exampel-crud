@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                   About us
                </div>
                <div class="mt-8">
                    <span>this is about us</span>                   
                </div>
                <div> <img src="{{Voyager::image(setting('site.logo'))}}"></div>               
            </div>
@endsection

@section('title','about')