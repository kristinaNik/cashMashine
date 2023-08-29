@extends('layouts/master')
@section('title')
   Cash Machine
@endsection
@section('content')

    <div class="container">

        <h2 class="header_name"><span class="dashboard_name">Home</span></h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Inputs</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transactions as $transaction)
            <tr>

                <td>{{$transaction->id}}</td>
                <td>{{$transaction->total_amount}}</td>
                <td>{{$transaction->inputs}}</td>

            </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <hr>
        <h3>Grand total: {{$sumTotal}}</h3>
        <a href="{{route('add_transaction')}}"><input type="button"  class="btn btn-default" value="Go Home"></a>
    </div>
@endsection
