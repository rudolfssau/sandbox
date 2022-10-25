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
            weigthkg: {
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
        submitHandler: function (form) {
            form.submit();
        }
    });
});


// sku: $(document.getElementById("product_sku").style.borderColor = "red"),
//     name: $(document.getElementById("product_name").style.borderColor = "red"),
//     price: $(document.getElementById("product_price").style.borderColor = "red")