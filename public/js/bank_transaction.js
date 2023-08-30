window.addEventListener('load', function () {
    $("#add_bank_transaction").on('click', function(e) {
        e.preventDefault();

        var type_transaction = $('#bank_type_transaction').val();
        var amount = $("#bank_amount").val();
        var transfer_date = $("input[name=transfer_date]").val();
        var customer_name =  $("input[name=customer_name]").val();
        var account_number = $("input[name=account_number]").val();

        var inputs = {
            amount: amount,
            customer_name:  customer_name,
            account_number: account_number,
            transfer_date: transfer_date,
        };

        $.ajax({
            type: 'POST',
            url: "api/transaction",
            data: {
                type: type_transaction,
                inputs: inputs
            },
            success: function (data) {
                window.location.href = '/home';
            },
            error: function (data, err) {
                $('#bank_error_message').append(data.responseText);
            },
        });
    })
});
