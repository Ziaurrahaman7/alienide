<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('admin.work',['works' => $works]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.workForm', ['categorys'=>$category]);
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
    $work = new Work();
    if($request->hasFile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads', $filename);
        $work->image = $filename;
    }
 
    $data = $request->all();
    $data['image']= $work->image;
    $work = Work::create($data);
    $work->save();
    return redirect()->back()->with('status', 'add succesfully');
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
        $category= Category::all();
        $work= Work::find($id);
        return view('admin.editWork',["work"=>$work,"categorys"=>$category]);
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
        $work = Work::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $work->image = $filename ;
        }
        $data = $request->all();
        $updimg = $work['image'];
        $data['image']=isset($filename) ? $filename: $updimg;
        // $data['image']=$upd['image'];
        // dd( $data['image']);
        $work->update($data);
        // dd($data);
        return redirect('admin/work');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work= Work::find($id);
        $work->delete();
        return redirect('admin/work');
    }
}
