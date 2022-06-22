@extends('layout.main')

@push('title')
    Admin | Forgot Password
@endpush

@section('body')
    <h1 class="text-center text-[3vw] mt-[2vw]">Change your <span class="font-medium">Password</span></h1>

    <div class="flex justify-center mt-[2vw]">
        <div>
            <img class="w-[40vw] mt-[2vw]" src="{{ asset('images/vectors/forgot-password.png')}}" alt="Login image">
        </div>

        <form action="" method="post">
        <div class="pl-[10vw]">
            <div class="flex flex-col justify-between text-[1.7vw] mt-[8vw] h-[20vw] w-[30vw]">
                <div>
                    <div class="font-medium">Email ID</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="email" name="UserID" id="UserID" required>
                </div>
                <div>
                    <button onclick="location.href='{{ route('admin-otp-verification') }}'" class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Send OTP</button>
                    <button onclick="location.href='{{ route('admin-login') }}'" class="font-medium text-[2vw] bg-[#D2D2D2] text-black w-[30vw] h-[4vw] rounded-[0.5vw] mt-[2vw]" type="button">Go to Login</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection