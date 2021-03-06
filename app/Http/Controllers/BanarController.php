<?php

namespace App\Http\Controllers;

use App\Models\Banar;
use Illuminate\Http\Request;

class BanarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banars = Banar::all();
        return view('admin.banarsection',['banars' => $banars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banarForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $this->validate($request,[
            'image'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'active' => 'required',
        ]);
        $banar = new Banar();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $banar->image = $filename;
        }
     
        $data = $request->all();
        $data['image']= $banar->image;
        $banar = Banar::create($data);
        $banar->save();
        return redirect()->back()->with('status', 'product add succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banar= Banar::find($id);
        return view('admin.editBanar',["banar"=>$banar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banar = Banar::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $banar->image = $filename ;
        }
        $data = $request->all();
        $updimg = $banar['image'];
        $data['image']=isset($filename) ? $filename: $updimg;
        // $data['image']=$upd['image'];
        // dd( $data['image']);
        $banar->update($data);
        // dd($data);
        return redirect('admin/banar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banar= Banar::find($id);
        $banar->delete();
        return redirect('admin/banar');
    }
}
