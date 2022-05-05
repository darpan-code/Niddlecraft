@extends('layout.main')

@push('title')
    Registration
@endpush

@section('body')
    <h1 class="text-center text-[3vw] mt-[2vw]">Ready to <span class="font-medium">Sign up</span></h1>

    <form action="" method="post">
    <div class="flex justify-center mt-[2vw]">
        <div class="text-[1.7vw]">
            <div class="flex flex-col justify-between text-[1.7vw] h-[35vw]  w-[30vw]">
                <div>
                    <div class="font-medium">Name</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="text" required>
                </div>
                <div>
                    <div class="font-medium">Phone</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="tel" pattern="{0-9}" required>
                </div>
                <div>
                    <div class="font-medium">Email</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="email" required>
                </div>
                <div>
                    <div class="font-medium">Password</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="password" required>
                </div>
                <div>
                    <div class="font-medium">Conform Password</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="password" required>
                </div>
                <button onclick="location.href='user-profile.html'" class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Sign Up</button>
            </div>
            <div class="mt-[1vw] pl-[.5vw]">
                <div class="text-[#0074D6] text-[1.2vw]">
                    <a href="{{ asset('/#contact') }}" class="text-blue-600 hover:text-blue-600">Contact Us</a>
                </div>
                <div class="font-medium text-[1.5vw] mt-[1vw]">
                    Alredy have an account? <a href="{{ route('user-login') }}" class="text-blue-600 hover:text-blue-600">Login</a>
                </div>
            </div>
        </div>
        <div class="ml-[10vw] flex items-center">
            <img class="w-[40vw]" src="{{ asset('images/vectors/registration.png') }}" alt="registration image">
        </div>
    </div>
    </form>
@endsection