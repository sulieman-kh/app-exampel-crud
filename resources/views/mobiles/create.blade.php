@extends('layout')
@section('title','Add a new mobile')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                    <h1>Create a new mobile</h1>               
                </div>
                <div class="flex justify-content">
                    <form class="form" action="{{route('mobiles.store')}}" method="post" enctype="multipart/form-data">
                    <!-- cross site request forgery:     -->
                    @csrf
                        <div>
                        <label for="mobile-name">Mobile Name</label>
                        <input id='mobile-name' name='mobile-name' value="{{old('mobile-name')}}" type="text" >
                        @error('mobile-name')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div>
                        <label for="mobile-model">Mobile Model</label>
                        <input id='mobile-model' name='mobile-model' value="{{old('mobile-model')}}" type="text" >
                        @error('mobile-model')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div>
                        <label for="mobile-price">Mobile Price</label>
                        <input id='mobile-price' name='mobile-price' value="{{old('mobile-price')}}" type="text" >
                        @error('mobile-price')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile-storage">Choose a mobile storage</label>
                        <select name="mobile-storage" id="mobile-storage">
                            <option value="32">32 GB</option>
                            <option value="64">64 GB</option>
                            <option value="128">128 GB</option>
                            <option value="256">256 GB</option>
                            <option value="512">512 GB</option>
                            <option value="1024">1024 GB</option>


                        </select> 

                        
                        @error('mobile-storage')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="mobile-image" class="custom-file-upload">Mobile image</label>
                        <input id='mobile-image' multiple="multiple" name='mobile-image' value="{{old('mobile-image')}}" type="file" >
                        @error('mobile-image')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                        <div>
                            <button type="submit">Add</button>
                        </div>
                    </form>                 
                </div>               
            </div>
@endsection
