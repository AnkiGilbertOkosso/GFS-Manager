@extends('layouts.authentication')

@section('content')
    <div class="hidden md:block pt-20">
        <h1 class="text-5xl font-semibold mb-6 text-white text-center">Register</h1>
        <h1 class="text-2xl font-semibold mb-6 text-white text-center">Create your account by filling out the form below</h1>
    </div>
    <div class="md:hidden pt-20">
        <h1 class="text-3xl font-semibold mb-6 text-white text-center">Create an Account</h1>
    </div>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST" class="space-y-8">
        @csrf
        <div>
            <label for="name" class="block text-[16px] font-medium text-white">Name*</label>
            <input type="text" id="name" placeholder="Your Name" name="name"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-colors duration-300">
        </div>
        <div>
            <label for="email" class="block text-[16px] font-medium text-white">Email*</label>
            <input type="email" id="email" placeholder="Your Email" name="email"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        </div>
        <div>
            <label for="password" class="block text-[16px] font-medium text-white">Password*</label>
            <input type="password" id="password" name="password" placeholder="Enter password"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        </div>
        <div>
            <label for="password_confirmation" class="block text-[16px] font-medium text-white">Confirm Password*</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        </div>
        <div>
            <button type="submit"
                class="w-full bg-orange text-white p-3 px-6 border-orange rounded-2xl  focus:outline-none focus:ring-2 focus:ring-offset-2">
                Register</button>
        </div>
        <div class="text-center mt-4 text-white">
            Already have an account? <a href="{{ route('login') }}" class="text-white hover:underline">Login here.</a>
        </div>
    </form>
@endsection
