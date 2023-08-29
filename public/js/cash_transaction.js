window.addEventListener('load', function () {
    $("#add_cash_transaction").on('click', function(e) {
        e.preventDefault();

        var addInputs = [];
        var type_transaction = $('#cash_type_transaction').val();

        $("input[name*=quantity]").each(function(index,elementQuantity) {
            var quantity = elementQuantity.value;
            var banknote = $('#id_' + index).val();

            addInputs.push({
                quantity: quantity,
                banknote:  banknote
            });
        })

        $.ajax({
            type: 'POST',
            url: "api/transaction",
            data: {
                type: type_transaction,
                inputs: addInputs
            },
            success: function (data) {
                window.location.href = '/home';
              //  $('#success_message').append("Successfully added cash");
                // $( location ).attr("href", "/");
            },
            error: function (data, err) {
                alert("error in adding cash.");
            },
        });
    })
    $('#cash-transaction')[0].reset();
});
