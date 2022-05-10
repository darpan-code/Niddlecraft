<div class="nav-bar h-[5vw] flex justify-between items-center text-[1.5vw] capitalize bg-white fixed-top">
    <!-- logo -->
    <div class="ml-[5vw]">
        <a href="{{ asset('/') }}"><img class="w-[12vw]" src="{{ asset('images/logo/logo.png') }}" alt="Niddlecraft"></a>
    </div>

    <!-- navigation / admin dashboard -->
@if ($userType==='User')
    <div class="flex justify-between w-[30vw]">
        <div><a href="{{ asset('/') }}" class="hover:text-[#0074D6] font-medium"> home </a></div>
        <div><a href="{{ asset('/#service') }}" class="hover:text-[#0074D6]"> services </a></div>
        <div><a href="{{ asset('/#our-tailor') }}" class="hover:text-[#0074D6]"> our tailors </a></div>
        <div><a href="{{ asset('/#contact') }}" class="hover:text-[#0074D6]"> contact </a></div>
    </div>
@elseif ($userType==='Admin')
    <div class="font-semibold">
        Admin Dashboard
    </div>
@endif

    <!-- login-register button / user profile-logout button -->
@if ($loginStatus==='No')
    <div class="flex items-center mr-[5vw]">
        <div><a href="{{ route('user-login') }}" target="_blank" class="text-[#0074D6] hover:text-[#0074D6]">login</a></div>
        <div>
            <button onclick="window.open('{{ route('user-registration') }}','_blank')" class="bg-[#0074D6] text-white ml-[2vw] w-[8vw] h-[3.3vw] rounded-[.5vw]">Register</button>
        </div>
    </div>        
@elseif ($loginStatus==='Yes')
    <div class="flex items-center mr-[5vw]">
        <abbr title="Profile"><a href="{{ route('user-profile') }}" class="hover:text-black"><i class="fa-solid fa-user mr-[0.5vw]"></i>{{$userName}}</a></abbr>
        <abbr title="Logout"><a href="{{ asset('/') }}" class="hover:text-black"><i class="fa-solid fa-right-from-bracket ml-[1vw]"></i></a></abbr>
    </div>        
@endif
</div>