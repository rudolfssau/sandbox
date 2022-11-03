$("#productType").change(function () {
    $("#dvd").hide();
    $("#furniture").hide();
    $("#book").hide();
    $("#"+$(this).val()).css({"display":"block"});
})
$(function() {
    $("form[name='product_form']").validate({
        rules: {
            sku: "required",
            name: "required",
            price: "required",
            switcher: "required",
            sizemb: {
                required: function () {
                    return $("#productType").val() == "dvd";
                }
            },
            heightcm: {
                required: function () {
                    return $("#productType").val() == "furniture";
                }
            },
            widthcm: {
                required: function () {
                    return $("#productType").val() == "furniture";
                }
            },
            lengthcm: {
                required: function () {
                    return $("#productType").val() == "furniture";
                }
            },
            weightkg: {
                required: function () {
                    return $("#productType").val() == "book";
                }
            }
        },
        highlight: function (element) {
            $(element).addClass('input-validation-error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input-validation-error');
        },
        errorPlacement: function () {
            return false;
        },
        // submitHandler: function (form) {
        //     form.submit();
        // }
    });
});