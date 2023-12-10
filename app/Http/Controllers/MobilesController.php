<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MobilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mobiles.index',[
            'mobiles' => Mobile::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mobile = new Mobile();

        $request -> validate([
            'mobile-name' => 'required',
            'mobile-model' => 'required',
            'mobile-storage' => 'required',
            'mobile-price' =>['required','integer'],
            'mobile-image'=> 'required',
        ]);
        // dd($request->all());
        $mobile -> name = strip_tags($request -> input('mobile-name'));
        $mobile -> model = Str::upper(strip_tags($request -> input('mobile-model')));
        $mobile -> storage = strip_tags($request -> input('mobile-storage'));
        $mobile -> price = strip_tags($request -> input('mobile-price'));
        

        $path = $request->file('mobile-image')->store('public/mobiles');


        $mobile->image = str_replace('public/', '', $path) ;

        $mobile -> save();
        
        return redirect() -> route('mobiles.index')-> with('Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($mobile)
    {
        $index = Mobile::findOrFail($mobile);

        return view('mobiles.show', [
            'mobile' => $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($mobile)
    {
        return view('mobiles.edit', [
            'mobile' => Mobile::findOrFail($mobile)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mobile)
    {
        $to_update = Mobile::findOrFail($mobile);

        $request -> validate([
            'mobile-name' => 'required',
            'mobile-model' => 'required',
            'mobile-storage' => 'required',
            'mobile-price' =>['required','integer'],
            // 'mobile-image'=> 'required',
        ]);
        // dd($request->all());
        $to_update -> name = strip_tags($request -> input('mobile-name'));
        $to_update -> model = Str::upper(strip_tags($request -> input('mobile-model')));
        $to_update -> storage = strip_tags($request -> input('mobile-storage'));
        $to_update -> price = strip_tags($request -> input('mobile-price'));
        
        if($request->file('mobile-image')){
            $path = $request->file('mobile-image')->store('public/mobiles');

            $to_update->image = str_replace('public/', '', $path) ;
        }
    

        $to_update -> save();

        return redirect() -> route('mobiles.show', $mobile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($mobile)
    {   
       $to_delete = mobile::findOrFail($mobile);
       $to_delete -> delete();
        return redirect() -> route('mobiles.index');
    }
}
