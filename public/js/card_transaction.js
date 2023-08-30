window.addEventListener('load', function () {
    $("#add_card_transaction").on('click', function(e) {
        e.preventDefault();

        var type_transaction = $('#card_type_transaction').val();
        var amount = $("input[name=amount]").val();
        var card_number =  $("input[name=card_number]").val();
        var exp_date = $("input[name=exp_date]").val();
       alert(exp_date);
        var card_holder =  $("input[name=card_holder]").val();
        var cvv =  $("input[name=cvv]").val();

        var inputs = {
            amount: amount,
            card_number:  card_number,
            expiration_date: exp_date,
            card_holder: card_holder,
            cvv: parseInt(cvv)
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
                $('#error_message').append(data.responseText);
            },
        });
    })
    $('#cash-transaction')[0].reset();
});
