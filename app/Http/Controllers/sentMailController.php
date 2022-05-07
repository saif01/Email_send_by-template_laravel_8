<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SentEmail;

use Illuminate\Support\Facades\Mail;

class sentMailController extends Controller
{
    public function index(){
        return view('welcome');
    }




    public function store(Request $request){

        $data = new SentEmail();


        $request->validate([
            'to'      => 'required',
            'subject' => 'required',
            'body'    => 'required'
        ]);
        
        
        $data->to      = $request->to;
        $data->subject = $request->subject;
        $data->body    = $request->body;
        $data->status  = 0;
        $success       = $data->save();

        return redirect()->route('home')->with('success','Email sent successfully.');

    }


    public function sentMail(){

        $allData = SentEmail::where('status', '=', 0)->get();

        if( !empty($allData) ){

            foreach($allData as $data)
            {
                $to = $data->to;
                $subject = $data->subject;
                $body = $data->body;

                $mailData = [
                    'to' => $to,
                    'subject' => $subject,
                    'body' => $body,
                ];

                // Send Mail
                Mail::send('email', $mailData, function ($message) use ($mailData) {
                    
                    $message->from('it-noreply@cpbangladesh.com');
                    $message->to($mailData['to']);
                    $message->subject($mailData['subject']);
                
                });

                $data->status  = 1;
                $data->save();
            }

            return true;
        }else{
            return false;
        }

        

        

    }
}
