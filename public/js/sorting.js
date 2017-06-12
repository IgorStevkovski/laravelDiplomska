/**
 * Created by Igor on 28.04.2017.
 */
$(document).ready(function(){

    $('#sortOptions').change(function () {
       var option = $('#sortOptions').val();
       var values = option.split(' ');
        var by = values[0];
        var order = values[1];

        $.ajax({
            type: "post",
            url: "laravel-diplomska/public/sorted-products",
            data:{by:by, order:order},
            success:function(data){
                alert(data);
            }
        });
   });
});