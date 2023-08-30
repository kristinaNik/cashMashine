@section('card')
    <div class="container">
        <h1>Credit Card Transaction form: </h1>
        <form id="card-transaction">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label> Add amount
                            <input type="text" id="card_amount" name="amount" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label> Add Card number
                            <input type="number" name="card_number" class="form-control" maxlength="16">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Card Expiry:
                            <input class="form-control" name="exp_date" type="text" placeholder="m/Y"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Card Holder:
                            <input type="text" name="card_holder" class="form-control" />
                        </label>
                    </div>
                    <div class="form-group">
                        <label> CVV
                            <input type="number" name="cvv" autocomplete="off" placeholder="123" maxlength="3" class="form-control" pattern="[0-9]*" inputmode="numerical" />
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" id="card_type_transaction" value="card">
            <button type="submit" id="add_card_transaction" class="btn btn-primary">Submit</button>
            <p class="text-error" id="card_error_message"></p>
        </form>

      <br>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="js/card_transaction.js"></script>
@endsection
