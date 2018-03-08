$(document).ready(function(){

saveHoroscope = function(){
    var bDate = $('#bDate').val();

    $.ajax({
        type: 'POST',
        url: "./addHoroscope.php",
        data: {
            bDate: bDate
          }
    })
    $.ajax({
        type: 'GET',
        url: "./viewHoroscope.php",
    })
    .done(function(data){
        $('#printedHoroscope').html(data);
    })

    
    
    
    
    
    
    
    
    
    
    
 


}
 





});