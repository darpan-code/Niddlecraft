@extends('layout.main')

@push('title')
	User | Gifts & Rewards
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>

	<div class="mt-[12vw] flex">

       <!-- side-bar section -->
       <x-side-bar userProfile='No' userType='User'/>

       {{-- side-bar link page js --}}
       <x-side-bar-link id='#gifts'/>

        <!-- gift & reward section -->
        <div class="sidebar-border w-[65vw] h-[36vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] font-semibold">
            <div class="font-bold text-[2vw]">
                My Gifts
            </div>
			<!-- <div class="flex justify-around items-center h-[20vw] text-[#0000007b] text-[2vw] font-bold">
				No Gift & Rewards
			</div> -->

             <!-- cupon list -->
             <div class="flex justify-between items-center mt-[1vw] mx-[1vw] bg-[#0074D6] text-white font-medium h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.3vw] ">
                <div class="w-[12vw]">Coupon*</div>
                <div class="w-[12vw]">Data of earning</div>
                <div class="w-[12vw]">Data of expire</div>
                <div class="w-[12vw]">Redeem Status</div>
            </div>

            <!-- cupon list items-->
        <div class="h-[24vw] w-[58vw] mt-[1vw] overflow-y-scroll px-[1vw]">
            <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mt-[1.5vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                <div class="w-[12vw]">ABC0023</div>
                <div class="w-[12vw]">19/04/2020</div>
                <div class="w-[12vw]">19/07/2020</div>
                <div class="w-[12vw]"><a class="text-blue-600 hover:text-blue-600" href="#">Redeem Now</a></div>
            </div>
            <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mt-[1.5vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                <div class="w-[12vw]">ABC0023</div>
                <div class="w-[12vw]">19/04/2020</div>
                <div class="w-[12vw]">19/07/2020</div>
                <div class="w-[12vw]"><a class="text-blue-600 hover:text-blue-600" href="#">Redeem Now</a></div>
            </div>
            <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mt-[1.5vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                <div class="w-[12vw]">ABC0023</div>
                <div class="w-[12vw]">19/04/2020</div>
                <div class="w-[12vw]">19/07/2020</div>
                <div class="w-[12vw]"><a class="text-blue-600 hover:text-blue-600" href="#">Redeem Now</a></div>
            </div>
            <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mt-[1.5vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                <div class="w-[12vw]">ABC0023</div>
                <div class="w-[12vw]">19/04/2020</div>
                <div class="w-[12vw]">19/07/2020</div>
                <div class="w-[12vw]"><a class="text-blue-600 hover:text-blue-600" href="#">Redeem Now</a></div>
            </div>
            <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mt-[1.5vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                <div class="w-[12vw]">ABC0023</div>
                <div class="w-[12vw]">19/04/2020</div>
                <div class="w-[12vw]">19/07/2020</div>
                <div class="w-[12vw]"><a class="text-blue-600 hover:text-blue-600" href="#">Redeem Now</a></div>
            </div>
        </div>
        </div>
@endsection