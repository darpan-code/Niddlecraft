$(document).ready(function () {
    // Service Option Change
    $("#service").change(function () { 
        var channgeValue = $("#service").val();
        
        switch (channgeValue) {
            case "custom tailoring for women":
                $("#service-type").html('\
                <option value="">Select</option>\
                <option value="suits">Suits</option>\
                <option value="kurti">Kurti</option>\
                <option value="gown">Gown</option>\
                <option value="blouse">Blouse</option>\
                ');
                break;

            case "custom tailoring for students":
                $("#service-type").html('\
                <option value="">Select</option>\
                <option value="full uniform">Full uniform</option>\
                <option value="shirt">Shirt</option>\
                <option value="pant">Pant</option>\
                <option value="custom uniform">Custom uniform</option>\
                ');
                break;
        
            case "other services":
                $("#service-type").html('\
                <option value="">Select</option>\
                <option value="body measurement">Body Measurement</option>\
                <option value="shorting">Shorting</option>\
                <option value="resizing">Resizing</option>\
                <option value="repair">Repair</option>\');\
                <option value="restoration">Restoration</option>\
                ');
                break;
        
            default:
                $("#service-type").html('<option value="">Select</option>');
                break;
        }
    });

    // Body Measurement show/hide 
    $("#bm-show").click(function(){
        $("#bm-body").slideDown("slow");
    });
    $("#bm-hide").click(function(){
        $("#bm-body").slideUp("slow");
    });

});