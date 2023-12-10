@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                   Home
                </div>
                <div class="mt-8">
                    <h1>{{ setting('site.title') }}</h1>
                </div> 
                <div class="mt-8">
                    <h2>{{setting('site.description')}}</h2>
                </div>               
            </div>
@endsection

@section('title','home')