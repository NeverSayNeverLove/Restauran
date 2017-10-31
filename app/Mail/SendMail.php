<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use App\Order;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $req)
    {
        $id_user = Auth::user()->id;
        $order=Order::where('user_id',$id_user)->get();
        $i=0;
        foreach ($order as $od)
        {
            $i= $od->id;
        }
//        return $this->view('page.booking',['User_id'=>$id,'name'=>$req->name,'phone'=>$req->phone,'address'=>$req->adress])->to('nguyenvantrung2016@gmail.com');
//        return $this->view('mail',['msg'=>$req->messege])->to('nguyenvantrung2016@gmail.com');
        return $this->view('mail',['order_id'=>$i])->to('nguyenvantrung2016@gmail.com');
    }
}
