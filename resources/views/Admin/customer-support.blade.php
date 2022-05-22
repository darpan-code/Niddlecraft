@extends('layout.main')
    
    @push('title')
        Coustomer Support
    @endpush
            
@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='Admin' loginStatus='Yes' userName='Admin'/>

    <div class="mt-[12vw] flex justify-between">
            <!-- side-bar section -->
            <x-side-bar userProfile='No' userType='Admin'/>
            
            {{-- side-bar link page js --}}
            <x-side-bar-link id='#Quarries'/>

            {{-- Coustomer Queries section --}}
            <div style="background-image: url({{asset('images/vectors/customer.jpg')}}); background-size: cover; background-position: center;" class="w-[65vw] h-[31vw] rounded-[1vw] mr-[6vw]">
            
                <div class="text-center text-white font-bold text-[4vw] shadow-sm mt-[2vw] mb-[3vw]">Customer Queries</div>

                <div class="flex justify-around">
                    <x-csBox title='Total Queries' data='122' location='{{ route("total-queries") }}'/>
                    <x-csBox title='New Queries' data='55' location='{{ route("new-queries") }}'/>
                    <x-csBox title='Completed' data='68' location='{{ route("complete-queries") }}'/>
                </div>
            </div>
    </div>
@endsection