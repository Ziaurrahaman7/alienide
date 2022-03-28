<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team',['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamForm');
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
        'name' => 'required',
        'position' => 'required',
    ]);
    $team = new Team();
    if($request->hasFile('image')){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads', $filename);
        $team->image = $filename;
    }
 
    $data = $request->all();
    $data['image']= $team->image;
    $team = Team::create($data);
    $team->save();
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
        $team= Team::find($id);
        return view('admin.editTeam',["team"=>$team]);
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
        $team = Team::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads', $filename);
            $team->image = $filename ;
        }
        $data = $request->all();
        $updimg = $team['image'];
        $data['image']=isset($filename) ? $filename: $updimg;
        // $data['image']=$upd['image'];
        // dd( $data['image']);
        $team->update($data);
        // dd($data);
        return redirect('admin/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team= Team::find($id);
        $team->delete();
        return redirect('admin/team');
    }
}
