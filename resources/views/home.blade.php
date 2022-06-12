@extends('layout.main')

@push('title')
    Niddlecraft
@endpush

@section('body')
    <!-- nav-bar section -->
    <x-nav-bar userType='User' loginStatus='No'/>

    <!-- home section -->
    <div class="flex justify-around items-center mt-[6vw] h-[36vw]">
        <div class="w-[35vw] ml-[4vw]">
            <div class="text-[5vw] font-medium normal-case">Individuality of your Style</div>
            <div class="text-[2vw] pr-[8vw] normal-case pt-[1vw] text-[#5E5454]">Discover new way to create your own style.</div>
            <a href="{{ route('user-appointment') }}" class="bg-[#0074D6] text-white mt-[2vw] w-[12vw] h-[4vw] rounded-[.5vw] text-[2vw] flex justify-center items-center">Book Now</a>
        </div>
        <div>
            <img class="w-[40vw]" src="{{ asset('images/vectors/home-img.png') }}" alt="home image">
        </div>
    </div>

    <!-- mouse scroll animation section -->
    <div class="icon-scroll"></div>
    
    <!-- service section -->
    <section id="service">
    <div class="pt-[8vw] mt-[6vw] flex items-center flex-col">
        <div class="text-[2.7vw] font-semibold">What we offer to our clients</div>
        <div class="text-[1.3vw] w-[50vw] text-center mt-[1.3vw] text-[#5E5454]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident excepturi iure totam consequuntur asperiores corporis debitis nisi quis accusantium dolor.</div>
        <div class="flex justify-between w-[80vw] mt-[5vw]">
        
            <!-- custom design section -->            
            <div class="w-[38.5vw] h-[22vw] service-box flex flex-col items-center justify-center">
                <div class="text-[4vw] uppercase">custom design</div>
                <div class="text-[1.7vw] py-[1vw] px-[2vw] text-center text-[#5E5454]">Fashion that exists in everything. Express the Fashion Love it.</div>
                <a href="{{ route('user-appointment') }}" class="bg-[#0074D6] text-white mt-[1vw] w-[14vw] h-[4vw] rounded-[.7vw] text-[2vw] capitalize flex justify-center items-center">appointment</a>
            </div>

            <!-- tailor's design section -->
            <div class="w-[38.5vw] h-[22vw] service-box flex flex-col items-center justify-center">
                <div class="text-[4vw] uppercase">tailor's design</div>
                <div class="text-[1.7vw] py-[1vw] px-[2vw] text-center text-[#5E5454]">Bringing You the Elements of Style Enhancing your inner beauty.</div>
                <a href="#" class="bg-[#0074D6] text-white mt-[1vw] w-[14vw] h-[4vw] rounded-[.7vw] text-[2vw] capitalize flex justify-center items-center">explore now</a>
            </div>
        </div>
    </div>
    </section>

    <!-- our tailors section -->
    <section id="our-tailor">
    <div class="pt-[8vw] mt-[6vw] flex items-center flex-col">
        <div class="text-[2.7vw] font-semibold">Our Tailors</div>
        <hr class="w-[9vw]">

        <div class="flex justify-between w-[80vw]">
        <!-- tailor 1 -->
        <div class="flex flex-col items-center justify-center mt-[4vw]">
            <div class="w-[20vw] h-[20vw] rounded-full overflow-hidden">
                <img class="h-[20vw] object-cover" src="{{ asset('images/tailor/tailor1.jpg') }}" alt="Tailor 1">
            </div>
            <div class="text-[1.7vw] mt-[1vw] text-[#5E5454]">Master Tailor</div>
            <div class="text-[2.5vw] font-bold">Meghna Roy</div>
            <div class="flex justify-between w-[8vw] text-[2vw]">
                <div><a href="#" class="hover:text-[#4267B2]"><i class="fa-brands fa-facebook"></i></a></div>
                <div><a href="#" class="hover:text-[#00acee]"><i class="fa-brands fa-twitter"></i></a></div>
                <div><a href="#" class="hover:text-[#bc2a8d]"><i class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>

        <!-- tailor 2 -->
        <div class="flex flex-col items-center justify-center mt-[4vw]">
            <div class="w-[20vw] h-[20vw]">
                <img class="h-[20vw] object-cover rounded-full" src="{{ asset('images/tailor/tailor2.jpg') }}" alt="Tailor 1">
            </div>
            <div class="text-[1.7vw] mt-[1vw] text-[#5E5454]">Tailor</div>
            <div class="text-[2.5vw] font-bold">Aabha Kumari</div>
            <div class="flex justify-between w-[8vw] text-[2vw]">
                <div><a href="#" class="hover:text-[#4267B2]"><i class="fa-brands fa-facebook"></i></a></div>
                <div><a href="#" class="hover:text-[#00acee]"><i class="fa-brands fa-twitter"></i></a></div>
                <div><a href="#" class="hover:text-[#bc2a8d]"><i class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>

        <!-- tailor 3 -->
        <div class="flex flex-col items-center justify-center mt-[4vw]">
            <div class="w-[20vw] h-[20vw]">
                <img class="h-[20vw] object-cover rounded-full" src="{{ asset('images/tailor/tailor3.jpg') }}" alt="Tailor 1">
            </div>
            <div class="text-[1.7vw] mt-[1vw] text-[#5E5454]">Tailor</div>
            <div class="text-[2.5vw] font-bold">Zoya Parveen</div>
            <div class="flex justify-between w-[8vw] text-[2vw]">
                <div><a href="#" class="hover:text-[#4267B2]"><i class="fa-brands fa-facebook"></i></a></div>
                <div><a href="#" class="hover:text-[#00acee]"><i class="fa-brands fa-twitter"></i></a></div>
                <div><a href="#" class="hover:text-[#bc2a8d]"><i class="fa-brands fa-instagram"></i></a></div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- testimonials section -->
    <!-- head -->
    <div class="flex flex-col items-center testimonial-head">
        <div class="text-[1.3vw] uppercase font-semibold">what people says</div>
        <div class="font-['Lobster'] text-[5vw]">Testimonials</div>
    </div>

    <!-- body -->
    <!-- <div class="flex justify-evenly items-end mt-[14vw]">
        <div class="w-[31vw] h-[31vw] rounded-full bg-[#e7dfdf3a] overflow-hidden">
            <img class="w-[31vw]" src="images/customer/cust1.png" alt="Customer 1">
        </div>
        <div>
            <div class="font-['Lobster'] text-[18vw] absolute right-[53vw] top-[160vw]">“</div>
            <div class="font-['Satisfy'] text-[2.3vw] w-[50vw] text-center">
                It is the accuracy and detail inherent in crafted goods that endows them with lasting value. It is the time and attention paid by the carpenter, the seamstress and the tailor that makes this detail possible.
            </div>
            <div class="font-['Italianno'] text-[3.5vw] font-medium text-right pr-[5vw]"> - Megha Sen</div>
        </div>
    </div> -->

        <!-- carousel start -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
            <!-- items -->
            @foreach ($testimonial as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="flex justify-evenly items-end mt-[14vw]">
                        <div class="w-[31vw] h-[31vw] rounded-full bg-[#e7dfdf3a] overflow-hidden">

                        @if ($item->img)
                            <img class="w-[31vw]" src="{{ asset('storage/'. $item->img ) }}" alt="Customer 1">
                        @else
                            <img src="{{ asset('images/customer/demoUser.jpg') }}" alt="User profile">
                        @endif
                        </div>
                        <div>
                            <div class="font-['Lobster'] text-[18vw] absolute right-[53vw] top-[160vw]">“</div>
                            <div class="font-['Satisfy'] text-[2.3vw] w-[50vw] text-center">
                                {{ $item->message }}
                            </div>
                            <div class="font-['Italianno'] text-[3.5vw] font-medium text-right pr-[5vw]"> - {{ $item->name }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
        </div>


    <!-- contact section -->
    <section id="contact">
    <div class="pt-[8vw] mt-[6vw] flex justify-center">
        <div class="flex contact-box rounded-[1vw]">
            <!-- side-bar -->
            <div class="w-[32vw] h-[44vw] bg-[#24717B] text-white rounded-[1vw]">
                <div class="text-center pt-[1.2vw]">
                    <div class="text-[2.5vw] font-medium">Contact details</div>
                    <div class="text-[1.1vw] px-[4vw]">We are ready to help you, and we are open for your suggestions.</div>
                </div>
                <div class="flex flex-col items-center h-[20vw] font-semibold justify-around">
                    <div class="w-[28vw] flex items-center text-[1.3vw]">
                        <i class="fa-solid fa-map-location-dot text-[2.7vw] mr-[1.5vw]"></i>
                        Grand Trunk Road Near Khadina More, Dharampur, Chinsurah R S, Chinsurah, West Bengal-712101.
                    </div>
                    <div class="w-[26vw] flex items-center text-[1.4vw]">
                        <i class="fa-solid fa-square-phone text-[2.7vw] mr-[1.5vw]"></i>033 789456/+917788996655
                    </div>
                    <div class="w-[26vw] flex items-center text-[1.5vw]">
                        <i class="fa-solid fa-envelope-open-text text-[2.7vw] mr-[1.5vw]"></i>contact@niddlecraft.com
                    </div>
                </div>
                <div class="flex justify-center">
                    <iframe class="w-[28vw] h-[14vw] rounded-[1vw]"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14702.36117166882!2d88.3817298!3d22.8915885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe94a8f21ca53259a!2sTechno%20India%20Hooghly!5e0!3m2!1sen!2sin!4v1649606486476!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Contact Form section -->
            <x-contact-us/>
        </div>
    </div>
    </section>


    <!-- footer section -->

    <footer class="bg-[#121212] h-[28vw] mt-[14vw] text-white capitalize flex flex-col items-center">
        <div class="text-[4vw] mt-[5vw] font-medium">Niddlecraft</div>
        <div class="flex justify-between w-[38vw] text-[1.6vw] mt-[1vw]">
            <div><a href="#" class="hover:text-white"> home </a></div>
            <div><a href="#service" class="hover:text-white"> services </a></div>
            <div><a href="#our-tailor" class="hover:text-white"> our tailors </a></div>
            <div><a href="#contact" class="hover:text-white"> contact </a></div>
        </div>
        <div class="flex justify-between w-[10vw] text-[2.3vw] mt-[2vw]">
            <div><a href="#" class="hover:text-white"><i class="fa-brands fa-facebook"></i></a></div>
            <div><a href="#" class="hover:text-white"><i class="fa-brands fa-twitter"></i></a></div>
            <div><a href="#" class="hover:text-white"><i class="fa-brands fa-instagram"></i></a></div>
        </div>
        <div class="text-[1.2vw] text-[#ffffff85] mt-[5vw]">
            Copyright ©2022 All rights reserved | This website is made by <a class="text-white" href="{{ route('admin-login') }}" target="_blank">Niddlecraft.</a>
        </div>
    </footer>

    <!-- up arrow navigation -->
    <x-up-arrow-navigation/>
@endsection