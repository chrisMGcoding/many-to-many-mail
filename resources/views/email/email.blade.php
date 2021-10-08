@extends('email.template')

@section('content')

    <p>{{ $contenuMail['name'] }}</p>
    <p>{{ $contenuMail['email'] }}</p>
    <p>{{ $contenuMail['subject'] }}</p>
    <p>{{ $contenuMail['message'] }}</p>

@endsection
