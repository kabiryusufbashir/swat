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
                SWAT brings together charities, corporations and individuals to lobby and achieve our ambitious aim of free basic education for children who are victims of insurgency in Northern Nigeria, by providing a practical way to extend a helping hand. Quality education is the key to achieving a healthier, safer and more equitable society - this is why SWAT foundation campaigns for education for all.
            </p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 px-8 md:px-24 py-4">
        <div>
            You can help make education for all a reality.
            <div>
                <p>
                    Education beats poverty - and gives people the tools to help themselves.
                </p>
                <p>
                    This is our moment to shine; we can bring millions of children in from the shadows of ignorance, and light up their lives with the legacy of education
                </p>
                <p>
                    By joining the SWAT team, you can strengthen the Foundation's voice and give us the best possible chance of success. We invite you to become part of the Child Sponsorship Family. Sponsoring an individual child or by making a special donation for a particular child sponsorship is a wonderful way to become involved in developing our society.
                </p>
            </div>
        </div>
        <div>

        </div>
    </div>
@endsection