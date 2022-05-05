@extends('layout.main')

@push('title')
    OTP
@endpush

@section('body')
    <h1 class="text-center text-[3vw] mt-[2vw]">Enter your <span class="font-medium">OTP</span></h1>

    <div class="flex justify-center mt-[4vw]">
        <div>
            <img class="w-[40vw] mt-[2vw]" src="{{ asset('images/vectors/otp-verification.png') }}" alt="Login image">
        </div>

        <form action="" method="post">
        <div class="pl-[10vw]">
            <div class="flex flex-col justify-between text-[1.7vw] mt-[2vw] h-[32vw] w-[30vw]">
                <div>
                    <div class="font-medium">Enter OTP</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="text" name="UserID" id="UserID" required>
                </div>
                <div>
                    <div class="font-medium">Password</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="text" name="UserID" id="UserID" required>
                </div>
                <div>
                    <div class="font-medium">Confirm Password</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="text" name="UserID" id="UserID" required>
                </div>
                <div>
                    <button onclick="location.href='user-login.html'" class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Change Password</button>
                    <button onclick="location.href='{{ route('user-login') }}'" class="font-medium text-[2vw] bg-[#D2D2D2] text-black w-[30vw] h-[4vw] rounded-[0.5vw] mt-[2vw]" type="button">Go to Login</button>
                    <div class="font-medium mt-[1vw]">
                        Getting any issue <a class="text-blue-600 font-semibold hover:text-blue-600" href="{{ asset('/#contact') }}">Contact us</a>
                    </div>
                </div>
                
            </div>
        </div>
        </form>
    </div>
@endsection