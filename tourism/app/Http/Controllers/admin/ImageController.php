<?php

namespace App\Http\Controllers\admin;
use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index(){
        $image = Image::all();
        // dd($category);
        // $category = category::where('is_active',1)->get();
        $data['image']=$image;
        return view('admin.image.index', $data);
    }
    public function add(){
        return view('admin.image.add');
    }
    public function addSubmit(Request $request){
        $this->validate($request, ['name' => 'required', 'image' => 'mimes:jpg,jpeg,png']);

        $image = new Image();

        $image->name = $request->name;
        $image->slug = str_slug($request->name);


        /*
        * actual image upload code
        * we will take file name using getClientOriginalName and attach time with it, so that
        * same name of image will not get replaced in server. eg 325235235_file.jpg
        *
        * next we will take file path, finally upload filename to filepath using move()
        * if successfully moved, we will save file name to database.
        *
        * to show image in view, we will use asset() command as usual.
        */

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = time()."_".$file->getClientOriginalName();
            $file_path = public_path('uploads/image_images');
            if($file->move($file_path, $file_name)){
                $image->image = $file_name;
            }
        }

        if($image->save()){
            session()->flash('message', 'Successfully inserted');
            return redirect()->route('admin.image.index');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

    public function delete($slug){
        if(Image::where('slug', $slug)->delete()){
            session()->flash('success', 'Image Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}

