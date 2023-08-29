window.addEventListener('load', function () {
    $("#add_transaction").on('click', function(e) {
        e.preventDefault();

        var addInputs = [];

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