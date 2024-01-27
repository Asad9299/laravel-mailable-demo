<?php

namespace App\Http\Controllers;

use App\Mail\NotifyUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        try {
            # Fetch the User to whom Mail needs to be sent.
            $user = User::latest()->firstOrFail();
            Mail::to($user)->send(new NotifyUser($user));
            echo 'Mail Sent Successfully';
            return;
        } catch (\Exception $ex) {
            return $ex->getMessage(). ' at line number '. $ex->getLine();
        }
    }
}
