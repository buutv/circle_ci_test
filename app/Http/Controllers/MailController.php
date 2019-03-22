<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;

class MailController extends Controller
{
    //
    public function showEmailForm(){
        return view('mails.send-email');
    }

    public function sendEmail(Request $request){

	    // $messages = [
	    //     'required' => 'Trường :attribute bắt buộc nhập.',
	    //     'email'    => 'Trường :attribute phải có định dạng email'
	    // ];
	    // $validator = Validator::make($request->all(), [
	    //     'to_email' => 'required|emails',
	    //     'subject'  => 'required',
	    //     'body'     => 'required'
	    // ], $messages);

	    // if ($validator->fails()) {
	    //     return redirect('/email')
	    //             ->withErrors($validator)
	    //             ->withInput();
	    // } else {
            // $email_service = $request->input('email_service');
            
            $email_service = 1; //Gmail
	        
	        switch ($email_service) {
	            case 1:
	                // Gmail
	                config(['mail.driver' => 'smtp',
                            'mail.host' => 'smtp.gmail.com',
                            'mail.port' => 465,
                            'mail.from' => array('address' => 'vietnamrelayhost@gmail.com', 
                                                    'name' => 'Test sendfile【URL】'),
                            'mail.encryption' => 'ssl',
                            'mail.username' => 'vietnamrelayhost@gmail.com',
                            'mail.password' => 'qazedctgb@!@#',
                            'mail.sendmail' => '/usr/sbin/sendmail -bs',
                            'mail.pretend' => false,]);
	                break;
	            
	            case 2:
	                // MailGun
	                config(['mail.driver' => 'mailgun']);
	                break;

	            case 3:
	                // MailTrap
	                config(['mail.driver' => 'smtp', 'mail.host' => 'smtp.mailtrap.io', 'mail.port' => 2525, 'mail.username' => '8b5309fif50e74', 'mail.password' => '39ov4ee432ab5c', 'mail.encryption' => 'tls']);

	                break;

	            case 4:
	                // Sparkpost
	                config(['mail.driver' => 'sparkpost', 'mail.host' => 'smtp.sparkpostmail.com', 'mail.port' => 587, 'mail.username' => 'SMTP_Injection', 'mail.password' => 'f57d09lc09a02650d816df6f501409odpkvjcjc6', 'mail.encryption' => 'STARTTLS']);

	                break;
            }
            
	        
            // $email_arr = explode(',', $request->input('to_email'));
            $lstEmail="buutv@vn.ids.jp";
            $email_arr = explode(',', $lstEmail);
	        for ($i=0; $i < count($email_arr); $i++) { 
                $mailInfo =[
                    'type' => 0,
                    'title' => 'IDS test',
                    'url'=>'https://vn.ids.jp/vn/',
                    'pwd'=> crypt('kV6Rf3k2','$1$') //MD5
                ];
	        	$mailable = new SendEmail($mailInfo);
	        	Mail::to($email_arr[$i])->send($mailable);
	        }
	        
            //return redirect('email')->with('message', 'Send email success!');
            return redirect('/home');
	    // }
	}
}
