@extends('layouts/master')

@section('title')
    Cash Machine
@endsection
@section('content')

    <div class="container">
        <div class="row"><p class="">Cash Transaction Form: </p> </div>
        <form id="cash-transaction">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label>Add Quantity</label>
                        <input type="number" name="quantity" class="form-control">

                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">

                        <label>Banknotes</label>

                            <select class="form-control" id="type_banknotes">
                                <option>Select Banknote</option>
                                <option value="1">1</option>
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>

                    </div>
                </div>
                <button type="submit" id="add_transaction" class="btn btn-primary">Submit</button>
                <a href=""><input type="button"  class="btn btn-default" value="Go Home"></a>
            </div>
        </form>
        <br/>
        <p class="text-success" id="success_message"></p>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="js/cash_machine.js"></script>
@endsection
