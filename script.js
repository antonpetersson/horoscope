$(document).ready(function(){

printHoroscope();    

function printHoroscope(){
    $.ajax({
        type: 'GET',
        url: "./viewHoroscope.php",
    })
    .done(function(data){
        if(data.length !== 0){
            var signName = '<h1>' + data + '</h1>';
            var signImg  = '<img src="./img/' + data + '.png">';
            var horoscopeAPI = 'http://sandipbgt.com/theastrologer/api/horoscope/' + data + '/today/';
            $('#printedHoroscope').html(signName + signImg);

            $.ajax({
                type: 'GET',
                url: horoscopeAPI,
            })
            .done(function(data){
            var horoscopeAPIdata = jQuery.parseJSON(data);
            console.log(horoscopeAPIdata.horoscope);
            $('#horoscopeTextBox').html(horoscopeAPIdata.horoscope);
        
        
            })



        }



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

            $("#updateHoroscope").show();
            $("#deleteHoroscope").show();
            $("#saveHoroscope").hide();
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

        $("#updateHoroscope").hide();
        $("#deleteHoroscope").hide();
        $("#saveHoroscope").show();
    })
    printHoroscope();
}



});