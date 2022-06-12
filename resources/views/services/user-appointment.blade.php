@extends('layout.main')

@push('title')
	User | Appointment
@endpush

@section('body')
    @foreach ($UserData as $User)
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='{{ $User->name }}'/>
	
    <!-- book-appointment section -->
    <div class="mt-[6vw] text-center ">
        <h1 class="text-[2.5vw] font-bold">Book an Appointment</h1>
        <p class="text-[1.5vw] w-[40vw] mx-auto">Book an appointment for your custom dress that you want to prepare from are professional tailors.</p>
    </div>
    <form action="{{ route('user-appointment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-[90vw] rounded-[1vw] px-[4vw] py-[2vw] mt-[3vw] mx-auto bg-[#F3FAEF]">

            <!-- Service Details -->
            <h1 class="text-[2vw] font-bold">Service Details</h1>

                <div class="text-[1.4vw] flex justify-between mt-[2vw]">

                    <div class="w-[20vw]">
                        <div class="font-medium">Select Service<span class="text-red-600 ml-[.2vw]">*</span></div>
                        <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" id="service" name="service">
                            <option value="" selected>Select</option>
                            <option value="C.T.W">Custom tailoring for women</option>
                            <option value="C.T.S">Custom tailoring for students</option>
                            <option value="O.S">Other services</option>
                        </select>
                    </div>
                    <div class="w-[20vw]">
                        <div class="font-medium">Service Type<span class="text-red-600 ml-[.2vw]">*</span></div>
                        <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" id="service-type" name="serviceType">
                            <option value="" selected>Select</option>
                        </select>
                    </div>
                    <div class="w-[20vw]">
                        <div class="font-medium">Service Place<span class="text-red-600 ml-[.2vw]">*</span></div>
                        <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" id="service-place" name="servicePlace">
                            <option value="" selected>Select</option>
                            <option value="Store Visit">Store visit</option>
                            <option value="Home Visit">Home visit</option>
                        </select>
                    </div>
                    <div class="w-[15vw]">
                        <div class="font-medium">Upload Design</div>
                        <input class="w-[15vw] text-[1vw] pl-[.5vw] rounded-[.2vw]" type="file" name="uploadDesign" id="img-upload" accept="image/*">
                    </div>

                </div>

			<div class="mt-[3vw] flex">
				<button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] font-semibold">Save</button>

				<button onclick="location.href='{{ asset('/') }}'" type="button" class="bg-[#0000007b] ml-[2vw] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] font-semibold">Close</button>
            
            {{-- Update data status in database --}}
            @if (session('status')==='Updated')
                <div class="w-[26vw] h-[3vw] rounded-[0.5vw] bg-[#d1e7dd] flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw] font-medium" id='alert-box-update'>
                    <div>
                        Successfully booked your appointment.
                    </div>
                    <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                </div>
            @elseif(session('status')==='Failed')
                <div class="w-[24vw] h-[3vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-update'>
                    <div>
                        Unable to book your appointment.
                    </div>
                    <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                </div>
            @endif

            {{-- form validation errors --}}
            @if ($errors->any())
                <div class="w-[24vw] py-[.5vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw] font-medium" id='alert-box-error'>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
                </ul>
                    <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-error"></i>
                </div>
            @endif
            </div>
        </div>
    </form>
    @endforeach

    <!-- up arrow navigation -->
    <x-up-arrow-navigation/>

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