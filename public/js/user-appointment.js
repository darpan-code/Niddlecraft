$(document).ready(function () {
    // Service Option Change
    $("#service").change(function () { 
        var channgeValue = $("#service").val();
        
        switch (channgeValue) {
            case "C.T.W":
                $("#service-type").html('\
                <option value="" selected>Select</option>\
                <option value="Suits">Suits</option>\
                <option value="Kurti">Kurti</option>\
                <option value="Gown">Gown</option>\
                <option value="Blouse">Blouse</option>\
                ');
                break;

            case "C.T.S":
                $("#service-type").html('\
                <option value="" selected>Select</option>\
                <option value="Full Uniform">Full uniform</option>\
                <option value="Shirt">Shirt</option>\
                <option value="Pant">Pant</option>\
                <option value="Custom Uniform">Custom uniform</option>\
                ');
                break;
        
            case "O.S":
                $("#service-type").html('\
                <option value="" selected>Select</option>\
                <option value="Body Measurement">Body Measurement</option>\
                <option value="Shorting">Shorting</option>\
                <option value="Resizing">Resizing</option>\
                <option value="Repair">Repair</option>\');\
                <option value="Restoration">Restoration</option>\
                ');
                break;
        
            default:
                $("#service-type").html('<option value="" selected>Select</option>');
                break;
        }
    });


    // Body Measurement show/hide 
    // $("#bm-show").click(function(){
    //     $("#bm-body").slideDown("slow");
    // });
    // $("#bm-hide").click(function(){
    //     $("#bm-body").slideUp("slow");
    // });

});