<?php

namespace App\Console\Commands;

use App\Mail\SendSecretSanta;
use App\Participant;
use Illuminate\Console\Command;
use Mail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
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
            \Log::debug($person->name . "->" . $otherPerson->name);
            try {
                Mail::to($person->email)->send(new SendSecretSanta($person, $otherPerson));
            } catch (\Throwable $e) {
                \Log::error("Failed sending a mail to {$person}");
            }
        }

    }
}
