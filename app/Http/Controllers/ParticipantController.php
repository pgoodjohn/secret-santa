<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Validator;

class ParticipantController extends Controller
{

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        

        if ($validator->fails()) {
            return redirect('/error')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();

        $participant = new Participant;
        $participant->name = $data['name'];
        $participant->email = $data['email'];
        $participant->save();

        return redirect('/success');
    }
}
