@extends('layout.main')

@push('title')
	User | Manage Address
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' :userName=$UserName/>

    <form action="{{ route('user-manage-address') }}" method="post">
        @csrf
        <div class="mt-[12vw] flex">

            <!-- side-bar section -->
            <x-side-bar userProfile='No' userType='User'/>

            {{-- side-bar link page js --}}
            <x-side-bar-link id='#address'/>

            <!-- address section -->
            <div class="sidebar-border w-[65vw] min-h-[48vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[4vw] py-[2vw] font-semibold mb-[2vw]"> 
                <div class="font-bold text-[2vw]">
                    Shipping Address
                </div>
                    <div class="mt-[4vw]">
                        <div>Address</div>
                        <input class="border-b-[0.2vw] w-[57vw] pl-[.5vw]" type="text" name="address" value="{{ $UserData['address'] }}">
                    </div>
                    <div class="mt-[4vw]">
                        <div>Landmark</div>
                        <input class="border-b-[0.2vw] w-[57vw] pl-[.5vw]" type="text" name="landmark" value="{{ $UserData['landmark'] }}">
                    </div>
                <div class="flex justify-between mt-[4vw]">
                    <div>
                        <div>City</div>
                        <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" name="city" value="{{ $UserData['city'] }}">
                    </div>
                    <div>
                        <div>District</div>
                        <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" name="district" value="{{ $UserData['district'] }}" readonly>
                    </div>
                </div>
                <div class="flex justify-between mt-[4vw]">
                    <div>
                        <div>Pin Code</div>
                        <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" name="pincode" value="{{ $UserData['pincode'] }}">
                    </div>
                    <div>
                        <div>State</div>
                        <input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" name="state" value="{{ $UserData['state'] }}" readonly>
                    </div>
                </div>
                <div class="mt-[3vw] flex">
                    <button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] font-semibold">Save</button>
                
                {{-- Update data status in database --}}
                @if (session('status')==='Updated')
                    <div class="w-[24vw] h-[3vw] rounded-[0.5vw] bg-[#d1e7dd] flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-update'>
                        <div>
                            Successfully updated your data.
                        </div>
                        <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                    </div>
                @elseif(session('status')==='Failed')
                    <div class="w-[24vw] h-[3vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-update'>
                        <div>
                            Can't update your data.
                        </div>
                        <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                    </div>
                @endif
            
                {{-- form validation errors --}}
                @if ($errors->any())
                    <div class="w-[24vw] py-[.5vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-error'>
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
        </div>
    </form>

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