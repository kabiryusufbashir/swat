@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="A Non-Governmental Organization with the aim to build a northeast Nigeria in which every child; victims of terror attacks attains the right to educational survival, protection development and participation.">
    <meta name="keywords" content="NGO, Borno, Maiduguri, North-east, Nigeria">
@endsection

@section('title')
    SWAT Foundation - Home
@endsection

@section('body-content')
    <div class="relative">
        <img class="object-cover w-full h-screen md:h-auto" src="{{ asset('images/bg-1.jpg') }}" alt="SWAT Students">
        <div class="w-full px-4 leading-snug absolute top-32 md:top-40 text-white text-5xl items-center flex justify-center">
            <div id="slogan" class="text-center">
                <span class="text-7xl">Save</span> <br>
                <span class="text-blue-400">With</span> A Touch <span class="text-blue-400">Foundation</span>
            </div>
        </div>
    </div>
    <div class="w-full text-center py-4 px-8 md:px-24 shadow">
        <div>
            <img class="mx-auto w-72 md:w-96" src="{{ asset('images/logo.png') }}" alt="Foundation Logo">
        </div>
        <div>
            <p class="text-2xl">
                "Community service gives me a valuable opportunity to walk into a different community that is less familiar to me but just as colorful and most importantly, in need"
            </p>
            <i>Caroline Landry</i>
        </div>
    </div>
@endsection