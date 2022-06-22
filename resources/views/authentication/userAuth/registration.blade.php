@extends('layout.main')

@push('title')
    Registration
@endpush

@section('body')
    <h1 class="text-center text-[3vw] mt-[2vw]">Ready to <span class="font-medium">Sign up</span></h1>

        <div class="flex justify-center mt-[2vw]">
            <div class="text-[1.7vw]">

            <form action="{{ route('user-registration') }}" method="post">
                @csrf
                <div class="flex flex-col justify-between text-[1.7vw] h-[35vw]  w-[30vw]">
                    <div>
                        <div class="font-medium">Name</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" name="name" type="text" value="{{ old('name') }}">
                    </div>
                    <div>
                        <div class="font-medium">Phone</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" name="number" type="tel" value="{{ old('number') }}">
                    </div>
                    <div>
                        <div class="font-medium">Email</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" name="email" type="email" value="{{ old('email') }}">
                    </div>
                    <div>
                        <div class="font-medium">Password</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" name="password" type="password">
                    </div>
                    <div>
                        <div class="font-medium">Confirm Password</div>
                        <input class="w-[30vw] border-gray-400 border-b-[0.2vw] text-[1.5vw] pl-[.5vw]" name="password_confirmation" type="password">
                    </div>
                    <button class="font-medium text-[2vw] bg-[#0074D6] text-white w-[30vw] h-[4vw] rounded-[0.5vw]" type="submit">Sign Up</button>
                </div>
            </form>

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
        	
            <script>
                $(document).ready(function () {
                    $('#close-alert-box-update').click(function(){ 
                        $('#alert-box-update').fadeOut();
                    });
            
                    $('#close-alert-box-error').click(function(){ 
                        $('#alert-box-error').fadeOut();
                    });
                });
            </script>
@endsection