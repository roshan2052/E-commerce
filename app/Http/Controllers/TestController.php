<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Exception;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Test();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->latest()->get();

        return  view('backend.test.index',compact('data'));
    }

    public function create(){

        return  view('backend.test.create');
    }

    public function store(Request $request){

        //validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        try{
            $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('test.index');

    }

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.test.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.test.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        try{
            $data['row'] = $this->model->find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('test.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('test.index');

    }
}
