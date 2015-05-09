//interests.js
//Requires jquery..
$(document).ready(function(){
    $("#btn_save_interests").click(function(){
        var x = $(".cb_interest");
        //var x = $( "input:checkbox:checked" ).val();
        //alert($("#w3s").attr("href"));
        //alert(x[0].value);
        var s = ",";
        for(var i=0; i<x.length; i++){
           if (x[i].checked){
             //console.log(x[i].value);
             s = s + x[i].value + ",";
             //console.log(s);
           }
        }
        console.log(s)
        var oktosend = false;
        if (s==","){
          alert("You have not selected any interests!");
        }else{
          oktosend = confirm("Sending to database...");
        }
        if (oktosend){
            //send to server
            $.ajax({url: "save_interests.php", 
            type: "POST", 
            data: {'interests': s}, 
            success: function(result){
                $("#status_div").html(result);
            }});
        }
    });
});
