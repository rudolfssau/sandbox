
//jQuery for hiding and displaying the type switcher options.

$("#productType").change(function () {
    //visu hide
    //data tips pec krua select input field
    //pec tam visu show
    $("#dvd").hide();
    $("#furniture").hide();
    $("#book").hide();
    $("#"+$(this).val()).css({"display":"block"});
})

//hide all
//