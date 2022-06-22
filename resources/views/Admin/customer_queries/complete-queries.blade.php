@extends('layout.main')

@push('title')
    Completed Queries
@endpush

@section('body')
    <!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <!-- Total Queries -->
    <div class="flex justify-between items-center mt-[6vw] mx-[5vw]">
        <button type="button" onclick="location.href='{{ route('customer-support') }}'" class="fa-solid fa-circle-arrow-left text-[2.5vw]"></button>
        <div class="text-[2.2vw] font-bold">Completed Queries</div>
        <div class="w-[2.5vw]"></div>
    </div>

    <!-- Queries Column -->
    <div class="flex justify-between items-center mt-[1vw] mx-[4vw] bg-[#0074D6] text-white font-semibold h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.5vw] w-[92vw]">
        <div class="w-[14vw]">Name</div>
        <div class="w-[22vw]">Email</div>
        <div class="w-[25vw]">Message</div>
        <div class="w-[6vw] text-center">Status</div>
        <div class="w-[10vw] text-center">Date & Time</div>
        <div class="w-[4vw] text-center">More</div>
    </div>

    <!-- User Querie Details-->
    <div class="pl-[4vw] mt-[1vw]">
                
    @if ($data)
        @foreach ($QuarriesData as $data)
            <div class="font-medium bg-[#ECECEC] min-h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
                <div class="flex justify-between items-center font-medium">
                    <div class="w-[14vw]">{{ $data->name }}</div>
                    <div class="w-[22vw]">{{ $data->email }}</div>
                    <div class="w-[25vw]">{{ $data->subject }}</div>
                    <div class="w-[6vw] text-center">{{ $data->status }}</div>
                    <div class="w-[10vw] flex flex-col items-center mt-[0.2vw] justify-center">
                        <div> {{ $data->date }} </div>
                        <div> {{ $data->time }} </div>
                    </div>
                    <div class="w-[4vw] flex justify-center cursor-pointer" id="show-btn{{ $data->id }}">
                        <i class="fa-solid fa-angle-down text-[2vw]" id="btn-icon{{ $data->id }}"></i>
                    </div>
                </div>
                <div class="pb-[1vw] hidden" id="details{{ $data->id }}">
                    <div class="text-[#7C7C7C]">#{{ $data->id }}</div>
                    <div class="font-bold">{{ $data->subject }}</div>
                    <div class="text-justify">{{ $data->message }}</div>
                </div>
            </div>

            <script>
                $(document).ready(function(){
                    $("#show-btn{{ $data->id }}").click(function(){
                        $("#details{{ $data->id }}").slideToggle();
                        $("#btn-icon{{ $data->id }}").toggleClass("fa-angle-up fa-angle-down");
                    });
        
                    $("#check-box{{ $data->id }}").click(function(){
                        var dt = new Date();
                        var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                        var date = dt.getDate() + "/" +(dt.getMonth() + 1) + "/" + dt.getFullYear();
                        
                        if ($("#check-box{{ $data->id }}").is(":checked")) {
                            $("#date{{ $data->id }}").html(date);
                            $("#time{{ $data->id }}").html(time);
                        } else {
                            $("#date{{ $data->id }}").html('--/--/----');
                            $("#time{{ $data->id }}").html('--:--:--');
                        }
                    });
                });
            </script>
        @endforeach
                
        <div class="flex justify-center text-[1vw] my-[1vw]">
            {{ $QuarriesData->links('pagination::bootstrap-4') }}
        </div>  

    @else
        <div class="flex justify-center">
            <img class="w-[40vw]" src="{{ asset('images/vectors/nodatafound.png') }}" alt="No Data Found">
        </div>
    @endif      
    </div>
@endsection