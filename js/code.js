/* DATE PICKER*/

 $(function() {
    $( "#datepicker" ).datepicker();
    
      $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  
  });

//--------------



var list = [];
var sort = list.sort();
$('.unity').click(function (ev) {
    ev.preventDefault();
    // Get the Ticket ID
    var status = $(this).attr('id');
    
    // Remove duplicated enteries
    b = removeDuplicates(list);
    
    // Condition to add and/or remove tickect from Array
    if(b.indexOf(status) !== -1) {
        
        // Change the ticket stat to selected
        $( this ).toggleClass( 'selected' );
        
        //Remove unselected ticket from array
        list.splice(list.indexOf(status), 1);
        
        // Verify and remove duplicated entry
        b = removeDuplicates(b);

        console.log(list);
    }
    else{
        // Change the ticket stat to unselected
        $( this ).toggleClass( 'selected' );
        
        //Send the selected ticket to array
        list.push(status);
        
        // Verify and remove duplicated entry
        b = removeDuplicates(list);
        console.log(list);
    };
});


// Check-ou button
$('span#send').click(function () { 
    console.log("final: "+list);
});

function removeDuplicates(arr){
    var i,
        len = arr.length,
        out = [];
        obj = {};
        
    for (i= 0 ; i < len ; i++){
        obj[arr[i]] = 0;
    }
    for (i in obj){
        out.push(i);
    }
    return out;
    
}


// trick to 'Array.prototype.indexOf' works on IE
if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length >>> 0;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}


// set the date we're counting down to
var target_date = new Date(endDate).getTime();
//console.log('Expiration date: '+ endDate);
//var target_date = new Date("2014-01-10 15:53").getTime();

// variables for time units
var days, hours, minutes, seconds;
 
// get tag element
var countdown = document.getElementById("countdown");
 
// update the tag with id "countdown" every 1 second
var contador = setInterval(function () {
 
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     
    // format countdown string + set tag value
    countdown.innerHTML = days + " dias, " + hours + "h "
    + minutes + "m " + seconds + "s";  
    
    
    if( days <= 1 ){
        $("#countdown" ).addClass( 'red' );
        //console.log("red");
    }
    if( days >= 2 ){
        $("#countdown" ).addClass( 'green' );
        //console.log("green");
    }
    if( days  <= 0 && hours  <= 0 && minutes  <= 0 && seconds <= 0 ){
        alert("timeout!");
        clearInterval(contador);
    }
    
}, 1000);

/*
// set the date we're counting down to
var target_date = new Date("Aug 15, 2019").getTime();
 
// variables for time units
var days, hours, minutes, seconds;
 
// get tag element
var countdown = document.getElementById("countdown");
 
// update the tag with id "countdown" every 1 second
setInterval(function () {
 
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     
    // format countdown string + set tag value
    countdown.innerHTML = days + "d, " + hours + "h, "
    + minutes + "m, " + seconds + "s";  
 
}, 1000);


*/
