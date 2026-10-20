<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

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
        return view('subEditAdin',compact('submission'));
    }
}
