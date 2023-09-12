<?php

namespace App\Http\Controllers;

use App\Models\Atiq;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests\AtiqRequest;
class AtiqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atiq = Atiq::orderBy('id', 'desc')->first();
        $atiqCount = Atiq::count();
         return view('backend.atiq.index',['atiq'=>$atiq,'atiqCount'=> $atiqCount,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.atiq.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtiqRequest $request)
    {
        //
        $atiq = Atiq::create($request->all());
       
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $atiq);
        }
        if ($request->hasFile('file')) {
            $this->_uploadfile($request, $atiq);
        }

        return redirect()->route('atiq.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atiq  $atiq
     * @return \Illuminate\Http\Response
     */
    public function show(Atiq $atiq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atiq  $atiq
     * @return \Illuminate\Http\Response
     */
    public function edit(Atiq $atiq)
    {
        //
        return view('admin.atiq.edit',[
            'edit' => $atiq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atiq  $atiq
     * @return \Illuminate\Http\Response
     */
    public function update(AtiqRequest $request, Atiq $atiq)
    {
        //
        $atiq->update($request->all());

        if ($request->hasFile('logo')) {
            @unlink('storage/'.$atiq->logo);
            $this->_uploadImage($request, $atiq);
        }

        if ($request->hasFile('file')) {
            @unlink('storage/'.$atiq->pdf);
            $this->_uploadfile($request, $atiq);
        }

        return redirect()->route('atiq.index')->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atiq  $atiq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atiq $atiq)
    {
        //
        if(!empty($atiq->logo));
        @unlink('storage/'.$atiq->logo);
        if(!empty($atiq->file));
        @unlink('storage/'.$atiq->file);
        $atiq->delete();
        return redirect()->route('atiq.index')->with('status','Data deleted successfully!');
    }


    private function _uploadImage($request, $about)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(128, 128)->save('storage/' . $filename);
            $about->logo = $filename;
            $about->save();
        }
       
    }

    private function _uploadfile($request, $notice)
    {
        # code...
        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            
                  $request->file->move('storage/',$fileName);

         //  dd($fileName);
            $notice->file = $fileName;
            $notice->save();
        }
       
    }
}
