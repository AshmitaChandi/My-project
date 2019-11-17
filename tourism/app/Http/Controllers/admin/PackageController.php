<?php

namespace App\Http\Controllers\admin;
use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index(){
    	$package = Package::paginate(3);
    	// dd($package);
    	// $package = package::where('is_active',1)->get();
    	$data['package']=$package;
    	return view('admin.package.index', $data);
    }
    public function add(){
        return view('admin.package.add');
    }
    public function addSubmit(Request $request){
        $this->validate($request, ['name' => 'required', 'image' => 'mimes:jpg,jpeg,png']);

        $package = new Package();

        $package->name = $request->name;
        $package->slug = str_slug($request->name);
        


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
            $file_path = public_path('uploads/package_images');
            if($file->move($file_path, $file_name)){
                $package->image = $file_name;
            }
        }

        if($package->save()){
            session()->flash('message', 'Successfully inserted');
            return redirect()->route('admin.package.index');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

    public function delete($slug){
        if(Package::where('slug', $slug)->delete()){
            session()->flash('success', 'Package Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}



