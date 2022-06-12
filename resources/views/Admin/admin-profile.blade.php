@extends('layout.main')

@push('title')
	Admin | Profile
@endpush

@section('body')
@foreach ($AdminData as $Admin)

	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='{{$Admin->name}}'/>

	<div class="mt-[8vw] flex">

		<!-- side-bar section -->
		<x-side-bar userProfile='No' userType='Admin'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#profile'/>

		<!-- Admin Information section -->
		<form action="{{ route('admin-profile') }}" method="POST">
			@csrf
			<div class="sidebar-border w-[65vw] ml-[3vw] min-h-[31vw] rounded-[1vw] text-[1.5vw] px-[4vw] py-[2vw] font-semibold">
				<div class="text-[2vw] font-bold">
					Admin Information
				</div>
				<div class="flex justify-between mt-[4vw] ">
					<div>
						<div>Name</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" name="name" type="text" value="{{$Admin->name}}">
					</div>
					<div>
						<div>Password</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" name="password" type="password" value="{{$Admin->password}}">
					</div>
				</div>
				<div class="flex justify-between mt-[4vw]">
					<div>
						<div>Email ID</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" name="email" type="email" value="{{$Admin->email}}">
					</div>
					<div>
						<div>Phone Number</div>
						<input class="border-b-[0.2vw] w-[26vw] pl-[.5vw]" name="number" type="tel" value="{{$Admin->phone_number}}">
					</div>
				</div>
				<div class="flex justify-between mt-[4vw]">
				</div>
				<div class="flex">
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
		</form>
	</div>
@endforeach

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