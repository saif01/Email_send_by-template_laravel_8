<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\AllCPBEmailList;

class EmailController extends Controller
{
    public function index(){
        return view("index");
    }


    public function reset(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.resetPassword', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }

    public function register(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.register', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }

    public function approve(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.approve', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }




    public function shortlist(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.shortlist', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }


    public function interview(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.interview', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }


    public function selected(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.selected', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }

    public function received(){

        $to = 'mahbubulalamrifat@gmail.com';
        $name = 'Rifat';

        $mailData = [
            'to' => $to,
            'name' => $name,
        ];


        //Send Mail
        Mail::send('email.received', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('CP Bangladesh');
            $message->from('it-noreply@cpbangladesh.com');
           
        });


        return 'ok';


    }


    // #00ff00
    public function announce(){

        //$to = ['syful@cpbangladesh.com','mahbubulalamrifat@gmail.com'];

        $to = AllCPBEmailList::Allmails();
        //$to = AllCPBEmailList::Test();
        $ccArray = ['suchat@cpbangladesh.com', 'surachai@cpbangladesh.com'];

        $mailData = [
            'to' => $to,
            'cc' => $ccArray
        ];


        //Send Mail
        Mail::send('email.announce', $mailData, function ($message) use ($mailData) {
            //Remove if space have
            $message->to($mailData['to']);
            $message->subject('Announcement for new IT-PORTAL');
            $message->from('it-noreply@cpbangladesh.com');
            $message->cc($mailData['cc']);
           
        });


        return 'ok';
    }
    



}
