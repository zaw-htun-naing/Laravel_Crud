<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::paginate(5);
        return view('master.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
            ]
            );
        Post::create([
            'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        ]);
        return redirect('post');
        
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
           $post=Post::find($id);

            return view('master.edit',compact('post'));
        
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
        // $student = Post::find($id);
        // $student->name = $request->
        // $student->email = $request->input('email');
        // $student->course = $request->input('course');
        // $student->section = $request->input('section');
        // $student->update();
        // return redirect()->back()->with('status','Student Updated Successfully');
        
        $request->validate(
            [
                'firstname'=>'required',
                'lastname'=>'required',
                'email'=>'required',
            ]
            );
            $posts=Post::find($id)->update(
                [
                    'firstname'=>$request->firstname,
                    'lastname'=>$request->lastname,
                    'email'=>$request->email,
    
                ]
                );
                return redirect('post');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/post');
    }
}
