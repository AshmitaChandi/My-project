<?php

namespace App\Http\Controllers\admin;
use App\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
public function index(){
    	$booking = Booking::all();
    	// dd($booking);
    	// $booking = booking::where('is_active',1)->get();
    	$data['booking']=$booking;
    	return view('admin.booking.index', $data);
    }
    public function add(){
        return view('admin.booking.add');
    }
    public function addSubmit(Request $request){
        $this->validate($request, ['name' => 'required', 'image' => 'mimes:jpg,jpeg,png']);

        $booking = new Category();

        $booking->name = $request->name;
        $booking->slug = str_slug($request->name);


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
            $file_path = public_path('uploads/category_images');
            if($file->move($file_path, $file_name)){
                $category->image = $file_name;
            }
        }

        if($booking->save()){
            session()->flash('message', 'Successfully inserted');
            return redirect()->route('admin.booking.index');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

    public function delete($slug){
        if(Category::where('slug', $slug)->delete()){
            session()->flash('success', 'Booking Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}
