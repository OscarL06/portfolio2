@extends('layouts.main')
@section('description', 'Oscar Landa')
@section('title', 'Oscar Landa | Web Developer')
@section('headers')

@endsection

@section('content')
    <div class="flex w-full mt-28 justify-around items-center px-16">
        <div>
            <h1 class="text-6xl font-cinzel">Oscar Landa</h1>
            <h2 class="font-cinzel text-2xl"><span class="border-b-4 border-red-900 rounded-lg">Web Developer</span></h2>

            <p class="mt-4">Web developer located in Chicago. Specializing in developing websites and web applications in Laravel.</p>
            <p class="mb-10">Available for work</p>
            <a href="/contact" class="bg-red-900 rounded-lg py-2 px-5 font-cinzel hover:bg-red-800">CONTACT</a>
        </div>
        <div>
            <div>
                <h2 class="font-cinzel text-2xl mb-2"><span class="border-b-4 border-red-900 rounded-lg">Web Development</span></h2>
                <ul class="list-disc list-inside decoration-red-900 marker:text-red-900">
                    <li>Custom Design</li>
                    <li>Responsive</li>
                    <li>Dynamic</li>
                    <li>Debugging</li>
                    <li>Updating</li>
                </ul>
            </div>
            <div>
                <h2 class="font-cinzel text-2xl mt-6 mb-2"><span class="border-b-4 border-red-900 rounded-lg">Laravel</span></h2>
                <ul class="list-disc list-inside decoration-red-900 marker:text-red-900">
                    <li>Reduced Development Time</li>
                    <li>Better Performance</li>
                    <li>Security</li>
                    <li>Versatile</li>
                    <li>Updating</li>
                    <li>Simple Maintenance</li>
                </ul>
            </div>
        </div>
    </div> 
@endsection