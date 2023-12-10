@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center ">
                 Computers
                </div>

                <div class="">
                    @if (count($computers)>0)
                   <ul>
                    @foreach ($computers as $computer)
                    <!-- <li>{{ $computer['name']}} is from <strong>{{ $computer['origin'] }}</strong></li> -->
                    <a href="{{ route('computers.show',['computer' => $computer['id']]) }}">
                        <li>
                            {{ $computer['name']}}  <strong>({{ $computer['origin'] }})</strong>
                        </li>
                    </a>
                    @endforeach
                   </ul>
                   @else
                   <p>There are no computers to display</p>
                   @endif
                </div>
                <div class="">

<a href="{{route('computers.create')}}">Create</a>               
</div>
            </div>
@endsection

@section('title','computers')