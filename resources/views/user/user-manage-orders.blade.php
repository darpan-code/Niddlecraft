@extends('layout.main')

@push('title')
	User | Manage Order
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>

	<div class="mt-[12vw] flex">

		<!-- side-bar section -->
        <x-side-bar userProfile='No' userType='User'/>
        
		{{-- side-bar link page js --}}
		<x-side-bar-link id='#orders'/>

		<!-- my orders section -->
        <div class="sidebar-border w-[65vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] h-[36vw]">
            <div class="font-bold text-[2vw]">
                My Order's
            </div>
            <!-- <div class="flex justify-around items-center h-[20vw] text-[#0000007b] text-[2vw] font-bold">
				No Current Orders
			</div> -->

            <!-- order list -->
            <div class="flex justify-between items-center mt-[1vw] mx-[1vw] bg-[#0074D6] text-white font-medium h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.3vw] ">
                <div class="w-[12vw]">Order ID</div>
                <div class="w-[12vw]">Product Name</div>
                <div class="w-[12vw]">Order Status</div>
                <div class="w-[14vw]">Payment Mode/Status</div>
            </div>

            <!-- order list items-->
            <div class="h-[24vw] w-[58vw] mt-[1vw] overflow-y-scroll px-[1vw]">
                <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                    <div class="w-[12vw]">190422003</div>
                    <div class="w-[12vw]">Salver Kameez</div>
                    <div class="w-[12vw]">Processing</div>
                    <div class="w-[14vw]">COD/<a href="#" class="text-blue-600 hover:text-blue-600">Pay online</a></div>
                </div>
                <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                    <div class="w-[12vw]">190422002</div>
                    <div class="w-[12vw]">Salver Kameez</div>
                    <div class="w-[12vw]">Shiped</div>
                    <div class="w-[14vw]">Payment Processing</div>
                </div>
                <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                    <div class="w-[12vw]">190422001</div>
                    <div class="w-[12vw]">Salver Kameez</div>
                    <div class="w-[12vw]">Deliverd</div>
                    <div class="w-[14vw]">Payed</div>
                </div>
                <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                    <div class="w-[12vw]">190422001</div>
                    <div class="w-[12vw]">Salver Kameez</div>
                    <div class="w-[12vw]">Deliverd</div>
                    <div class="w-[14vw]">Payed</div>
                </div>
                <div class="flex justify-between items-center font-medium bg-[#D5EDFF] h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw]">
                    <div class="w-[12vw]">190422001</div>
                    <div class="w-[12vw]">Salver Kameez</div>
                    <div class="w-[12vw]">Deliverd</div>
                    <div class="w-[14vw]">Payed</div>
                </div>
            </div>
        </div>
    </div>
@endsection