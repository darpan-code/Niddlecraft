@extends('layout.main')
    
    @push('title')
        Admin | Manage Orders
    @endpush
            
@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <div class="mt-[8vw] flex">
        <!-- side-bar section -->
        <x-side-bar userProfile='No' userType='Admin'/>
        
        {{-- side-bar link page js --}}
        <x-side-bar-link id='#orders'/>

        {{-- Coustomer Queries section --}}
        <div class="sidebar-border w-[65vw] ml-[3vw] h-[34vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] font-semibold">
            <div class="text-[2vw] font-bold">
                Manage Orders
            </div>

            <div class="mt-[1vw] grid grid-cols-3 gap-[2vw] justify-items-center">
                {{-- total orders --}}
                <div class="bg-[#ECECEC] w-[18vw] h-[12vw] rounded-[1vw] text-center font-bold text-[2vw]">
                    <div class="mt-[1vw]">Total Orders</div>
                    <div class="mt-[1vw] text-[2.5vw]">{{ $dataAppointment['totalAppointment'] }}</div>
                </div>

                <x-smaill-box title='New Orders' data='{{ $dataAppointment["newAppointment"] }}' location='{{ route("new-appointments") }}'/>
                <x-smaill-box title='Processing' data='{{ $dataAppointment["processingAppointment"] }}' location='{{ route("processing-appointments") }}'/>
                <x-smaill-box title='Delivery' data='{{ $dataAppointment["deliveryAppointment"] }}' location='{{ route("delivery-appointments") }}'/>
                <x-smaill-box title='Completed' data='{{ $dataAppointment["completeAppointment"] }}' location='{{ route("complete-appointments") }}'/>
                <x-smaill-box title='Rejected' data='{{ $dataAppointment["cancelAppointment"] }}' location='{{ route("cancel-appointments") }}'/>
            </div>
        </div>
    </div>
@endsection