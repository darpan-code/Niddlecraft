@extends('layout.main')

@push('title')
	User | Appointment
@endpush

@section('body')
	<!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='Yes' userName='Megha Sen'/>
	
    <!-- book-appointment section -->

    <div class="mt-[6vw] text-center ">
        <h1 class="text-[2.5vw] font-bold">Book an Appoinment</h1>
        <p class="text-[1.5vw] w-[40vw] mx-auto">Book an appoinment for your custom dress that you want to prepare from are professional tailors.</p>
    </div>
    <form action="">
    <div class="w-[90vw] rounded-[1vw] mt-[3vw] mx-auto bg-[#F3FAEF] mb-[4vw]">

        <!-- Communication Details -->
        <h1 class="text-[2vw] font-bold pl-[3vw] pt-[2vw]">Communication Details</h1>
        <div>
            <div class="text-[1.2vw] pl-[4vw]"><span class="text-red-600 mr-[.2vw]">*</span>Required Field</div>
            
            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[20vw]">
                    <div class="font-medium">Name<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Phone<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="tel" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Email<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="email" required>
                </div>
            </div>
            
            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[20vw]">
                    <div class="font-medium">Gender<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" value="Female" readonly required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Date of Birth<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="date" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">City<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" required>
                </div>
            </div>
            
            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[51vw]">
                    <div class="font-medium">Address<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[51vw] pl-[.5vw] rounded-[.2vw]" type="text" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">District<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" value="Hooghly" readonly required>
                </div>
            </div>
            
            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[20vw]">
                    <div class="font-medium">State<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" value="West Bengal" readonly required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">PIN Code<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Landmark</div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="text">
                </div>
            </div>
        </div>

        <!-- Service Details -->
        <h1 class="text-[2vw] font-bold pl-[3vw] pt-[2vw]">Service Details</h1>
        <div>
            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[20vw]">
                    <div class="font-medium">Select Service<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" id="service" required>
                        <option value="" selected>Select</option>
                        <option value="custom tailoring for women">Custom tailoring for women</option>
                        <option value="custom tailoring for students"> Custom tailoring for students</option>
                        <option value="other services"> Other services</option>
                    </select>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Service Type<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" id="service-type" required>
                        <option value="" selected>Select</option>
                    </select>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Service Place<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <select class="w-[20vw] pl-[.5vw] rounded-[.2vw]" required>
                        <option value="" selected>Select</option>
                        <option value="walk-in (Store visit)">walk-in (Store visit)</option>
                        <option value="Home visit">Home visit</option>
                    </select>
                </div>
            </div>

            <div class="text-[1.4vw] flex justify-between px-[4vw] mt-[2vw]">
                <div class="w-[20vw]">
                    <div class="font-medium">Appointment Date<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="date" required>
                </div>
                <div class="w-[20vw]">
                    <div class="font-medium">Appointment Time<span class="text-red-600 ml-[.2vw]">*</span></div>
                    <input class="w-[20vw] pl-[.5vw] rounded-[.2vw]" type="time" required>
                </div>
                <div class="w-[20vw]"></div>
            </div>
        </div>

        <!-- Body Measurement show/hide  -->
        <div class="px-[4vw] mt-[2vw] text-[1.4vw] font-medium">
            <span>Do you know your Body Measurement?</span>
            <input class="mx-[1vw] h-[1.4vw] w-[1.4vw] align-middle" type="radio" name="status" id="bm-show" required>Yes
            <input class="mx-[1vw] h-[1.4vw] w-[1.4vw] align-middle" type="radio" name="status" id="bm-hide" required>No
        </div>

        <!-- Body Measurement -->
        <div class="px-[4vw] mt-[2vw] text-[1.4vw] font-semibold hidden" id="bm-body">
            <h1 class="text-[2vw] font-bold pt-[2vw]">Body Measurement</h1>
                <div class="flex justify-between mt-[4vw] font-medium">

                    <x-body-measurements id='shoulder' lVal=11 hVal=25 bodyPart='Shoulder' img='shoulder-to-shoulder.jpg' desc="This is one that may be easier with the help of a friend. Measure across your upper back from the tip of one shoulder to the tip of the other. Try not to hunch over."/>

                    <x-body-measurements id='chest' lVal=20 hVal=100 bodyPart='Chest' img='chest.jpg' desc="Measure all the way around your torso immediately above your bust."/>

                    <x-body-measurements id='bust' lVal=20 hVal=100 bodyPart='Bust' img='bust.jpg' desc="Wearing your usual bra, with arms relaxed at your sides, measure your bust at the fullest point, keeping the tape parallel to the floor. It takes it past over both nipples, under the armhole and over the shoulder blades, around your back about where your bra strap is."/>

                    <x-body-measurements id='underBust' lVal=20 hVal=100 bodyPart='Under Bust' img='under-bust.jpg' desc="Measure all the way around your torso immediately beneath your bust."/>

                </div>

                <div class="flex justify-between mt-[4vw] font-medium">

                    <x-body-measurements id='waist' lVal=20 hVal=100 bodyPart='Waist' img='waist.jpg' desc="Measure around the narrowest part of the natural waistline. To find your natural waistline, bend to one side. There will usually be a crease where you bend. Often it is just below your ribcage. That's your natural waistline. Don't worry since this may seem higher than where you actually wear your pants and jeans. But this is the point that is so important for a great fit. Try to keep the tape measure parallel to the floor as you measure all the way around your torso. That's your natural Waist Circumference."/>

                    <x-body-measurements id='wearing-waist' lVal=20 hVal=100 bodyPart='Wearing Waist' img='wearing-waist.jpg' desc="Measure all the way around your waist where you actually wear your pants and jeans."/>

                    <x-body-measurements id='hip' lVal=20 hVal=100 bodyPart='Hip' img='hip.jpg' desc="Standing with heels together, measure around your body at the broadest part of your hips (approximately 8 inches below natural waistline). This will include the fullest part of your backside too and should be just about where your legs meets your torso."/>

                    <x-body-measurements id='thigh' lVal=20 hVal=100 bodyPart='Thigh' img='thigh.jpg' desc="Measure around the fullest part of one thigh. And yes, you get to choose which thigh."/>

                </div>

                <div class="flex justify-between mt-[4vw] font-medium">

                    <x-body-measurements id='upper-arm' lVal=9 hVal=100 bodyPart='Upper Arm' img='upper-arm.jpg' desc="Place the tape measure around the widest part of your upper arm, your bicep. Then bend your arm slightly at the elbow. We want to be able to bend your arm in that nature."/>

                    <x-body-measurements id='inseam' lVal=9 hVal=100 bodyPart='Inseam' img='inseam.jpg' desc="Measure the length of your inner leg all the way from the crotch to the ankle."/>

                    <x-body-measurements id='outseam' lVal=9 hVal=100 bodyPart='Outseam' img='outseam.jpg' desc="This is essential for well fitting pants. Measure straight from the wearing waistline to the ankle."/>

                    <x-body-measurements id='total-rise' lVal=9 hVal=100 bodyPart='Total Rise' img='total-rise.jpg' desc="Position the tape vertically and place it so that it starts at the center of your back right at the wearing waist. Now this is where you and your friend get more personal. Pass the tape between your legs and all the way up to the middle of your wearing waist in the front. Again, this may seem hard, but don't worry. Be sure the tape isn't too tight or too loose. Stand upright, this is your Total Rise."/>

                </div>

                <div class="flex justify-between mt-[4vw] font-semibold">

                    <x-body-measurements id='hip-at-crotch' lVal=9 hVal=100 bodyPart='Hip At Crotch' img='hip-at-crotch.jpg' desc="Measure all the way around your body at your low hip, where it meets the thighs."/>

                    <x-body-measurements id='calf' lVal=9 hVal=100 bodyPart='Calf' img='calf.jpg' desc="Measure around the fullest part of one calf."/>

                    <div class="w-[12vw]"></div>

                    <div class="w-[12vw]"></div>

                </div>

                <!-- information -->
                <div class="text-[1vw] mt-[3vw]">These measurements are optional. If you have a long torso or long legs, please consider providing them to help us achieve a great fit. For best results, please ask someone to help measure you</div>

                <div class="font-semibold text-[2.1vw] mt-[3vw]">High Point to Shoulder to</div>
                
                <div class="flex justify-between mt-[4vw] font-semibold">

                    <x-body-measurements id='bust-point' lVal=5 hVal=100 bodyPart='Bust Point' img='bust-point.jpg' desc="Start from where your shoulder meets your neck and measure down along the front of your body to the tip (apex) of the bust."/>

                    <x-body-measurements id='knee' lVal=5 hVal=100 bodyPart='Knee' img='knee.jpg' desc="Start from where your shoulder meets your neck and measure down following along the curve of your front to your natural waistline and then down along to your knee. For best results, ask someone to help with this measurement!"/>

                    <x-body-measurements id='waist' lVal=5 hVal=100 bodyPart='Waist' img='waist.jpg' desc="For best results, tie a ribbon (or string or skinny belt) at your natural waist (the narrowest part of the waistline) to mark it. Then start from where your shoulder meets your neck and measure down following along the curve of your front to the marker at your natural waist. It might be helpful to ask someone to help with this measurement!"/>
                                        
                    <x-body-measurements id='front-hip' lVal=10 hVal=60 bodyPart='Front Hip' img='front-hip.jpg' desc='Standing with heels together, measure from one side seam to the other side seam, across your front, at the broadest part of your hips (approximately 8" below natural waistline).'/>

                </div>

                <div class="flex justify-between mt-[4vw] font-semibold">

                    <x-body-measurements id='back-hip' lVal=10 hVal=60 bodyPart='Back Hip' img='back-hip.jpg' desc='Standing with heels together, measure from one side seam to the other side seam, across your back, at the broadest part of your hips (approximately 8" below natural waistline).'/>

                    <x-body-measurements id='front-rise' lVal=5 hVal=20 bodyPart='Front Rise' img='front-rise.jpg' desc='Position the tape vertically and place it so that it starts at the center of your wearing waist in the front. Pass the tape down to the crotch seam.'/>

                    <x-body-measurements id='back-rise' lVal=5 hVal=30 bodyPart='Back Rise' img='back-rise.jpg' desc='Position the tape vertically and place it so that it starts at the center of your back right at the wearing waistline. Pass the tape down to the crotch seam.'/>
                    
                    <div class="w-[12vw]">
                        <div>Height</div>
                        <select class="border-b-[0.2vw] w-[7vw] ">
                            <option value="select">Select</option>
                        @for ($i = 4; $i <= 6; $i++)
                            @for ($j = 0; $j <= 12; $j++)
                                <option value="{{$i}}.{{$j}}">{{$i}}'{{$j}}"</option>
                            @endfor
                        @endfor
                        </select>
                    </div>
                    
                </div>

                <div class="flex mt-[4vw] font-semibold">

                    <x-body-measurements id='waist-to-knee' lVal=1 hVal=10 bodyPart='Waist to Knee' img='waist-to-knee.jpg' desc='Start at the wearing waistline and measure down to the knee.'/>

                </div>
        </div>
        <button type="submit" class="bg-[#0074D6] text-white h-[3.5vw] w-[8.8vw] text-[1.4vw] rounded-[0.5vw] font-semibold mt-[3vw] ml-[4vw] mb-[2vw]">Submit</button>
        <button onclick="location.href='{{ asset('/') }}'" type="button" class="bg-[#0000007b] text-white h-[3.5vw] w-[8.8vw] text-[1.4vw] rounded-[0.5vw] font-semibold mt-[3vw] ml-[2vw] mb-[2vw]">Close</button>
    </div>
    </form>

    <!-- up arrow navigation -->
    <x-up-arrow-navigation/>
@endsection