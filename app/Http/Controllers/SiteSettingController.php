<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteSettings = SiteSetting::all();
        return view('admin.siteSetting',['siteSettings' => $siteSettings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siteSettingForm');
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
        'logo'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'favicon'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);
    $siteSettings = new SiteSetting();
    if($request->hasFile('logo')){
        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads', $filename);
        $siteSettings->logo = $filename;
    }
    if($request->hasFile('favicon')){
        $file = $request->file('favicon');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'fav.'.$extension;
        $file->move('uploads', $filename);
        $siteSettings->favicon = $filename;
    }
 
    $data = $request->all();
    $data['logo']= $siteSettings->logo;
    $data['favicon']= $siteSettings->favicon;
    $siteSettings = SiteSetting::create($data);
    $siteSettings->save();
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
        $siteSetting= SiteSetting::find($id);
        return view('admin.editsiteSetting',["siteSetting"=>$siteSetting]);
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
        $siteSetting = SiteSetting::find($id);
        if($request->hasFile('logo')){
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $siteSetting->logo = $filename ;
        }
        if($request->hasFile('favicon')){
            $file = $request->file('favicon');
            $extension = $file->getClientOriginalExtension();
            $filenamefav = time().'fav.'.$extension;
            $file->move('uploads', $filenamefav);
            $siteSetting->favicon = $filenamefav ;
        }
        $data = $request->all();
        $updimg = $siteSetting['logo'];
        $updfav = $siteSetting['favicon'];
        $data['logo']=isset($filename) ? $filename: $updimg;
        $data['favicon']=isset($filenamefav) ? $filenamefav: $updfav;
        // $data['image']=$upd['image'];
        // dd( $data['image']);
        $siteSetting->update($data);
        // dd($data);
        return redirect('admin/siteSetting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siteSetting= SiteSetting::find($id);
        $siteSetting->delete();
        return redirect('admin/siteSetting');
    }
}
