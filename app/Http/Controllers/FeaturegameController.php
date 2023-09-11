<?php

namespace App\Http\Controllers;

use App\Models\Featuregame;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\FeaturegameRequest;
class FeaturegameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $featuregame = Featuregame::orderBy('id', 'desc')->get();
        $featuregameCount = Featuregame::count();
         return view('backend.featuregame.index',['featuregame'=>$featuregame,'featuregameCount'=> $featuregameCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.featuregame.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeaturegameRequest $request)
    {
        //
        $featuregame = Featuregame::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $featuregame);
        }
        return redirect()->route('featuregame.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Featuregame  $featuregame
     * @return \Illuminate\Http\Response
     */
    public function show(Featuregame $featuregame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Featuregame  $featuregame
     * @return \Illuminate\Http\Response
     */
    public function edit(Featuregame $featuregame)
    {
        //
        return view('backend.featuregame.edit',[
            'edit' => $featuregame
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Featuregame  $featuregame
     * @return \Illuminate\Http\Response
     */
    public function update(FeaturegameRequest $request, Featuregame $featuregame)
    {
        //
        $featuregame->update($request->all());
       
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$featuregame->logo);
            $this->_uploadImage($request, $featuregame);
        }
        return redirect()->route('featuregame.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Featuregame  $featuregame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Featuregame $featuregame)
    {
        //
        if(!empty($featuregame->logo));
        @unlink('storage/'.$featuregame->logo);
       
        $featuregame->delete();
        return redirect()->route('featuregame.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(260, 310)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }
}
