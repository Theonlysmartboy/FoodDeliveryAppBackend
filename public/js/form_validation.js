$(document).ready(function () {
    $("#new_pwd").click(function () {
        var current_pwd = $("#current_pwd").val();
        $.ajax({
            type: 'get',
            url: '/admin/check-pwd',
            data: {current_pwd: current_pwd},
            success: function (resp) {
                if (resp === "false") {
                    $("#chkPwd").html("<font color='red' size='5'>&#10005;</font>");
                } else if (resp === "true") {
                    $("#chkPwd").html("<font color='green' size='6'>&#10003;</font>");
                }
            }, error: function () {
                alert("error");
            }
        });
    });
    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();

    $('select').select2();

    // Form Validation
    $("#basic_validate").validate({
        rules: {
            required: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            date: {
                required: true,
                date: true
            },
            url: {
                required: true,
                url: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    // Add category form Validation
    $("#add_category").validate({
        rules: {
            category_name: {
                required: true
            },
            description: {
                required: true
            },
            url: {
                required: true,
                url: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    // Edit category form Validation
    $("#edit_category").validate({
        rules: {
            category_name: {
                required: true
            },
            description: {
                required: true
            },
            url: {
                required: true,
                number: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    // add product form Validation
    $("#add_product").validate({
        rules: {
            product_name: {
                required: true
            },
            product_code: {
                required: true
            },
            product_color: {
                required: true
            },
            product_cost: {
                required: true,
                number: true
            },
            product_image: {
                required: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    // edit product form Validation
    $("#edit_product").validate({
        rules: {
            product_name: {
                required: true
            },
            product_code: {
                required: true
            },
            product_color: {
                required: true,
                number: true
            },
            product_desc: {
                required: true,
                email: true
            },
            product_cost: {
                required: true
            },
            product_town: {
                required: true
            },
            product_town_code: {
                required: true

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    $("#edit_account").validate({
        rules: {
            product_name: {
                required: true
            },
            product_code: {
                required: true
            },
            product_town: {
                required: true
            },
            product_town_code: {
                required: true

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
      $("#add_payment").validate({
        rules: {
            product_name: {
                required: true
            },
            product_code: {
                required: true
            },
            product_town: {
                required: true,
                number:true
            },
            product_town_code: {
                required: true,
                number:true

            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    $("#number_validate").validate({
        rules: {
            min: {
                required: true,
                min: 10
            },
            max: {
                required: true,
                max: 24
            },
            number: {
                required: true,
                number: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    $("#password_validate").validate({
        rules: {
            current_pwd: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            new_pwd: {
                required: true,
                minlength: 6,
                maxlength: 20
            },
            confirm_pwd: {
                required: true,
                minlength: 6,
                maxlength: 20,
                equalTo: "#new_pwd"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    //Function to delete CATEGORY
    $(".deleteCategory").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this category?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
    //Function to delete Booking
    $(".deleteBooking").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this Booking?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
    $(".deleteClient").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this Client?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
    $(".deleteAccount").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this Account?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
    $(".deletePayment").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this Charge?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
       $(".deleteService").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
            title: "Are you sure You want to delete this Service?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF0000",
            cancelButtonColor: "#87CEFA",
            confirmButtonText: "Yes, delete it!"
        },
                function () {
                    window.location.href = "/admin/" + deleteFunction + "/" + id;
                });
    });
    $("#autoclose").fadeTo(5000, 500).slideUp(500, function () {
        $("#autoclose").slideUp(500);
    });
});