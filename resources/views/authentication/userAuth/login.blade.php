@extends('layout.main')

@push('title')
    Login
@endpush

@section('body')
        <h1 class="text-center text-[3vw] mt-[2vw]">Welocome to <span class="font-medium">Login</span></h1>

        <div class="flex justify-center mt-[2vw]">
            <div>
                <img class="w-[40vw]" src="{{ asset('images/vectors/login.png') }}" alt="Login image">
            </div>

            <div class="pl-[10vw]">
                <div class="flex flex-col justify-between text-[1.7vw] mt-[5vw] h-[20vw] w-[30vw]">
                    <div>
                        <div class="font-medium">User ID</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="email" name="UserID" id="UserID" required>
                    </div>
                    <div>
                        <div class="font-medium">Password</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="password" name="password" id="password" required>
                    </div>
                    <button onclick="location.href='{{ route('user-profile') }}'" class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Login</button>
                </div>

                <div class="mt-[1vw] pl-[.5vw]">
                    <div class="text-[#0074D6] text-[1.2vw]">
                        <a href="{{ route('forgot-password') }}" class="text-blue-600 hover:text-blue-600">Forgot Password?</a>
                        <a href="{{ asset('/#contact') }}" class="text-blue-600 hover:text-blue-600">Contact Us</a>
                    </div>
                    <div class="font-medium text-[1.5vw] mt-[2vw]">
                        Don't have an account? <a href="{{ route('user-registration') }}" class="text-blue-600 hover:text-blue-600">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
@endsection