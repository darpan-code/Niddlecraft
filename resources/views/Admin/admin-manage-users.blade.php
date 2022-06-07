@extends('layout.main')

@push('title')
	Admin | Manage Users
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

	<div class="mt-[8vw] flex">

		<!-- side-bar section -->
		<x-side-bar userProfile='No' userType='Admin'/>

		{{-- side-bar link page js --}}
		<x-side-bar-link id='#manageUsers'/>

        {{-- Manage Users box --}}
        <div class="sidebar-border w-[65vw] ml-[3vw] min-h-[31vw] mb-[2vw] rounded-[1vw] text-[1.5vw] px-[3vw] pt-[2vw] font-semibold flex flex-col items-center">

            <form action="" method="get">
            {{-- header section  --}}
            <div class="flex justify-between items-center w-[60vw]">
                <div class="text-[2vw] font-bold">Manage Users</div>
                <div class="flex">
                    <div class="flex items-center border-solid border-[.2vw] border-black rounded-[.5vw] h-[2.5vw] px-[.5vw]">
                        <i class="fa fa-search"></i>
                        <input class="text-[1.2vw] font-medium ml-[.5vw]" type="search" name="search" placeholder="Search" value="{{ old('search') }}">
                    </div>
                    <button class="bg-primary mx-[1vw] h-[2.5vw] w-[6vw] text-white  text-[1.2vw] text-center rounded-[.5vw]">Search</button>
                    <button class="bg-warning h-[2.5vw] w-[6vw] text-white  text-[1.2vw] text-center rounded-[.5vw]" type="button" onclick="location.href='{{ route('manage-users') }}'">Reset</button>
                </div>
            </div>
            </form>

        @if ($data)
            {{-- Users Data list --}}
            <div class="mt-[1vw] inline-grid grid-cols-4 gap-[2vw] min-h-[20vw] justify-center" id="users-data">
                @foreach ($UserData as $User)
                    <div class="bg-slate-100 w-[13vw] h-[15vw] rounded-[.5vw] border-solid border-[.2vw] border-black flex flex-col justify-center items-center">
                        <div class="h-[6vw] w-[6vw] rounded-full overflow-hidden">
                        @if ($User->img)
                            <img class="w-[6vw]" src="{{ asset('storage/'.$User->img) }}" alt="Cusomer Image">
                        @else
                            <img class="w-[6vw]" src="{{ asset('images/customer/demoUser.jpg') }}" alt="Cusomer Image">
                        @endif
                        </div>
                        <div class="text-[1.2vw] font-bold">{{ $User->name }}</div>
                        @if ($User->phone_number)
                            <div class="text-[1vw]">+91{{ $User->phone_number }}</div>
                        @else
                            <div class="text-[1vw]">+91##########</div>
                        @endif
                        @if ($User->phone_number)
                            <div class="text-[1vw] max-w-[12vw] overflow-hidden">{{ $User->email }}</div>
                        @else
                            <div class="text-[1vw] max-w-[12vw] overflow-hidden">example@email.com</div>
                        @endif

                        <button class="bg-blue-600 border-[.2vw] h-[2vw] w-[5vw] mt-[1vw] text-white  text-[0.9vw] text-center rounded-[.5vw]" type="button" data-bs-toggle="modal" data-bs-target="#user-{{ $User->uid }}">View More</button>
                    </div>

                    {{-- modal  --}}
                    
                    <div class="modal fade" id="user-{{ $User->uid }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content w-[64vw] min-h-[36vw] relative">
                                <button type="button" class="w-[2vw] h-[2vw] text-[1.5vw] absolute z-10 right-[0vw]" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>

                                {{-- header part --}}
                                <div class="h-[18vw] relative">
                                    <img class="h-[18vw] w-[44vw] absolute right-[2vw]" src="{{ asset('images/vectors/user-channel-art.png') }}" alt="User channel art">
                                    <div class="h-[15vw] w-[15vw] absolute top-[2vw] left-[2vw] rounded-full overflow-hidden">
                                    @if ($User->img)
                                        <img class="w-[15vw]" src="{{ asset('storage/'.$User->img) }}" alt="Cusomer Image">
                                    @else
                                        <img class="w-[15vw]" src="{{ asset('images/customer/demoUser.jpg') }}" alt="Cusomer Image">
                                    @endif
                                    </div>
                                </div>

                                @php
                                    if ($User->dob) {
                                        $dateOfBirth = $User->dob;
                                        $today = date("Y-m-d");
                                        $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                        $age = $diff->format('%y');
                                    }else{
                                        $age = '';
                                    }
                                @endphp 

                                {{-- body part --}}
                                <div class="text-[1.5vw] w-[64vw] min-h-[18vw] p-[2vw] font-bold flex">
                                    <div class="min-w-[34vw] mr-[1vw]">
                                        <div class="flex"><div class="w-[6vw]">Name </div><div class="font-semibold ml-[.5vw]">: {{ $User->name }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">Phone </div><div class="font-semibold ml-[.5vw]">: {{ $User->phone_number }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">Email </div><div class="font-semibold ml-[.5vw]">: {{ $User->email }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">Gender </div><div class="font-semibold ml-[.5vw]">: {{ $User->gender }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">Age </div><div class="font-semibold ml-[.5vw]">: {{ $age }}</div></div>
                                        <div class="flex"><div class="inline-block">Date of birth </div><div class="font-semibold ml-[.5vw]">: {{ $User->dob }}</div></div>
                                    </div>
                                    <div class="w-[24vw]">
                                        <div class="flex"><div class="w-[6vw]">Address </div><div class="flex font-semibold ml-[.5vw]">: <div class="ml-[.5vw]"> {{ $User->address }}</div></div></div>
                                        <div class="flex"><div class="w-[6vw]">City </div><div class="font-semibold ml-[.5vw]">: {{ $User->city }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">District </div><div class="font-semibold ml-[.5vw]">: {{ $User->district }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">Pin </div><div class="font-semibold ml-[.5vw]">: {{ $User->pincode }}</div></div>
                                        <div class="flex"><div class="w-[6vw]">State </div><div class="font-semibold ml-[.5vw]">: {{ $User->state }}</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="text-[1vw] my-[1vw]">
                {{ $UserData->links('pagination::bootstrap-4') }}
            </div>
        @else
            <img class="w-[40vw]" src="{{ asset('images/vectors/nodatafound.png') }}" alt="No Data Found">
        @endif
        </div>
	</div>
@endsection
