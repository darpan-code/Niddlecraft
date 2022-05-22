@extends('layout.main')

@push('title')
    New Queries
@endpush

@section('body')
<!-- nav-bar section -->
<x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

<!-- home section -->

<!-- Total Queries -->
<div class="flex justify-between items-center mt-[6vw] mx-[5vw]">
    <button onclick="location.href='{{ route('customer-support') }}'" class="fa-solid fa-circle-arrow-left text-[2.5vw]"></button>
    <div class="text-[2.2vw] font-bold">New Queries</div>
    <div class="w-[2.5vw]"></div>
</div>

    <!-- Queries Column -->

    <div class="flex justify-between items-center mt-[1vw] mx-[4vw] bg-[#0074D6] text-white font-semibold h-[4vw] rounded-[0.5vw] px-[1vw] text-[1.5vw] w-[92vw]">
        <div class="w-[14vw]">Name</div>
        <div class="w-[22vw]">Email</div>
        <div class="w-[25vw]">Message</div>
        <div class="w-[6vw]">Status</div>
        <div class="w-[10vw]">Date & Time</div>
        <div class="w-[4vw]">More</div>
    </div>

    <!-- User Details-->
<div class="pl-[4vw] h-[24vw] mt-[1vw] overflow-y-scroll">
        
    <div class="font-medium bg-[#ECECEC] min-h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
        <div class="flex justify-between pt-[0.5vw] text-sm]">
            <div class="w-[14vw]">Megha Sen</div>
            <div class="w-[22vw]">meghasen123@gmail.com</div>
            <div class="w-[25vw]">Regarding my account issue.</div>
            <div class="w-[6vw]">Done
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" class="w-[1vw] h-[1vw]">
            </div>
            <div class="w-[10vw]">
                <div id="date">--/--/----</div>
                <div class="" id="time">--:--:--</div>
            </div>
            <div class="w-[4vw] flex justify-center cursor-pointer"  id="hide"><i class="fa-solid fa-angle-down text-[2vw]" id="change"></i></div>
        </div>
        <div class="pb-[1vw] hidden" id="hello">
            <div class="text-[#7C7C7C]">#2022001</div>
            <div class="font-bold">Regarding my account</div>
            <div class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque facilis debitis fuga cumque fugit quam, porro, dolores laborum, aliquid deserunt libero perferendis. Est aliquam ratione dolorem. Vitae, iure sit, eligendi soluta repellat quam distinctio eius facilis quia unde eveniet earum maxime dicta dolores suscipit consequuntur accusamus, voluptate tenetur libero! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quae. Labore, saepe? Voluptas labore illum ducimus, hic corrupti repellat facere? Lorem ipsum dolor sit, amet consectetur adipisicing elit. In nihil aperiam a soluta maxime nam, nemo quia modi hic qui! Doloremque odio corrupti in fugiat sit deserunt sed totam error.</div>
            <div class="flex justify-end">
                <button type="submit" class="bg-[#0074D6] text-white w-[5vw] h-[2vw] font-medium rounded-[0.4vw]">Submit</button>
            </div>
        </div>
    </div>
        
</div>

    <script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("#hello").slideToggle();
            $("#change").toggleClass("fa-solid fa-angle-down");
        });

        $("#hide").click(function(){
            $("#change").toggleClass("fa-solid fa-angle-up");
        });

        $("#vehicle1").click(function(){
            var dt = new Date();
            var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
            var date = dt.getDate() + "/" +(dt.getMonth() + 1) + "/" + dt.getFullYear();
            $("#time").html(time);
            $("#date").html(date);
        });
        
    });
    </script>
@endsection