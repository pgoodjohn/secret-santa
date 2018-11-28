<?php

namespace App\Http\Controllers;

use App\Mail\SendSecretSanta;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Participant;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send(Request $request)
    {

        $people = [];

        $participants = \App\Participant::all();

        foreach($participants as $participant){
            array_push($people, $participant);
        }

        shuffle($people);

        $i = 0;
        foreach ($people as $person) {
            $i++;
            if ($i == sizeof($people)) {
                $i = 0;
            }
            $otherPerson = $people[$i];
            // \Log::debug($person->name . "->" . $otherPerson->name);
            Mail::to($person->email)->send(new SendSecretSanta($person, $otherPerson));

        }

        return 'ok';
    }
}
