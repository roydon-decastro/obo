<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App\Permit;
use Illuminate\Http\Request;
use App\State;

class MailController extends Controller
{
    public function send(Request $request, Permit $permit)
    {

        // dd($permit->email);
        $recipient = $permit->email;
        // dd($recipient);
        // $permit = Permit::where('id',1)->firstOrFail();
        $objDemo = new \stdClass();
        $objDemo->status = $permit->state->name;
        $objDemo->application_id = $permit->application_id;
        $objDemo->location = $permit->loc_street . ' street, barangay ' . $permit->barangay->name;
        $objDemo->title = 'Permit Application: ' . $permit->application_id;
        $objDemo->demo_one = 'Demo Two Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Office of the Building Official';
        // $objDemo->status = $permit->state->name;
        $objDemo->receiver = $permit->fname . " " . $permit->lname;
 
        Mail::to($recipient)->send(new DemoEmail($objDemo));

        session()->flash('success', 'Email was sent successfully.');


        return redirect(route('admins.index'));
    }
}