<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $model;
    protected $view_path = 'backend.setting.';

    public function __construct()
    {
        $this->model = new Setting();

    }

    public function create(){

        $setting = $this->model->first();

        if($setting){
            return redirect()->route('setting.edit',['id' => $setting->id]);
        }

        return view($this->view_path.'create');
    }

    public function store(Request $request){

        // validation
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|integer',
        ]);

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
            $setting = $this->model->create($request->all());
            session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('setting.edit',['id' => $setting->id]);
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->where('id',$id)->first();

        return view('backend.setting.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|integer',
        ]);

        try{
            $data['row'] = $this->model->where('id',$id)->first();
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('setting.edit',['id' => $data['row']->id]);

    }
}
