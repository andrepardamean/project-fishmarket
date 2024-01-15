<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailController extends Controller
{


    function showContactForm(){
        return view('user.kontak');
    }

    function sendMail(Request $request){
       // Mengambil alamat email dari sesi
    $emailPengguna = $request->session()->get('email');

    // Contoh: Jika alamat email tidak ada dalam sesi, set default
    if (!$emailPengguna) {
        $request->session()->put('email', 'email_pengguna@example.com');
        $emailPengguna = 'email_pengguna@example.com';
    }
    
    $subject = "Contact dari " . $request->input('name');
    $name = $request->input('name');
    $emailAddress = $request->input('email');
    $message = $request->input('message');

    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    try {
        // Pengaturan Server
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // TCP port to connect to

        // Ambil alamat email dari database atau dari data pengguna yang tersedia
        $emailPengguna = isset($_SESSION['email']) ? $_SESSION['email'] : null;

        // Simpan alamat email dalam sesi
        $_SESSION['email'] = $emailPengguna;

        // Periksa apakah alamat email tersedia
        
        if ($emailPengguna) {
            // Siapa yang mengirim email
            // Siapa yang akan menerima email
            $mail->addAddress("wantopratama887@gmail.com");

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            return view('user.sendMail');
        } else {
            echo 'Alamat email pengguna tidak ditemukan.';
        }

    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
}


