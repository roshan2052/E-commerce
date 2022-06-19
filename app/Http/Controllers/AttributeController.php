<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use Exception;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    private $model;
    protected $view_path = 'backend.attribute.';

    public function __construct()
    {
        $this->model = new Attribute();

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
            'key'  => 'required|string|max:191|unique:attributes,key',
        ]);

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('attribute.index');
    }

    public function show($id){

        $data = [];

        $data['row'] = $this->model->find($id);

        return view($this->view_path.'show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->find($id);

        return view($this->view_path.'edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try{
            $data['row'] = $this->model->find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('attribute.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('attribute.index');

    }
}
