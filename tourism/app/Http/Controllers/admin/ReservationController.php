<?php

namespace App\Http\Controllers\admin;
use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index(){
    	$reservation = Reservation::all();
    	// dd($reservation);
    	// $reservation = reservation::where('is_active',1)->get();
    	$data['reservation']=$reservation;
    	return view('admin.reservation.index', $data);
    }
    public function add(){
        return view('admin.reservation.add');
    }
    public function addSubmit(Request $request){
        $this->validate($request, ['name' => 'required', 'image' => 'mimes:jpg,jpeg,png']);

        $reservation = new Reservation();

        $reservation->name = $request->name;
        $reservation->slug = str_slug($request->name);


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
                $reservation->image = $file_name;
            }
        }

        if($reservation->save()){
            session()->flash('message', 'Successfully inserted');
            return redirect()->route('admin.reservation.index');
        }else{
            session()->flash('error', 'Something went wrong.');
            return redirect()->back();
        }
    }

    public function delete($slug){
        if(Hotel::where('slug', $slug)->delete()){
            session()->flash('success', 'Reservation Deleted');
        }else{
            session()->flash('error', 'Something went wrong');
        }
        return redirect()->back();
    }
}

