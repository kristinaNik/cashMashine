@extends('layouts/master')

@section('title')
    Cash Machine
@endsection
@section('content')

    <div class="container">
        <h1>Cash Transaction form: </h1>
        <form id="cash-transaction">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label> Add Quantity
                        <input type="number" id="quantity_0" name="quantity" class="form-control">
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
                        <input type="number" id="quantity_1" name="quantity" class="form-control">
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
                        <input type="number" id="quantity_2" name="quantity" class="form-control">
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
                        <input type="number" id="quantity_3" name="quantity" class="form-control">
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
                        <input type="number" id="quantity_4" name="quantity" class="form-control">
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
            <button type="submit" id="add_transaction" class="btn btn-primary">Submit</button>
            <a href=""><input type="button"  class="btn btn-default" value="Go Home"></a>
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
