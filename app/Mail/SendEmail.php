<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
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
    public function build(Request $request)
    {
       $total = $request->total;
       $meja = $request->meja;
       $jumlah = $request->jumlah;
        return $this->view('confirm', [
            "total" => $total,
            "meja" => $meja,
            "jumlah" => $jumlah,
            // "id"    => $id
        ]);
    }
}
