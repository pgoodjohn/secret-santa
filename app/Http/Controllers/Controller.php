<?php

namespace App\Http\Controllers;

use App\Mail\SendSecretSanta;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Person;
use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send(Request $request)
    {

        $people = [];

        for ($i = 0; $i < sizeof($request->people); $i++) {
            array_push($people, new Person($request->people[$i]["name"], $request->people[$i]["email"]));
        }
        $i = 0;

        shuffle($people);

        foreach ($people as $person) {
            $i++;
            if ($i == sizeof($people)) {
                $i = 0;
            }
            $otherPerson = $people[$i];
            // echo $person->name . "->" . $otherPerson->name . "<br>";

            Mail::to($person->email)->send(new SendSecretSanta($person, $otherPerson));
        }

        return 'ok';
    }
}
