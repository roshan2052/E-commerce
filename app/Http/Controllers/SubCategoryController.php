<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $model;
    protected $view_path = 'backend.sub_category.';

    public function __construct()
    {
        $this->model = new SubCategory();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->latest()->get();

        return view($this->view_path.'index',compact('data'));
    }

    public function create(){

        $data = [];
        $data['categories'] = Category::pluck('name','id');

        return view('backend.sub_category.create',compact('data'));
    }

    public function store(Request $request){

        // validation
        $request->validate([
            'category_id'   => 'required|integer',
            'name'          => 'required|string|max:255',
            'slug'          => 'required|string|max:255',
            'rank'          => 'required|integer',
        ],[
            'category_id.required' => 'Please select category',
            'name.required' => 'Please enter name'
        ]);

        // Image Upload
        if ($request->hasFile('image_field')) {
            $image = $request->file('image_field');
            $image_name = time().'_'.$image->getClientOriginalName();
            $image->move('images/sub_category', $image_name);
            $request->request->add(['image' => $image_name]);
        }

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('sub_category.index');

    }

    public function show($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.sub_category.show',compact('data'));
    }

    public function edit($slug){

        $data = [];

        $data['categories'] = Category::pluck('name','id');

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.sub_category.edit',compact('data'));
    }

    public function update(Request $request,$slug){

        //validation
        $request->validate([
            'name' => 'required',
            'rank' => 'required',
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

        return redirect()->route('sub_category.index');

    }

    public function delete($slug){

        $data['row'] = $this->model->where('slug',$slug)->first();

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('sub_category.index');

    }
}
