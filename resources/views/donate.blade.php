@extends('layouts.template')

@section('page-meta')
    <meta name="description" content="SWAT foundation is committed to aiding children especially victims of terror/insurgency in the North-east by providing a practical way for charities, corporations and individuals to extend a helping hand. We are focusing on empowering them through education. Many children remain out of school due to the numerous challenges they face.">
    <meta name="keywords" content="NGO, Borno, Maiduguri, North-east, Nigeria">
@endsection

@section('title')
    SWAT Foundation - Donate
@endsection

@section('body-content')
    <div class="px-4 md:px-24 py-6 text-justify">
        <div class="md:mx-auto md:w-2/3 text-center">
            <p class="my-2 text-lg">
                <div class="md:w-3/4 mx-auto">
                    <form id="paymentForm" class="bg-white shadow-lg p-4" action="{{ route('pay') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <h1 class="text-4xl font-bold pb-4">
                            Thank You for Your Donation
                        </h1>
                        <img class="md:w-1/4 mx-auto mb-4" src="{{ asset('images/donate.png') }}" alt="Donate Logo">
                    
                            <input class="px-5 w-full border border-gray-400 h-12 rounded-lg my-2 text-lg focus:outline-none" name="name" placeholder="Name" />
                            <input class="px-5 w-full border border-gray-400 h-12 rounded-lg my-2 text-lg focus:outline-none" name="email" type="email" placeholder="Your Email" />
                            <input class="px-5 w-full border border-gray-400 h-12 rounded-lg my-2 text-lg focus:outline-none" name="phone" type="tel" placeholder="Phone number" />
                            <input class="px-5 w-full border border-gray-400 h-12 rounded-lg my-2 text-lg focus:outline-none" name="amount" type="number" placeholder="Amount to Donate" />

                        <div class="px-6 py-4 flex justify-end">
                            <button type="submit" class="bg-blue-600 py-2 text-white rounded-full uppercase w-full h-12 focus:outline-none tracking-wider">Donate</button>
                        </div>
                    </form>
                </div>
            </p>
        </div>
    </div>
@endsection