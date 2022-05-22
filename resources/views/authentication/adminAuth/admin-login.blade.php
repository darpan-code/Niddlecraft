@extends('layout.main')

@push('title')
    Admin | Login
@endpush
    
@section('body')
    <h1 class="text-center text-[3vw] mt-[2vw]">Welocome to <span class="font-medium">Admin Login</span></h1>

    <div class="flex justify-center mt-[2vw]">
        <div>
            <img class="w-[40vw]" src="{{ asset('images/vectors/login.png')}}" alt="Login image">
        </div>

        {{-- <form action="" method="post"> --}}
        <div class="pl-[10vw]">
            <div class="flex flex-col justify-between text-[1.7vw] mt-[8vw] h-[25vw]  w-[30vw]">
                <div>
                    <div class="font-medium">Email ID</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="email" name="UserID" id="UserID" required>
                </div>
                <div>
                    <div class="font-medium">Password</div>
                    <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" type="password" name="password" id="password" required>
                </div>
                <button onclick="location.href='{{ route('admin-profile') }}'" class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Login</button>
                <button onclick="location.href='{{ route('admin-forgot-password') }}'" class="font-medium text-[2vw] bg-[#D2D2D2] text-black w-[30vw] h-[4vw] rounded-[0.5vw]" type="button">Forgot Password</button>
            </div>
        </div>
        {{-- </form> --}}
    </div>
@endsection