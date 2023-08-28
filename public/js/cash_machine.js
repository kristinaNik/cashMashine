window.addEventListener('load', function () {
    $("#add_transaction").on('click', function(e) {
        e.preventDefault();

        var quantity = $("input[name=quantity]").val();
        var input = $('#type_banknotes').find(":selected").val();

        $.ajax({
            type: 'POST',
            url: "api/transaction",
            data: {
                quantity: quantity,
                inputs: input
            },
            success: function (data) {
                console.log(data);
                $('#success_message').append("Successfully added cash");
                // $( location ).attr("href", "/");
            },
            error: function (data, err) {
                alert("error in adding cash.");
            },
        });
    })
    $('#cash-transaction')[0].reset();
});
