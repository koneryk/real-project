<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Submission;
use Illuminate\Http\Request;
use function Sodium\compare;

class AdminController extends Controller
{
    /*public function index(

    )*/
    public function subEditAdin_succes(Request $request, $id){
        $data = $request->validate([
            'status' => 'required',
        ]);

        $sub = Submission::findOrFail($id);
        $sub->status = $data['status'];
        $sub->save();
        return redirect('/admin');

    }
    public function admin(Request $request){
        $submission = Submission::all();

        return view('adminForm',compact('submission'));
    }
    public function subEditAdin($id){
        $submission = Submission::findOrFail($id);
        return view('submissions.edit',compact('submission'));
    }

    public function rooms()
    {
        $rooms = Room::all();
        return view('AdminRoom',compact('rooms'));
    }

    public function addroom()
    {
        return view('addRoom');
    }
    public function addformfunction(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $name = $data['name'];
        $description = $data['description'];
        $room = new Room();
        $room->name = $name;
        $room->description = $description;
        $room->save();
        return redirect('/admin');
    }
}
