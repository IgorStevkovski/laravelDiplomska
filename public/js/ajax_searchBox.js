/**
 * Created by Igor on 01.05.2017.
 */
$(document).ready(function () {

    //Za na pocetok da e skrieno
    if($("#back_result").val()==""){
        $("#back_result").hide();
    }
    else{
        $("#back_result").show();
    }

    //Pri sekoe vnasanje vo input poleto se proveruva dali e ima nekoj takov produkt vo baza
    $('#search').keyup(function(){
       //var key = event.keyCode || event.charCode;
      var name = $(this).val();
      var dataHandler = $('#back_result');

       if(name==""){
           $("#back_result").hide();
       }
       else{
           $("#back_result").show();
           $.ajax({
               type:"POST",
               data: "name="+name,
               url:"http://localhost/laravel-diplomska/public/get_products.php",
               success:function(result){
                   var resultObj = JSON.parse(result);
                   dataHandler.html(" ");
                   $.each(resultObj, function(key, val){

                       var product="<div><a href='"+"/laravel-diplomska/public/one-product/"+val.id+
                           "'> <img src='http://localhost/laravel-diplomska/public/"+val.imageUrl+
                           "' height='50' width='50'>&nbsp;<span>"+val.name+"</a></div>";

                       dataHandler.append(product);
                   });
               }
           });
       }

   });


});