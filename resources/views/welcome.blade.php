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
            <p class="text-2xl text-blue-600 leading-8">
                SWAT brings together charities, corporations and individuals to lobby and achieve our ambitious aim of free basic education for children who are victims of insurgency in Northern Nigeria, by providing a practical way to extend a helping hand. Quality education is the key to achieving a healthier, safer and more equitable society - this is why SWAT foundation campaigns for education for all
            </p>
        </div>
    </div>
    <div class="md:grid grid-cols-5 gap-4 px-4 md:px-24 py-6 shadow-lg">
        <div class="col-span-2">
            <div class="text-5xl py-4 text-blue-600">
                You can help make education for all a reality
            </div>
            <div class="bg-blue-600 px-4 md:px-8 py-4 text-white text-xl text-justify leading-7">
                <p class="py-2">
                    Education beats poverty - and gives people the tools to help themselves
                </p>
                <p class="py-2">
                    This is our moment to shine; we can bring millions of children in from the shadows of ignorance, and light up their lives with the legacy of education
                </p>
                <p class="py-2">
                    By joining the SWAT team, you can strengthen the Foundation's voice and give us the best possible chance of success. We invite you to become part of the Child Sponsorship Family. Sponsoring an individual child or by making a special donation for a particular child sponsorship is a wonderful way to become involved in developing our society
                </p>
            </div>
        </div>
        <div class="col-span-2">
            <img class="w-full" src="{{ asset('images/students.jpg') }}" alt="Students Photo">
        </div>
        <div class="col-span-1 mx-auto">
            <div class="text-xl py-4 text-blue-600 text-justify">
                <p class="py-2">
                    So many Parents have been killed due to the insurgency in the North-east rendering a lot of children orphans
                </p> 
                <p class="py-2">
                    Education is imperative in tackling poverty. When individuals have the chance to learn basic life and literacy skills, economies grow faster and poverty rates decline. When people go to school, they are able to eventually earn more money and support their families
                </p> 
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-4 px-4 md:px-24 py-4">
        <div>Man</div>
        <div>UMMM</div>
        <div>
            <p class="my-2">
                <h1 class="text-2xl text-blue-600 pb-4">
                    Take Action for Children’s Education. Sponsor a Package!!!
                </h1>
                Your support helps provide children with the following; 
                    <ul class="list-disc px-8">
                        <li>
                            A SWAT foundation tuition free School package.
                        </li> 
                        <li>
                	        Classrooms package.
                        </li>
                        <li>
                            Classrooms Furniture package.
                        </li>
                        <li>
                            Students lunch break package.
                        </li>
                        <li>
                            School uniforms package.
                        </li>
                        <li>
                            School books and stationaries package.
                        </li>
                        <li>
                            School healthcare package.
                        </li>
                        <li>
                            School bus package.
                        </li>
                    </ul>
                Please send in your commitment with a check or electronic payment 
            </p>
            <p class="my-2">
                <h1 class="text-2xl text-blue-600 pb-4">
                    What do I do to sponsor SWAT foundation?
                </h1>
                Please contact us and indicate the sponsorship package of your choice, or let us choose package for you. If a pack selected is not currently available, we will offer you another pack. Payments begin the same month the sponsorship pack is assigned 
            </p>
            <p class="my-2">
                <h1 class="text-2xl text-blue-600 pb-4">
                    Who are the children in the program?
                </h1>
                The children are generally refugees or from low income families and have often been orphaned or abandoned. They may be Family Court referrals. They range in age from two to eighteen. A child is eligible for sponsorship until they are 18 years old. Children leaving a participating center are no longer eligible for SWAT foundation sponsorship
            </p>
        </div>
    </div>
@endsection