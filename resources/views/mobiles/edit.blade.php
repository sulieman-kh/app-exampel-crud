@extends('layout')
@section('title','Edit an old mobile')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                    <h1>Edit an old mobile</h1>               
                </div>
                <div class="flex justify-content">
                    <form class="form" action="{{route('mobiles.update',['mobile' => $mobile->id])}}" enctype="multipart/form-data" method="post">
                    <!-- cross site request forgery:     -->
                    @csrf
                    
                    <!-- The browser only knows post and get methods, so we will use method from Laravel   -->
                    @method('put')
                        <div>
                        <label for="mobile-name">Mobile Name</label>
                        <input id='mobile-name' name='mobile-name' value="{{$mobile->name}}" type="text" >
                        @error('mobile-name')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile-model">Mobile Model</label>
                        <input id='mobile-model' name='mobile-model' value="{{$mobile->model}}" type="text" >
                        @error('mobile-model')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div>
                        <label for="mobile-price">Mobile price</label>
                        <input id='mobile-price' name='mobile-price' value="{{$mobile->price}}" type="text" >
                        @error('mobile-price')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile-storage">Choose a mobile storage</label>
                        <select name="mobile-storage" id="mobile-storage">
                            <option value="{{$mobile->storage}}">{{$mobile['storage']}} GB</option>
                            <option value="32">32 GB</option>
                            <option value="64">64 GB</option>
                            <option value="128">128 GB</option>
                            <option value="256">256 GB</option>
                            <option value="512">512 GB</option>
                            <option value="1024">1024 GB</option>
                        </select> 

                        <!-- <input id='mobile-storage' name='mobile-storage' value="{{old('mobile-storage')}}" type="radio" > -->
                        @error('mobile-storage')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile-image" class="custom-file-upload">Mobile image</label>
                        <input id='mobile-image' name='mobile-image' value="{{ $mobile->mage }}" type="file" >
                        @error('mobile-image')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div>
                            <button type="submit">Update</button>
                        </div>
                    </form>                 
                </div>               
            </div>
@endsection