@extends('layout.main')

@push('title')
	User | Feedback
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>

	<div class="mt-[12vw] flex">

        <!-- side-bar section -->
        <x-side-bar userProfile='No' userType='User'/>

        {{-- side-bar link page js --}}
        <x-side-bar-link id='#feedback'/>

    <!-- Feedback section -->
    <div class="sidebar-border w-[65vw] ml-[3vw] rounded-[1vw] text-[1.5vw] px-[4vw] pt-[1vw] font-semibold">
        <div class="font-bold text-[2vw] mb-[1vw]">
            Feedback
        </div>

        <form action="{{ route('user-feedback') }}" method="post">
            @csrf
            <div>
                <textarea name="message" class="border-solid border-gray-400 border-2 w-[57vw] h-[21vw] p-[0.5vw] rounded-md" placeholder="Max 220 word limit" cols="30" rows="10" spellcheck="false">{{$message}}</textarea>
                <input type="text" name="userid" hidden value="{{$uid}}">
            </div>
            <div class="flex mt-[1vw] mb-[1vw]">
                <button class="bg-blue-600 text-white text-[1.5vw] font-medium h-[2.5vw] w-[7vw] rounded-md" type="submit">Submit</button>

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
                <div class="w-[34vw] py-[.5vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-error'>
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
        </form>
    </div>
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