@extends('layout.main')

@push('title')
    New Orders
@endpush

@section('body')
    <!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <!-- New Appointments -->
    <div class="flex justify-between items-center mt-[6vw] mx-[5vw]">
        <button type="button" onclick="location.href='{{ route('admin-manage-orders') }}'" class="fa-solid fa-circle-arrow-left text-[2.5vw]"></button>
        {{-- <div class="text-[2.2vw] font-bold">New Appointments</div> --}}
        <div class="flex items-center w-[30vw] h-[3vw] bg-[#dee2e6] rounded-full">
            <a href="{{ route("new-appointments") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full text-black">Appointments</div></a>
            <a href="{{ route("new-orders") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full bg-[#0056b3] text-white">Orders</div></a>
        </div>
        <div class="w-[2.5vw]"></div>
    </div>

    <!-- Queries Column -->
    <div class="flex justify-between items-center text-center mt-[1vw] mx-auto bg-[#0074D6] text-white font-semibold h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.5vw] w-[92vw]">
        <div class="w-[8vw]">Order ID</div>
        <div class="w-[14vw]">Name</div>
        <div class="w-[10vw]">Number</div>
        <div class="w-[6vw]">Service</div>
        <div class="w-[14vw]">Service Type</div>
        <div class="w-[10vw]">Service Place</div>
        <div class="w-[10vw]">Date & Time</div>
        <div class="w-[5vw]">More</div>
    </div>

    <!-- User Querie Details-->
    <div class="h-[33vw] mt-[1vw]">
            
        <div class="flex text-center justify-between items-center font-medium bg-[#ECECEC] h-[4vw] mx-auto mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
            <div class="w-[8vw]">#125485</div>
            <div class="w-[14vw]">Megha Sen</div>
            <div class="w-[10vw]">7254256365</div>
            <div class="w-[6vw]">C.T.W</div>
            <div class="w-[14vw]">Kurti</div>
            <div class="w-[10vw]">Store Visit</div>
            <div class="w-[10vw]">
                <div id="date"> --/--/---- </div>
                <div id="time"> --:--:-- </div>
            </div>
            <button class="w-[5vw]" type="button" data-bs-toggle="modal" data-bs-target="#modal-box">
                <i class="fa-solid fa-ellipsis text-[2vw]"></i>
            </button>
        </div>
        <div class="flex text-center justify-between items-center font-medium bg-[#ECECEC] h-[4vw] mx-auto mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
            <div class="w-[8vw]">#125485</div>
            <div class="w-[14vw]">Megha Sen</div>
            <div class="w-[10vw]">7254256365</div>
            <div class="w-[6vw]">C.T.W</div>
            <div class="w-[14vw]">Kurti</div>
            <div class="w-[10vw]">Store Visit</div>
            <div class="w-[10vw]">
                <div id="date"> --/--/---- </div>
                <div id="time"> --:--:-- </div>
            </div>
            <button class="w-[5vw]" type="button" data-bs-toggle="modal" data-bs-target="#modal-box">
                <i class="fa-solid fa-ellipsis text-[2vw]"></i>
            </button>
        </div>
        
        {{-- modal  --}}
        
        <div class="modal fade" id="modal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content w-[85vw] h-[45vw] relative">
                    <button type="button" class="w-[2vw] h-[2vw] text-[1.5vw] absolute z-10 right-[0vw]" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

                    {{-- personal details --}}
                    <div class="text-[1.3vw] w-[64vw] min-h-[15vw] p-[2vw] font-bold flex">
                        <div class="min-w-[26vw] mr-[1vw]">
                            <div class="flex"><div class="w-[6vw]">Name </div><div class="font-semibold ml-[.5vw]">: Megha Sen</div></div>
                            <div class="flex"><div class="w-[6vw]">Phone </div><div class="font-semibold ml-[.5vw]">: 7215468594</div></div>
                            <div class="flex"><div class="w-[6vw]">Email </div><div class="font-semibold ml-[.5vw]">: meghasen@gmail.com</div></div>
                            <div class="flex"><div class="w-[6vw]">Gender </div><div class="font-semibold ml-[.5vw]">: female</div></div>
                            <div class="flex"><div class="w-[6vw]">Age </div><div class="font-semibold ml-[.5vw]">: 21</div></div>
                            <div class="flex"><div class="inline-block">Date of birth </div><div class="font-semibold ml-[.5vw]">: 28/08/2000</div></div>
                        </div>
                        <div class="min-w-[26vw]">
                            <div class="flex"><div class="w-[6vw]">Address </div><div class="flex font-semibold ml-[.5vw]">: <div class="ml-[.5vw]"> </div></div></div>
                            <div class="flex"><div class="w-[6vw]">City </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[6vw]">District </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[6vw]">Pin </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[6vw]">State </div><div class="font-semibold ml-[.5vw]">: </div></div>
                        </div>
                        <div class="min-w-[24vw]">
                            <div class="flex"><div class="w-[9vw]">Service </div><div class="flex font-semibold ml-[.5vw]">: <div class="ml-[.5vw]"> </div></div></div>
                            <div class="flex"><div class="w-[9vw]">Service Type </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[9vw]">Service Place </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[9vw]">Order Date </div><div class="font-semibold ml-[.5vw]">: </div></div>
                            <div class="flex"><div class="w-[9vw]">Order Time </div><div class="font-semibold ml-[.5vw]">: </div></div>
                        </div>
                    </div>

                    {{-- body measerements details --}}
                    <div class="pl-[2vw] pb-[1vw] text-[1.3vw] px-[2vw] font-bold">Body Measurements</div>
                    <div class="text-[1.3vw] px-[2vw] font-bold grid grid-cols-7 justify-items-center gap-y-[1vw]">
                        <x-measurements-data bodyPart="Shoulder" size="25"/>
                        <x-measurements-data bodyPart="Chest" size="25"/>
                        <x-measurements-data bodyPart="Bust" size="25"/>
                        <x-measurements-data bodyPart="Under Bust" size="25"/>
                        <x-measurements-data bodyPart="Waist" size="25"/>
                        <x-measurements-data bodyPart="Wearing Waist" size="25"/>
                        <x-measurements-data bodyPart="Hip" size="25"/>
                        <x-measurements-data bodyPart="Thigh" size="25"/>
                        <x-measurements-data bodyPart="Upper Arm" size="25"/>
                        <x-measurements-data bodyPart="Inseam" size="25"/>
                        <x-measurements-data bodyPart="Outseam" size="25"/>
                        <x-measurements-data bodyPart="Total Rise" size="25"/>
                        <x-measurements-data bodyPart="Hip At Crotch" size="25"/>
                        <x-measurements-data bodyPart="Calf" size="25"/>
                        <x-measurements-data bodyPart="Bust Point" size="25"/>
                        <x-measurements-data bodyPart="Knee" size="25"/>
                        <x-measurements-data bodyPart="HPS to Waist" size="25"/>
                        <x-measurements-data bodyPart="Front Hip" size="25"/>
                        <x-measurements-data bodyPart="Back Hip" size="25"/>
                        <x-measurements-data bodyPart="Front Rise" size="25"/>
                        <x-measurements-data bodyPart="Back Rise" size="25"/>
                        <x-measurements-data bodyPart="Height" size="25"/>
                        <x-measurements-data bodyPart="Waist to Knee" size="25"/>
                    </div>

                    {{-- view uploaded image & stutas update  --}}
                    <div class="flex justify-between items-center mt-[2vw]">
                        <button onclick="window.open('{{ asset('/storage/images/customers/RwYJ7q45JYH9LmBOgpJoGN4jFUZovOfmkANdDaEb.png') }}','_blank')" class="bg-[#24717B] ml-[2.8vw] text-white w-[8vw] h-[2vw] text-[1.2vw] font-medium rounded-[.3vw]" type="button">View Image</button>

                        <form action="" method="POST">
                            <select class="border-[0.1vw] border-black text-[1.2vw] w-[8vw] h-[2vw]" name="status" id="new-order-status">
                                <option value="" selected>Select</option>
                                <option value="accepted">Accepted</option>
                                <option value="rejected">Rejected</option>
                            </select>
                            <select class="ml-[2vw] border-[0.1vw] border-black text-[1.2vw] w-[18vw] h-[2vw]" name="reason" id="new-order-reason">
                                <option value="" selected>Select</option>
                            </select>
                            <button class="bg-primary mx-[2vw] ml-[2vw] text-white w-[5vw] h-[2vw] text-[1.2vw] font-medium rounded-[.3vw]" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

@endsection