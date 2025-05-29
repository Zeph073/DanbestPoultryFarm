@extends('emails.mail-temp')

@section('mail-body')
    <p>HELLO DANBEST POULTRY FARM,</p>
    <p>{{ $data['message'] }}</p>
    <p>
        Best regards,<br>
        {{ $data['name'] }}<br>
        {{ $data['telephone'] }}<br>
        {{ $data['email'] }}
    </p>
@endsection
