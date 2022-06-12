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
        <div class="sidebar-border w-[65vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[2vw] pt-[2vw] h-[34vw]">
            <div class="flex justify-center items-center">
                <div class="flex items-center w-[30vw] h-[3vw] bg-[#dee2e6] rounded-full">
                    <a href="{{ route("user-manage-orders") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full bg-[#0056b3] text-white">Appointments</div></a>
                    <a href="{{ route("new-orders") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full text-black">Orders</div></a>
                </div>
            </div>

            <!-- order list -->
            <div class="flex justify-between items-center text-center mt-[1vw] mx-auto bg-[#0074D6] text-white font-semibold h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.3vw] w-[60vw]">
                <div class="w-[4vw]">OID</div>
                <div class="w-[7vw]">Service</div>
                <div class="w-[6vw]">Place</div>
                <div class="w-[10vw]">Status</div>
                <div class="w-[10vw]">Reason</div>
                <div class="w-[8vw]">Order Date</div>
                <div class="w-[8vw]">Delivery Date</div>
            </div>

            <!-- User Appointments Details-->
            <div class="mt-[1vw]">
            
            @if ($data)
                @foreach ($AppointmentData as $data)
                    <div class="flex text-center justify-between items-center font-medium bg-[#ECECEC] h-[4vw] mx-auto mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.1vw] w-[60vw]">
                        <div class="w-[4vw]">#{{ $data->apid }}</div>
                        <div class="w-[7vw]">{{ $data->service_type }}</div>
                        <div class="w-[6vw]">{{ $data->service_place }}</div>
                    @if (isset($data->order_status))
                        <div class="w-[10vw]">{{ $data->order_status }}</div>
                    @else
                        <div class="w-[10vw]">-</div>
                    @endif
                    @if (isset($data->reason))
                        <div class="w-[10vw]">{{ $data->reason }}</div>
                    @else
                        <div class="w-[10vw]">-</div>
                    @endif
                        <div class="w-[8vw]">{{ $data->order_date }}</div>
                    @if (isset($data->delivery_date))
                        <div class="w-[8vw]">{{ $data->delivery_date }}</div>
                    @else
                        <div class="w-[8vw]">-</div>
                    @endif
                    </div>
                @endforeach

                <div class="flex justify-center text-[1vw] my-[1vw]">
                    {{ $AppointmentData->links('pagination::bootstrap-4') }}
                </div>  
            @else
                <div class="flex justify-center">
                    <img class="w-[40vw]" src="{{ asset('images/vectors/nodatafound.png') }}" alt="No Data Found">
                </div>
            @endif    
            </div>
        </div>
    </div>
@endsection