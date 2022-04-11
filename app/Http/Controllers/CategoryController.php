<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $model;
    protected $view_path = 'backend.category.';

    public function __construct()
    {
        $this->model = new Category();

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
            'slug' => 'required|string|max:255|unique:categories',
            'rank' => 'required|integer|unique:categories',
        ]);

        // Image Upload
        if ($request->hasFile('image_field')) {
            $image = $request->file('image_field');
            $image_name = time().'_'.$image->getClientOriginalName();
            $image->move('images/category', $image_name);
            $request->request->add(['image' => $image_name]);
        }

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $this->model->create($request->all());
            session()->flash('success_message','Category Inserted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('category.index');

    }

    public function show($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view($this->view_path.'show',compact('data'));
    }

    public function edit($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view($this->view_path.'edit',compact('data'));
    }

    public function update(Request $request,$slug){

        //validation
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'rank' => 'required|integer',
        ]);

        try{
            $data['row'] = $this->model->where('slug',$slug)->first();
            $data['row']->update($request->all());
            session()->flash('success_message','Category Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('category.index');

    }

    public function delete($slug){

        $data['row'] = $this->model->where('slug',$slug)->first();

        try{
            $data['row']->delete();
            session()->flash('success_message','Category Deleted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('category.index');
    }
}
