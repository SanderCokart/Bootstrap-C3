//initialize tooltips
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});

//inputFields
var nameField = $("#name");
var addressField = $("#address");
var submit = $("#submit");

// regex
var nameRegex = "^[a-zA-Z ,.'-]+$";
var addressRegex = "^[a-zA-Z]+ ?[a-zA-Z]+ [0-9]+$"

// check if all validated
$("#submit").click(function(event) {
    if (nameField.val().match(nameRegex) && addressField.val().match(addressRegex)) {
        $("#invalid").hide();
        $("#valid").show();
    } else {
        $("#valid").hide();
        $("#invalid").show();
    }
});

$("#submitted").click(function(event) {
    $("#valid").hide();
    $("#submit-sent").show();
});
