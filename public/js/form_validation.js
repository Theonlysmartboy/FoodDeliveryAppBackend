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
    //Function to delete CATEGORY
    $(".deleteUser").click(function () {
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
    $(".deleteVendor").click(function () {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        Swal.fire({
            title: 'Are you sure you want to delete this vendor?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#28a745',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = "/admin/vendor/" + deleteFunction + "/" + id;
            }
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