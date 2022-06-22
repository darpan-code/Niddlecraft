<div class="w-[12vw]">
    <div>{{$bodyPart}}
        <a href="#" class="hover:text-black" data-bs-toggle="modal" data-bs-target="#{{$id}}"><i class="fa-solid fa-circle-info"></i></a>
    </div>
    <select class="border-b-[0.2vw] w-[7vw]" name="{{$id}}">
        <option value="">Select</option>
    @for ($i = $lVal; $i <= $hVal; $i++)
        @if ($measurementsData==$i)
            <option value="{{$i}}" selected="selected">{{$i}}</option>
        @else
            <option value="{{$i}}">{{$i}}</option>
        @endif
    @endfor
    </select>
</div>




<!-- bootstrap Modal -->

<!-- modal start -->
<div class="modal fade" id="{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content w-[63vw] h-[33vw]">
            <div class="flex justify-end">
                <button type="button" class="w-[2vw] h-[2vw] text-[1.5vw]" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mb-[1.5vw] text-[1.8vw] font-semibold ml-[2vw] mt-[1vw]">How to Measure?</div>
            
            <div class="flex">
                <div class="ml-[2vw]">
                    <img class=" w-[20vw]" src="{{ asset('images/measurement/'.$img) }}" alt="Shoulder-to-Shoulder">
                </div>
                <div class="ml-[3vw] w-[32vw]">
                    <div class="mb-[1vw] text-[1.6vw] font-semibold">{{$bodyPart}}</div>
                    <div class="text-justify text-[1.2vw]">{{$desc}}</div>
                </div> 
            </div>  
        </div>
    </div>
</div>
<!-- modal end -->