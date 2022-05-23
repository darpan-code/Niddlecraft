@extends('layout.main')

@push('title')
	Admin | Profile
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

	<form action="">
	<div class="mt-[8vw] flex">

		<!-- side-bar section -->
		<x-side-bar userProfile='No' userType='Admin'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#profile'/>

		<!-- Admin Information section -->
			<div class="sidebar-border w-[65vw] ml-[3vw] h-[31vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[2vw] font-semibold">
				<div class="text-[2vw] font-bold">
					Admin Information
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
				</div>
				<div class="flex">
                    <button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8vw] text-[1.5vw] rounded-[0.5vw] font-semibold">Save</button>
                </div>
			</div>
		</form>
	</div>
@endsection