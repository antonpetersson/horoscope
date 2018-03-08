$(document).ready(function(){

printHoroscope();    

function printHoroscope(){
    $.ajax({
        type: 'GET',
        url: "./viewHoroscope.php",
    })
    .done(function(data){
        $('#printedHoroscope').html(data);
    })
}

saveHoroscope = function(){
    var bDate = $('#bDate').val();
    if(bDate !== ""){
        $.ajax({
            type: 'POST',
            url: "./addHoroscope.php",
            data: {bDate: bDate}
        })
        .done(function(data){
            $('#trueFalseCheck').append(data);
        })
    }
    printHoroscope();
}

updateHoroscope = function(){
    var bDate = $('#bDate').val();
    if(bDate !== ""){
        $.ajax({
            type: 'PUT',
            url: "./updateHoroscope.php",
            data: {bDate: bDate}
        })
        .done(function(data){
            $('#trueFalseCheck').append(data);
        })
    }
    printHoroscope();
}

deleteHoroscope = function(){
    var bDate = $('#bDate').val();
    $.ajax({
        type: 'DELETE',
        url: "./deleteHoroscope.php",
    })
    .done(function(data){
        $('#trueFalseCheck').append(data);
    })
    printHoroscope();
}



});