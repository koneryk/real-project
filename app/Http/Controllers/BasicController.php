<?php

namespace App\Http\Controllers;

use App\Models\submission;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function main(){
        return view('main');
    }
    public function test(){
        return view('test');
    }
    public function submission(Request $request){
        $data = $request->validate([
            'place' => 'required|min:3|max:20|array',
            'time' => 'required',
            'pay' => 'required|min:3|max:20',
        ]);
        $submission = new Submission();
        $submission->$data['place'];
        $submission->$data['time'];
        $submission->$data['pay'];
        $submission->save();

        return redirect('/dashboard');

    }
}
