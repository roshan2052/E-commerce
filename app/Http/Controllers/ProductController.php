<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private $model;
    protected $view_path = 'backend.product.';

    public function __construct()
    {
        $this->model = new Product();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->latest()->get();

        return view($this->view_path.'index',compact('data'));
    }

    public function create(){

        $data = [];
        $data['categories'] = Category::pluck('name','id');
        $data['sub_categories'] = SubCategory::pluck('name','id');
        $data['tags'] = Tag::pluck('name','id');

        return view('backend.product.create',compact('data'));
    }

    public function store(Request $request){

        // validation
        $request->validate([
            'category_id'   => 'required|integer',
            'sub_category_id'   => 'required|integer',
            'slug'   => 'required|string|max:255',
            'name'          => 'required|string|max:255',
        ],[
            'category_id.required' => 'Please select category',
            'name.required' => 'Please enter name'
        ]);

        try{
            DB::beginTransaction();
            $request->request->add(['created_by' => auth()->user()->id]);
            $product = $this->model->create($request->all());
            $product->tags()->attach($request['tag_id']);
            DB::commit();
            session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
            DB::rollback();
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('product.index');

    }

    public function show($slug){

        $data = [];

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.product.show',compact('data'));
    }

    public function edit($slug){

        $data = [];

        $data['categories'] = Category::pluck('name','id');
        $data['sub_categories'] = SubCategory::pluck('name','id');
        $data['tags'] = Tag::pluck('name','id');

        $data['row'] = $this->model->where('slug',$slug)->first();

        return view('backend.product.edit',compact('data'));
    }

    public function update(Request $request,$slug){

        // validation
        $request->validate([
            'category_id'   => 'required|integer',
            'sub_category_id'   => 'required|integer',
            'slug'   => 'required|string|max:255',
            'name'          => 'required|string|max:255',
        ],[
            'category_id.required' => 'Please select category',
            'name.required' => 'Please enter name'
        ]);

        try{
            DB::beginTransaction();
            $data['row'] = $this->model->where('slug',$slug)->first();
            $data['row']->update($request->all());
            $data['row']->tags()->sync($request['tag_id']);
            DB::commit();
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            DB::rollback();
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('product.index');

    }

    public function delete($slug){

        $data['row'] = $this->model->where('slug',$slug)->first();

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('product.index');

    }
}
