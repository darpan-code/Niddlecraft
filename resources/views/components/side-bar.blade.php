<div class="sidebar-border ml-[4vw] text-[1.5vw] w-[22vw] h-[31vw] rounded-[1vw] font-semibold">

    <div class="bg-[#ECECEC] w-[22vw] h-[5vw] pl-[2vw] flex items-center rounded-t-[1vw]">

    @if ($userProfile==='Yes')
        <div class="w-[10vw] h-[10vw] overflow-hidden rounded-full relative top-[-3vw] left-[4vw] img-div">
            <img src="images/customer/cust2.png" alt="User profile">
            <div class="cursor-pointer w-[10vw] h-[5vw] bg-[#00000051] absolute left-[0vw] bottom-[-5vw] text-[2vw] text-[#ecececcc] flex justify-center items-center img-cover"><i class="fa-solid fa-camera"></i></div>
            <input class="hidden" type="file" name="img" id="img-upload" accept="image/*">
        </div>
    @elseif ($userProfile==='No')
        <div class="text-[1.7vw]">My Account</div>
    @endif
    
    </div>

@if ($userType==='User')
    <div class="flex flex-col justify-around items-center">
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-profile') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="profile"><i class="fa-solid fa-user mr-[0.5vw]"></i>Profile</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-manage-orders') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="orders"><i class="fa-solid fa-gift mr-[0.5vw]"></i>Manage Orders</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-manage-address') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="address"><i class="fa-solid fa-location-dot mr-[0.5vw]"></i>Manage Address</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-gifts-&-rewards') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="gifts"><i class="fa-solid fa-circle-dollar-to-slot mr-[0.5vw]"></i>Gifts & Reawards</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center">
            <a href="{{ route('user-body-measurements') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="measurements"><i class="fa-solid fa-tape mr-[0.5vw]"></i>Body Measurement</a>
        </div>
    </div>
@elseif ($userType==='Admin')
    <div class="flex flex-col justify-around items-center">
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-profile') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="profile"><i class="fa-solid fa-user mr-[0.5vw]"></i>Admin Profile</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-manage-orders') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="orders"><i class="fa-solid fa-gift mr-[0.5vw]"></i>Manage Orders</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-profile') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="address"><i class="fa-solid fa-location-dot mr-[0.5vw]"></i>Manage Address</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center border-b-[0.15vw]">
            <a href="{{ route('user-profile') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="gifts"><i class="fa-solid fa-circle-dollar-to-slot mr-[0.5vw]"></i>Gift & Reawards</a>
        </div>
        <div class="h-[5vw] w-[18vw] flex items-center">
            <a href="{{ route('user-profile') }}" class="text-[#0000007b] hover:text-[#0000007b]" id="measurement"><i class="fa-solid fa-tape mr-[0.5vw]"></i>Body Measurement</a>
        </div>
    </div>
@endif
</div>