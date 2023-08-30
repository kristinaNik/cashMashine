@section('bank')
    <div class="container">
        <h1>Bank Transfer form: </h1>
        <form id="card-transaction">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label> Add amount
                            <input type="text" id="bank_amount" name="amount" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label> Transfer_date
                            <input type="date" name="transfer_date" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Account number
                            <input class="form-control" name="account_number" type="text"/>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Customer Name:
                            <input type="text" name="customer_name" class="form-control" />
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" id="bank_type_transaction" value="bank">
            <button type="submit" id="add_bank_transaction" class="btn btn-primary">Submit</button>
            <p class="text-error" id="bank_error_message"></p>
        </form>

      <br>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="js/bank_transaction.js"></script>
@endsection
