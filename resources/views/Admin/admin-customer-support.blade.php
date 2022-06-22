@extends('layout.main')
    
    @push('title')
        Admin | Coustomer Support
    @endpush
            
@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <div class="mt-[8vw] flex">
        <!-- side-bar section -->
        <x-side-bar userProfile='No' userType='Admin'/>
        
        {{-- side-bar link page js --}}
        <x-side-bar-link id='#quarries'/>

        {{-- Coustomer Queries section --}}
        <div style="background-image: url({{asset('images/vectors/customer.jpg')}}); background-size: cover; background-position: center;" class="sidebar-border ml-[3vw] w-[65vw] h-[31vw] rounded-[1vw]">
        
            <div style="text-shadow: .2vw .2vw .5vw #000000;" class="text-center text-white font-bold text-[4vw] mt-[2vw] mb-[3vw]">Customer Queries</div>

            <div class="flex justify-around">
                {{-- total orders --}}
                <div class="bg-[#ECECEC] w-[18vw] h-[12vw] rounded-[1vw] text-center font-bold text-[2vw]">
                    <div class="mt-[1vw]">Total Orders</div>
                    <div class="mt-[1vw] text-[2.5vw]">{{ $dataQueries['totalQueries'] }}</div>
                </div>
                <x-smaill-box title='New Queries' data='{{ $dataQueries["newQueries"] }}' location='{{ route("new-queries") }}'/>
                <x-smaill-box title='Completed' data='{{ $dataQueries["completeQueries"] }}' location='{{ route("complete-queries") }}'/>
            </div>
        </div>
    </div>
@endsection