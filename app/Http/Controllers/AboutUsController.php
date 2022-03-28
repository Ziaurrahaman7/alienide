<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = Aboutus::all();
        return view('admin.about',['abouts' => $abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutForm');
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
            ]);
            $about = new Aboutus();
            if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads', $filename);
                $about->image = $filename;
            }
         
            $data = $request->all();
            $data['image']= $about->image;
            $about = Aboutus::create($data);
            $about->save();
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
        $about= Aboutus::find($id);
        return view('admin.editAbout',["about"=>$about]);
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
        $about = Aboutus::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $about->image = $filename ;
        }
        $data = $request->all();
        $updimg = $about['image'];
        $data['image']=isset($filename) ? $filename: $updimg;
        // $data['image']=$upd['image'];
        // dd( $data['image']);
        $about->update($data);
        // dd($data);
        return redirect('admin/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about= Aboutus::find($id);
        $about->delete();
        return redirect('admin/about');
    }
}
