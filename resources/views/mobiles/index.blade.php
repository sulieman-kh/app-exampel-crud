@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center ">
                 Mobiles
                </div>
                <div class="">
                    @if (count($mobiles)>0)
                   <ul>
                    @foreach ($mobiles as $mobile)
                    <a href="{{ route('mobiles.show',['mobile' => $mobile['id']]) }}">
                        <li>
                            {{ $mobile['name']}}  - <strong>{{ $mobile['model'] }}</strong>
                        </li>
                    </a>
                    @endforeach
                   </ul>
                   @else
                   <p>There are no mobiles to display</p>
                   @endif
                </div>
                 <a href="{{route('mobiles.create')}}">Add</a>
            </div>
@endsection

@section('title','mobiles')