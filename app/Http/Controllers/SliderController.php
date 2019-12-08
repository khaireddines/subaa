<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Image;
use DB;


class SliderController extends Controller
{
    public function index(){
      return view('admin-end.slider.add-slider');
}

	protected function sliderInfoValidate($request){
         $this->validate($request, [
             'image_name' => 'required',
             'short_description' => 'required',
             'slider_image' => 'required',
             'publicationStatus' => 'required'
        ]);
    }

      protected function sliderImageUpload($request){
        $productImage = $request->file('slider_image');
        $fileType = $productImage->getClientOriginalExtension();
        $imageName = $request->image_name.'.'.$fileType;
        //$imageName = $productImage->getClientOriginalName();
        $directory = 'slider-images/';
        $imageUrl = $directory.$imageName;
        //$productImage->move($directory, $imageName);
        Image::make($productImage)->resize(250, 250)->save($imageUrl);
        return $imageUrl;
    }

    protected function saveSliderBasicInfo($request, $imageUrl){
        $slider = new Slider();
        $slider->image_name = $request->image_name;
        $slider->short_description = $request->short_description;
        $slider->slider_image = $imageUrl;
        $slider->publicationStatus = $request->publicationStatus;
        $slider->save();
    }

    public function saveSlider(Request $request){
        $this->sliderInfoValidate($request);
        $imageUrl = $this->sliderImageUpload($request);
        $this->saveSliderBasicInfo($request, $imageUrl);
       
        return redirect('/slider/add')->with('message','Slider Information Save Successfully');

    }

   public function manageSlider(){
    	$sliders = Slider::all();
        //return $sliders;
    	return view('admin-end.slider.slider-manage',['sliders'=>$sliders]);
    }

     public function unpublishedSlider($id){
        $slider = Slider::find($id);
        $slider->publicationStatus = 0;
        $slider->save();
        
        return redirect('/slider/manage')->with('message','Slider Info Unpublished Successfully');
    }
    public function publishedSlider($id){
        $slider = Slider::find($id);
        $slider->publicationStatus = 1;
        $slider->save();
        
        return redirect('/slider/manage')->with('message','Slider Info Published Successfully');
    }
    public function deleteSlider($id){
        $slider = Slider::find($id);
        $slider->delete();
        
        return redirect('/slider/manage')->with('message','Slider Info Deleted Successfully');
    }

}