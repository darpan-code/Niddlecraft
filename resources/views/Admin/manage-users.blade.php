@extends('layout.main')

@push('title')
	Admin | Profile
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

	<form action="">
	<div class="mt-[12vw] flex">

		<!-- side-bar section -->
		<x-side-bar userProfile='No' userType='Admin'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#ManageUsers'/>

        {{-- Manage Users box --}}
        <div class="sidebar-border w-[65vw] ml-[3vw] h-[39vw] mb-[2vw] rounded-[1vw] text-[1.5vw] px-[3vw] pt-[2vw] font-semibold">
            <div class="flex justify-between">
                <div class="text-[2vw] font-bold">Manage Users</div>
                <div class="">
                    <i class="fa fa-search absolute p-[0.4vw]"></i>
                    <input class="border-solid border-2 border-black rounded-md h-[2vw] pl-[2vw]" type="text" id="d">
                </div>
            </div>
            <div class="mt-[1vw] inline-grid grid-cols-4 gap-3 overflow-y-scroll px-[1.5vw] h-[32vw] justify-center">
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img >
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
                <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-lg border-solid border-2 border-black flex flex-col justify-center items-center">
                    <img class="rounded-full h-[6vw] w-[6vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic">
                    <div class="text-[1.2vw] font-bold">Megha Sen</div>
                    <div class="text-[1vw]">+919876543210</div>
                    <div class="text-[1vw]">meghasen@gmail.com</div>
                    <button class="bg-blue-600 border-2 h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">View More</button>
                </div>
            </div>
        </div>
	</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content w-[63vw] h-[33vw]">
                <div style="background-image: url('{{ asset('images/vectors/profileart1.jpg') }}')" class="h-[14vw] bg-cover">
                <button type="button" class="absolute right-0 bg-white w-[2vw] h-[2vw] text-[1.5vw]" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div><img class="absolute top-[1vw] right-[26vw] shadow-sm border-green-600 border-2  rounded-full h-[12vw] w-[12vw]" src="{{ asset('images/customer/cust2.png') }}" alt="profile pic"></div>
                <div class="flex justify-around">
                <div class="mt-[1vw]  ml-[1vw] text-[1.5vw] font-bold border-r">
                <div class="font-medium text-gray-400">#2022001</div>
                <div>Name &ensp;: Megha Sen</div>
                <div>Phone &nbsp;: +919876543210</div>
                <div>Email &nbsp;&ensp;: meghasen@gmail.com</div>
                <div>Gender: Female</div>
                <div>Age &nbsp;: 23</div>
                <div>Date of birth: 20/10/1998</div>
                </div>
                <div class="mt-[3.5vw] mr-[1vw] ml-[1vw] text-[1.5vw] font-semibold">
                    <div>Address: 
                        Grand Trunk Road Near Khadina More, Dharampur
                    </div>
                    <div>City: Chinsurah</div>
                    <div>District: Hooghly</div>
                    <div>PIN: 712101</div>
                    <div> State: West Bengal</div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
