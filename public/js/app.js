/**
 * Created by Igor on 08.05.2017.
 */
$(document).ready(function(){
    var clicked = true;

    $("#btnFilterHide").click(function(){
        if(clicked == true){
            //$("#izgledFormeID").css("display","inline-block");
            $("#izgledFormeID").removeClass("removeDisplay");
            clicked = false;
        }else{
            //$("#izgledFormeID").css("display","none");
            clicked = true;
            $("#izgledFormeID").addClass("removeDisplay");
        }

    });


    //function sliderChange(val){
    //    document.getElementById('sliderStatus').innerHTML = val;
    //}


});

