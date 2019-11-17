<?php

namespace App\Http\Controllers\admin;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
    	$blog = Blog::paginate(3);
    	// dd($blog);
    	// $blog = blog::where('is_active',1)->get();
    	$data['blog']=$blog;
    	return view('admin.blog.index', $data);
    }
    public function add(){
        return view('admin.blog.add');
    }
    public function addSubmit(Request $request){
        $this->validate($request, ['name' => 'required', 'image' => 'mimes:jpg,jpeg,png']);

        $blog = new Blog();

        $blog->name = $request->name;
        $blog->slug = str_slug($request->name);
        $blog->description = $request->description;


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
            $file_path = public_path('uploads/blog_images');
            if($file->move($file_path, $file_name)){
                $blog->image = $file_name;
            }
        }

        if($blog->save()){
            session()->flash('message', 'Successfully inserted');
            return redirect()->route('admin.blog.index');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

    public function delete($slug){
        if(blog::where('slug', $slug)->delete()){
            session()->flash('success', 'blog Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}

