@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="SWAT foundation is committed to aiding children especially victims of terror/insurgency in the North-east by providing a practical way for charities, corporations and individuals to extend a helping hand. We are focusing on empowering them through education. Many children remain out of school due to the numerous challenges they face.">
    <meta name="keywords" content="NGO, Borno, Maiduguri, North-east, Nigeria">
@endsection

@section('title')
    SWAT Foundation - Mission
@endsection

@section('body-content')
    <div class="relative">
        <img class="object-cover w-full h-screen md:h-auto" src="{{ asset('images/bg-3.jpg') }}" alt="SWAT Photo">
        <div class="w-full px-4 leading-snug absolute top-32 md:top-40 text-white text-5xl items-center flex justify-center">
            <div id="slogan" class="text-center">
                <span class="text-blue-400">Our</span> Foundation's <span class="text-blue-400">Mission</span>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-24 py-6 text-justify">
        <div class="md:mx-auto md:w-2/3">
            <h1 class="text-4xl font-bold pb-4">
                OUR MISSION
            </h1>
            <p class="my-2 text-lg">
                "To build a northeast Nigeria in which every child; victims of terror attacks attains the right to educational survival, protection development and participation. 
                To support underprivileged persons particularly members of economically and socially disadvantaged groups and to support local, national and international humanitarian as a means of alleviating poverty.
                To encourage and promote culture, social, economic and development as may contribute to the empowerment and development of the people in general"
            </p>
        </div>
    </div>
@endsection