<form action="{{ asset('/') }}" method="post">
    @csrf
    <div class="pl-[4vw] w-[62vw] text-[2vw]">
        <div class="text-[3vw] font-semibold mt-[1vw]">Let's get in touch</div>
        <div class="flex justify-between pr-[2vw] mt-[2vw]">
            <div>
                <div class="font-medium">Name</div>
                <input class="border-b-[.2vw] border-gray-400 focus:outline-none w-[22vw] text-[1.8vw]" type="text" name="name" id="name" value="">
            </div>
            <div>
                <div class="font-medium">Email</div>
                <input class="border-b-[.2vw] border-gray-400 focus:outline-none w-[32vw] text-[1.8vw]" type="text" name="email" id="email" value="">
            </div>
        </div>
        <div class="mt-[3vw]">
            <div class="font-medium">Subject</div>
            <input class="border-b-[.2vw] border-gray-400 focus:outline-none w-[56vw] text-[1.8vw]" type="text" name="subject" id="subject" value="">
        </div>
        <div class="mt-[3vw]">
            <div class="font-medium">Message</div>
            <textarea class="border-b-[.2vw] border-gray-400 focus:outline-none w-[56vw] text-[1.5vw]" name="message" id="message" rows="3" value=""></textarea>
        </div>
        <div class="my-[1vw] flex">
            <button class="bg-[#24717B] text-white w-[16vw] h-[5vw] text-[2vw] font-medium rounded-[.5vw]" type="submit">Send Message</button>
            
            {{-- Update data status in database --}}
			@if (session('status')==='Updated')
                <div class="w-[24vw] h-[3vw] rounded-[0.5vw] bg-[#d1e7dd] flex justify-between items-center px-[1vw] ml-[3vw] font-medium text-[1.2vw]" id='alert-box-update'>
                    <div>
                        Successfully send your message.
                    </div>
                    <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                </div>
            @elseif(session('status')==='Failed')
                <div class="w-[24vw] h-[3vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] text-[1.2vw]" id='alert-box-update'>
                    <div>
                        Can't send your message.
                    </div>
                    <i class="fa-solid fa-xmark cursor-pointer" id="close-alert-box-update"></i>
                </div>
            @endif

            {{-- form validation errors --}}
			@if ($errors->any())
                <div class="w-[37vw] py-[.5vw] rounded-[0.5vw] bg-warning flex justify-between items-center px-[1vw] ml-[3vw] font-medium text-[1.2vw]" id='alert-box-error'>
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