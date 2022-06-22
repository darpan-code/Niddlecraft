@extends('layout.main')

@push('title')
    Total Queries
@endpush

@section('body')
    <!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <!-- Total Queries -->
    <div class="flex justify-between items-center mt-[6vw] mx-[5vw]">
        <button type="button" onclick="location.href='{{ route('customer-support') }}'" class="fa-solid fa-circle-arrow-left text-[2.5vw]"></button>
        <div class="text-[2.2vw] font-bold">Total Queries</div>
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

    <!-- User Querie Details-->
    <div class="pl-[4vw] h-[33vw] mt-[1vw] overflow-y-scroll">
            
        <div class="font-medium bg-[#ECECEC] min-h-[4vw] mb-[1vw] px-[1vw] rounded-[0.5vw] text-[1.2vw] w-[92vw]">
            <div class="flex justify-between pt-[0.5vw] font-medium">
                <div class="w-[14vw]">Megha Sen</div>
                <div class="w-[22vw]">meghasen123@gmail.com</div>
                <div class="w-[25vw]">Regarding my account issue.</div>
                <div class="w-[6vw]">Done</div>
                <div class="w-[10vw]">
                    <div>20/05/22</div>
                    <div>13:01:59</div>
                </div>
                <div class="w-[4vw] flex justify-center cursor-pointer" id="show-btn"><i class="fa-solid fa-angle-down text-[2vw]" id="btn-icon"></i></div>
            </div>
            <div class="pb-[1vw] hidden" id="details">
                <div class="text-[#7C7C7C]">#2022001</div>
                <div class="font-bold">Regarding my account</div>
                <div class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis atque facilis debitis fuga cumque fugit quam, porro, dolores laborum, aliquid deserunt libero perferendis. Est aliquam ratione dolorem. Vitae, iure sit, eligendi soluta repellat quam distinctio eius facilis quia unde eveniet earum maxime dicta dolores suscipit consequuntur accusamus, voluptate tenetur libero! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quae. Labore, saepe? Voluptas labore illum ducimus, hic corrupti repellat facere? Lorem ipsum dolor sit, amet consectetur adipisicing elit. In nihil aperiam a soluta maxime nam, nemo quia modi hic qui! Doloremque odio corrupti in fugiat sit deserunt sed totam error.</div>
            </div>
        </div>
        
    </div>

    <script>
        $(document).ready(function(){
            $("#show-btn").click(function(){
                $("#details").slideToggle();
                $("#btn-icon").toggleClass("fa-angle-up fa-angle-down");
            });
        });
    </script>
@endsection