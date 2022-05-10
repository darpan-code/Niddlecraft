@extends('layout.main')

@push('title')
	User | Profile
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>

	<form action="">
	<div class="mt-[12vw] flex">

		<!-- side-bar section -->
		<x-side-bar userProfile='Yes' userType='User'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#profile'/>

		<!-- personal section -->
			<div class="sidebar-border w-[65vw] ml-[3vw] h-[39vw] mb-[2vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] font-semibold">
				<div class="text-[2vw] font-bold">
					Personal Information
				</div>
				<div class="flex justify-between my-[4vw] ">
					<div>
						<div>Name</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text">
					</div>
					<div>
						<div>Password</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="password">
					</div>
				</div>
				<div class="flex justify-between mt-[4vw]">
					<div>
						<div>Email ID</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="email">
					</div>
					<div>
						<div>Phone Number</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="tel">
					</div>
				</div>
				<div class="flex justify-between mt-[4vw]">
					<div>
						<div>Gender</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="text" value="Female" readonly>
					</div>
					<div>
						<div>Date of Birth</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" type="date">
					</div>
				</div>
				<button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] mt-[3vw] ml-[49vw] font-semibold">Save</button>
			</div>
		</form>
	</div>
@endsection
