$(document).ready(function(){
    firstPage();
printHoroscope();    

function firstPage(){
    $("#printedHoroscope").html("<img src='./img/bg.png' class='bgImg'> ");
    $('#horoscopeTextBox').html("");
}
function printHoroscope(){
    $.ajax({
        type: 'GET',
        url: "./viewHoroscope.php",
    })
    .done(function(data){
        if(data.length !== 0){
            var signName = '<h1>' + data + '</h1>';
            var signImg  = '<img src="./img/' + data + '.png" class="horoscopeImg">';
            var horoscopeAPI = 'http://sandipbgt.com/theastrologer/api/horoscope/' + data + '/today/';
            $('#printedHoroscope').html(signName + signImg);

            $.ajax({
                type: 'GET',
                url: horoscopeAPI,
            })
            .done(function(data){
            var horoscopeAPIdata = jQuery.parseJSON(data);
            $('#horoscopeTextBox').html(horoscopeAPIdata.horoscope);
        
        
            })
            $("#updateHoroscope").show();
            $("#deleteHoroscope").show();
            $("#saveHoroscope").hide();


        }
        else{
            $("#updateHoroscope").hide();
            $("#deleteHoroscope").hide();
            $("#saveHoroscope").show();
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
    }
    printHoroscope();
}

deleteHoroscope = function(){
    var bDate = $('#bDate').val();
    $.ajax({
        type: 'DELETE',
        url: "./deleteHoroscope.php",
    })
    printHoroscope();
    firstPage();
}


$("#bDate").keyup(function(event) {
    if (event.keyCode === 13) {
            updateHoroscope();
            saveHoroscope();
    }
});

});