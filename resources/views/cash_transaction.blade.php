@section('cash')
    <div class="container">
        <h1>Cash Transaction form: </h1>
        <form id="cash-transaction">
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add Quantity
                            <input type="number" id="quantity_0" name="quantity" class="form-control" min="0">
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> Banknote
                            <input type="number" id="id_0" name="banknote" class="form-control"  value="1" readonly="readonly">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add Quantity
                            <input type="number" id="quantity_1" name="quantity" class="form-control" min="0">
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> Banknote
                            <input type="number" id="id_1" name="banknote" class="form-control"  value="5" readonly="readonly">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add Quantity
                            <input type="number" id="quantity_2" name="quantity" class="form-control" min="0">
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> Banknote
                            <input type="number" id="id_2" name="banknote" class="form-control"  value="10" readonly="readonly">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add Quantity
                            <input type="number" id="quantity_3" name="quantity" class="form-control" min="0">
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> Banknote
                            <input type="number" id="id_3"  name="banknote" class="form-control"  value="50" readonly="readonly">
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Add Quantity
                            <input type="number" id="quantity_4" name="quantity" class="form-control" min="0">
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label> Banknote
                            <input type="number" id="id_4" name="banknote" class="form-control"  value="100" readonly="readonly">
                        </label>
                    </div>
                </div>
            </div>
            <input type="hidden" id="cash_type_transaction" value="cash">
            <button type="submit" id="add_cash_transaction" class="btn btn-primary">Submit</button>
            <p class="text-error" id="cash_error_message"></p>
        </form>
        <br/>
    </div>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script src="js/cash_transaction.js"></script>
@endsection
