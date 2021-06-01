@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="A Non-Governmental Organization with the aim to build a northeast Nigeria in which every child; victims of terror attacks attains the right to educational survival, protection development and participation.">
    <meta name="keywords" content="NGO, Borno, Maiduguri, North-east, Nigeria">
@endsection

@section('title')
    SWAT Foundation - About Us
@endsection

@section('body-content')
    <div class="relative">
        <img class="object-cover w-full h-screen md:h-auto" src="{{ asset('images/bg-2.jpg') }}" alt="SWAT Photo">
        <div class="w-full px-4 leading-snug absolute top-32 md:top-40 text-white text-5xl items-center flex justify-center">
            <div class="text-center">
                <span class="text-7xl">Save</span> <br>
                <span class="text-blue-400">With</span> A Touch <span class="text-blue-400">Foundation</span>
            </div>
        </div>
    </div>
    <div class="md:grid grid-cols-2 gap-8 px-4 md:px-24 py-6 text-justify">
        <div>
            <p class="my-2">
                <h1 class="text-4xl font-bold pb-4">
                    SWAT FOUNDATION
                </h1>
                    SWAT foundation is committed to aiding children especially victims of terror/insurgency in the North-east by providing a practical way for charities, corporations and individuals to extend a helping hand. We are focusing on empowering them through education. Many children remain out of school due to the numerous challenges they face.
                <ul class="list-disc px-8">    
                    <li>A lot of children are orphans due to insurgency in North East Nigeria and cannot afford to go to school</li>
                    <li>School materials, transport and fees force guardians of these orphans to choose between sons and daughters, and daughters usually lose out</li>
                    <li>Schools are often far from home, making the journey dangerous for children as they face the double threat of being the victim of an attack and the risk of road traffic accidents</li>
                    <li>When children do make it to school, they often struggle to learn in crowded classrooms. They are often taught by untrained and poorly paid teachers. Without the incentives to stay at school and learn, many children drop out. In areas of insurgency, one in three children who starts school never get the chance to complete basic primary school, let alone progress to secondary school</li>
                </ul>
            </p>
        </div>
        <div class="my-auto">
            <img class="mx-auto w-72 md:w-96" src="{{ asset('images/logo.png') }}" alt="Foundation Logo">
        </div>
    </div>
@endsection