<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function create(){
        return view('admin.sliders.create');
    }
    public function index(){
        $sliders=Slider::all();

         return view('admin.sliders.index', compact('sliders'));
    }

    public function edit($id){
        $slider=Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
    }
    public function update(Request $request, $id){
        $slider=Slider::findOrFail($id);
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move('admin/image/',$image_name);
            $data['image']=$image_name;
            // $slider->image=$image_name;
        }
        $slider->update($data);
        // $slider->title=$request->title;
        // $slider->body=$request->body;
        // $slider->number=$request->number;
        // $slider->save();
        return redirect()->route('slider.index');
    }

    public function store(Request $request){
        $data=$request->all();
       if ($request->hasFile('image')) {
           $file=$request->file('image');
           $image_name=time().'_'.$file->getClientOriginalName();
           $file->move('admin/image/',$image_name);
           $data['image']=$image_name;
       }
        Slider::create($data);
     return redirect('/slider/create');
    }
    public function delete($id){
        // $slider=Slider::FindOrFail($id);
        // $slider->delete();
        Slider::destroy($id);
        return back();
    }
}
