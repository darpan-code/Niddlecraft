@extends('layout.main')

@push('title')
    Processing
@endpush

@section('body')
    <!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <!-- New Appointments -->
    <div class="flex justify-between items-center mt-[6vw] mx-[5vw]">
        <button type="button" onclick="location.href='{{ route('admin-manage-orders') }}'" class="fa-solid fa-circle-arrow-left text-[2.5vw]"></button>
        <div class="flex items-center w-[30vw] h-[3vw] bg-[#dee2e6] rounded-full">
            <a href="{{ route("processing-appointments") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full bg-[#0056b3] text-white">Appointments</div></a>
            <a href="{{ route("new-orders") }}"><div class="w-[15vw] h-[3vw] text-[1.7vw] font-medium flex items-center justify-center rounded-full text-black">Orders</div></a>
        </div>
        <div class="w-[2.5vw]"></div>
    </div>

    <!-- Appointments Column -->
    <div class="flex justify-between items-center text-center mt-[1vw] mx-auto bg-[#0074D6] text-white font-semibold h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.5vw] w-[92vw]">
        <div class="w-[8vw]">Order ID</div>
        <div class="w-[14vw]">Name</div>
        <div class="w-[10vw]">Number</div>
        <div class="w-[6vw]">Service</div>
        <div class="w-[14vw]">Service Type</div>
        <div class="w-[10vw]">Service Place</div>
        <div class="w-[10vw]">Status</div>
        <div class="w-[5vw]">More</div>
    </div>

    <!-- User Appointments Details-->
    <div class="h-[33vw] mt-[1vw]">

    @if ($data)
        @foreach ($AppointmentData as $data)
            <div class="flex text-center justify-between items-center font-medium bg-[#ECECEC] h-[4vw] mx-auto mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
                <div class="w-[8vw]">#{{ $data->apid }}</div>
                <div class="w-[14vw]">{{ $data->name }}</div>
                <div class="w-[10vw]">{{ $data->phone_number }}</div>
                <div class="w-[6vw]">{{ $data->service }}</div>
                <div class="w-[14vw]">{{ $data->service_type }}</div>
                <div class="w-[10vw]">{{ $data->service_place }}</div>
                <div class="w-[10vw]">{{ $data->order_status }}</div>
                <button class="w-[5vw]" type="button" data-bs-toggle="modal" data-bs-target="#m{{ $data->apid }}">
                    <i class="fa-solid fa-ellipsis text-[2vw]"></i>
                </button>
            </div>
            
            @php
                if ($data->dob) {
                    $dateOfBirth = $data->dob;
                    $today = date("Y-m-d");
                    $diff = date_diff(date_create($dateOfBirth), date_create($today));
                    $age = $diff->format('%y');
                }else{
                    $age = '';
                }
            @endphp

            {{-- modal  --}}
            
            <div class="modal fade" id="m{{ $data->apid }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content w-[85vw] h-[45vw] relative">
                        <button type="button" class="w-[2vw] h-[2vw] text-[1.5vw] absolute z-10 right-[0vw]" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

                        {{-- personal details --}}
                        <div class="text-[1.3vw] w-[64vw] min-h-[15vw] p-[2vw] font-bold flex">
                            <div class="min-w-[26vw] mr-[1vw]">
                                <div class="flex"><div class="w-[6vw]">Name </div><div class="font-semibold ml-[.5vw]">: {{ $data->name }}</div></div>
                                <div class="flex"><div class="w-[6vw]">Phone </div><div class="font-semibold ml-[.5vw]">: {{ $data->phone_number }}</div></div>
                                <div class="flex"><div class="w-[6vw]">Email </div><div class="font-semibold ml-[.5vw]">: {{ $data->email }}</div></div>
                                <div class="flex"><div class="w-[6vw]">Gender </div><div class="font-semibold ml-[.5vw]">: {{ $data->gender }}</div></div>
                                <div class="flex"><div class="w-[6vw]">Age </div><div class="font-semibold ml-[.5vw]">: {{ $age }}</div></div>
                                <div class="flex"><div class="inline-block">Date of birth </div><div class="font-semibold ml-[.5vw]">: {{ $data->dob }}</div></div>
                            </div>
                            <div class="min-w-[26vw]">
                                <div class="flex"><div class="w-[6vw]">Address </div><div class="flex font-semibold ml-[.5vw]">: {{ $data->address }}<div class="ml-[.5vw]"> </div></div></div>
                                <div class="flex"><div class="w-[6vw]">City </div><div class="font-semibold ml-[.5vw]">: {{ $data->city }}</div></div>
                                <div class="flex"><div class="w-[6vw]">District </div><div class="font-semibold ml-[.5vw]">: {{ $data->district }}</div></div>
                                <div class="flex"><div class="w-[6vw]">Pin </div><div class="font-semibold ml-[.5vw]">: {{ $data->pincode }}</div></div>
                                <div class="flex"><div class="w-[6vw]">State </div><div class="font-semibold ml-[.5vw]">: {{ $data->state }}</div></div>
                            </div>
                            <div class="min-w-[24vw]">
                                <div class="flex"><div class="w-[9vw]">Service </div><div class="flex font-semibold ml-[.5vw]">: {{ $data->service }}<div class="ml-[.5vw]"> </div></div></div>
                                <div class="flex"><div class="w-[9vw]">Service Type </div><div class="font-semibold ml-[.5vw]">: {{ $data->service_type }}</div></div>
                                <div class="flex"><div class="w-[9vw]">Service Place </div><div class="font-semibold ml-[.5vw]">: {{ $data->service_place }}</div></div>
                                <div class="flex"><div class="w-[9vw]">Order Date </div><div class="font-semibold ml-[.5vw]">: {{ $data->order_date }}</div></div>
                                <div class="flex"><div class="w-[9vw]">Order Time </div><div class="font-semibold ml-[.5vw]">: {{ $data->order_time }}</div></div>
                                <div class="flex"><div class="w-[9vw]">Status </div><div class="font-semibold ml-[.5vw]">: {{ $data->order_status }}</div></div>
                            </div>
                        </div>

                        {{-- body measerements details --}}
                        <div class="pl-[2vw] pb-[1vw] text-[1.3vw] px-[2vw] font-bold">Body Measurements</div>
                        <div class="text-[1.3vw] px-[2vw] font-bold grid grid-cols-7 justify-items-center gap-y-[1vw]">
                            <x-measurements-data bodyPart="Shoulder" size="{{ $data->shoulder }}"/>
                            <x-measurements-data bodyPart="Chest" size="{{ $data->chest }}"/>
                            <x-measurements-data bodyPart="Bust" size="{{ $data->bust }}"/>
                            <x-measurements-data bodyPart="Under Bust" size="{{ $data->underBust }}"/>
                            <x-measurements-data bodyPart="Waist" size="{{ $data->waist }}"/>
                            <x-measurements-data bodyPart="Wearing Waist" size="{{ $data->wearingWaist }}"/>
                            <x-measurements-data bodyPart="Hip" size="{{ $data->hip }}"/>
                            <x-measurements-data bodyPart="Thigh" size="{{ $data->thigh }}"/>
                            <x-measurements-data bodyPart="Upper Arm" size="{{ $data->upperArm }}"/>
                            <x-measurements-data bodyPart="Inseam" size="{{ $data->inseam }}"/>
                            <x-measurements-data bodyPart="Outseam" size="{{ $data->outseam }}"/>
                            <x-measurements-data bodyPart="Total Rise" size="{{ $data->totalRise }}"/>
                            <x-measurements-data bodyPart="Hip At Crotch" size="{{ $data->hipAtCrotch }}"/>
                            <x-measurements-data bodyPart="Calf" size="{{ $data->calf }}"/>
                            <x-measurements-data bodyPart="Bust Point" size="{{ $data->bustPoint }}"/>
                            <x-measurements-data bodyPart="Knee" size="{{ $data->knee }}"/>
                            <x-measurements-data bodyPart="HPS to Waist" size="{{ $data->hpsToWaist }}"/>
                            <x-measurements-data bodyPart="Front Hip" size="{{ $data->frontHip }}"/>
                            <x-measurements-data bodyPart="Back Hip" size="{{ $data->backHip }}"/>
                            <x-measurements-data bodyPart="Front Rise" size="{{ $data->frontRise }}"/>
                            <x-measurements-data bodyPart="Back Rise" size="{{ $data->backRise }}"/>
                            <x-measurements-data bodyPart="Height" size="{{ $data->height }}"/>
                            <x-measurements-data bodyPart="Waist to Knee" size="{{ $data->waistToKnee }}"/>
                        </div>

                        {{-- view uploaded image & stutas update  --}}
                        <div class="flex justify-between items-center mt-[2vw]">
                            @if ($data->design_img)
                                <button onclick="window.open('{{ asset('/storage/'. $data->design_img ) }}','_blank')" class="bg-[#24717B] ml-[2.8vw] text-white w-[8vw] h-[2vw] text-[1.2vw] font-medium rounded-[.3vw]" type="button">View Image</button>
                            @else
                                <button disabled class="bg-[#24717B] ml-[2.8vw] text-white w-[13vw] h-[2vw] text-[1.2vw] font-medium rounded-[.3vw]" type="button">Image not available</button>
                            @endif
                        

                            <form action="{{ route('processing-appointments') }}" method="POST">
                                @csrf
                                <select class="border-[0.1vw] border-black text-[1.2vw] w-[14vw] h-[2vw]" name="status" id="processing-order-status{{ $data->apid }}">
                                    <option value="" selected>Select</option>
                                    <option value="Ready to be Delivered">Ready to be Delivered</option>
                                    <option value="Rejected">Rejected</option>
                                </select>

                                <div class="inline-block" id="processing-orders{{ $data->apid }}">
                                    <input disabled class="ml-[2vw] pl-[0.2vw] border-[0.1vw] border-black text-[1.2vw] w-[18vw] h-[2vw]" type="date" name="deliveryDate" id="dalivery-date">
                                </div>
                                
                                <input hidden type="text" name="apid" value="{{ $data->apid }}">
                                <button class="bg-primary mx-[2vw] ml-[2vw] text-white w-[5vw] h-[2vw] text-[1.2vw] font-medium rounded-[.3vw]" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    // Processing Order Status Option Change
                    $("#processing-order-status{{ $data->apid }}").change(function () { 
                        var channgeValue = $("#processing-order-status{{ $data->apid }}").val();
                        
                        switch (channgeValue) {
                            case "Rejected":
                                $("#processing-orders{{ $data->apid }}").html('\
                                <select class="ml-[2vw] border-[0.1vw] border-black text-[1.2vw] w-[18vw] h-[2vw]" name="reason">\
                                    <option value="" selected>Select</option>\
                                    <option value="Busy">Busy</option>\
                                    <option value="Not enough time">Not enough time</option>\
                                </select>\
                                ');
                                break;
                        
                            default:
                                $("#processing-orders{{ $data->apid }}").html('<input class="ml-[2vw] pl-[0.2vw] border-[0.1vw] border-black text-[1.2vw] w-[18vw] h-[2vw]" type="date" name="delivaryDate" id="dalivary-date">');
                                break;
                        }
                    });
                });
            </script>
        @endforeach

        <div class="flex justify-center text-[1vw] my-[1vw]">
            {{ $AppointmentData->links('pagination::bootstrap-4') }}
        </div>  
        
        <script>
            $(document).ready(function () {
                // Update data status in database
                if ("{{session('status')}}"==='Updated') {
                    alert("Status has been updated!!!");
                } else if ("{{session('status')}}"==='Failed') {
                    alert("Can't update your data!!!");
                }
            });
        </script>
    @else
        <div class="flex justify-center">
            <img class="w-[40vw]" src="{{ asset('images/vectors/nodatafound.png') }}" alt="No Data Found">
        </div>
    @endif
    </div>

@endsection