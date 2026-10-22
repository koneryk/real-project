<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Submission;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function main(){
        $rooms = Room::all();
        return view('main',compact('rooms'));
    }
    public function test(){
        return view('test');
    }
    public function submission(Request $request){
        $data = $request->validate([
            'room_id' => 'required',
            'time' => 'required|date_format:H:i',
            'pay' => 'required',
        ]);
        $data['time'] .= ':00';
        Submission::create($data);
        return redirect('/dashboard');

    }

    public function submissionform()
    {
        $submission = Submission::all();
        return view('submission', compact('submission'));
    }

    public function admin(){

        return view('adminForm');
    }
}
