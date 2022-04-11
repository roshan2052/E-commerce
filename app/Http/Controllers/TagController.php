<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;

class TagController extends Controller
{
    private $model;
    protected $view_path = 'backend.tag.';

    public function __construct()
    {
        $this->model = new Tag();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->latest()->get();

        return view($this->view_path.'index',compact('data'));
    }

    public function create(){

        return view($this->view_path.'create');
    }

    public function store(Request $request){

        // validation
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);

        // try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');
        // }
        // catch(\Exception $e){
        //     session()->flash('error_message','Something Went Wrong!!');
        // }

        return redirect()->route('tag.index');

    }

    public function show($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.tag.show',compact('data'));
    }

    public function edit($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.tag.edit',compact('data'));
    }

    public function update(Request $request,$slug){

        //validation
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        try{
            $data['row'] = $this->model->where('slug',$slug)->first();
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('tag.index');

    }

    public function delete($slug){

        $data['row'] = $this->model->where('slug',$slug)->first();

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('tag.index');

    }
}
