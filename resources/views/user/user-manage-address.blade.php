@extends('layout.main')

@push('title')
	User | Manage Address
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>

	<div class="mt-[12vw] flex">

       <!-- side-bar section -->
		<x-side-bar userProfile='No' userType='User'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#address'/>

        <!-- address section -->
        <div class="sidebar-border w-[65vw] h-[57vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] font-semibold mb-[2vw]"> 
            <div class="font-bold text-[2vw]">
                Shipping Address
            </div>
            <div class="flex justify-between my-[4vw]">
                <div>
                    <div>Name</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text">
                </div>
                <div>
                    <div>Mobile Number</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="tel">
                </div>
            </div>
                <div>
                    <div>Address</div>
                    <input class="border-b-[0.2vw] w-[57vw] pl-[.5vw]" type="text">
                </div>
                <div class="mt-[4vw]">
                    <div>Landmark</div>
                    <input class="border-b-[0.2vw] w-[57vw] pl-[.5vw]" type="text">
                </div>
            <div class="flex justify-between my-[4vw]">
                <div>
                    <div>City</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text ">
                </div>
                <div>
                    <div>District</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" value="Hooghly" readonly>
                </div>
            </div>
            <div class="flex justify-between my-[4vw]">
                <div>
                    <div>Pin Code</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text">
                </div>
                <div class="ml-[3vw]">
                    <div>State</div>
                    <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" value="West Bengal" readonly>
                </div>
            </div>
            <button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] ml-[49vw] font-semibold">Save</button>
        </div>
    </div>
@endsection