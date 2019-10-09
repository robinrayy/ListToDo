<?php

namespace App\Repositories;
use App\testmodel;


class testrepo implements testinterface{
    function create(string $description){
        $newtodo = new testmodel;
        $newtodo->description = $description;
        $newtodo->status = 0;
        $newtodo->save();
    }
    function all(){
        return testmodel::all();
    }
    function finished(){
        return testmodel::all()->where('status',1);
    }
    function unfinished(){
        return testmodel::all()->where('status',0);
    }
    function getById($id){
        return testmodel::findOrFail($id);
    }
    function update($id, string $description,$status){
        testmodel::findOrFail($id)->update(['description'=>$description, 'status'=>$status]);
    }
    function delete($id){
        testmodel::find($id)->delete();
    }
}   