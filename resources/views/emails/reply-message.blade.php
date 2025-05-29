@extends('emails.reply-message-temp')
@section('mail-body')
    <p>Dear {{$data['name']}},</p>
    <p>Thank you for reaching out to us. We have received your email and will review it shortly. A member of our team will get back to you as soon as possible.</p>
    <p>If you have any further questions or need immediate assistance, please feel free to reply to this message.</p>
@endsection
