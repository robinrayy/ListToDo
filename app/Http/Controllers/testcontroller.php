<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testmodel;
use App\Repositories\testrepo;

class testcontroller extends Controller
{
    protected $testrepo;

    public function __construct(testrepo $repo){
        $this->testrepo = $repo;
    }

    function index(){
        $listToDo = $this->testrepo->unfinished();
        return view('test.index', compact('listToDo'));
    }

    function getById($id){
        $todo =  $this->testrepo->getById($id);
        return view('test.detail', compact('todo'));
    }

    function finishedtodo(){
        $listToDo = $this->testrepo->finished();
        return view('test.finished', compact('listToDo'));
    }

    function new(){
        return view('test.new');
    }

    function add(Request $request){
        $newtodo = new testmodel;
        $newtodo->description = $request->description;
        $newtodo->status = 0;
        $newtodo->save();
        return redirect(route('home'));
    }

    function edit($id){
        $todo =  $this->testrepo->getById($id);
        return view('test.edit', compact('todo'));
    }

    function update(Request $request){
        $this->testrepo->update($request->id, $request->desc, $request->status);
        return redirect()->route("home");
    }

    function delete($id){
        $this->testrepo->delete($id);
        return back();
    }
}
