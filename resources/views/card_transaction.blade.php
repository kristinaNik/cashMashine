@section('card')
    <div class="container">
        <h1>Credit Card Transaction form: </h1>
        <form id="card-transaction">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add amount
                            <input type="number" name="amount" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label> Add Card number
                            <input type="number" name="card_number" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Card Expiry:
                            <input class="form-control" name="exp_date" type="month" >
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Card Holder:
                            <input type="text" name="card_holder" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label> CVV
                            <input type="number"
                                   name="cvv"
                                   placeholder="123"
                                   style="width: 50px"
                                   maxlength="3"
                                   class="form-control"
                            >
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" id="card_type_transaction" value="card">
            <button type="submit" id="add_card_transaction" class="btn btn-primary">Submit</button>
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
