@extends('layouts/master')

@section('title')
    Cash Machine
@endsection

@include('cash_transaction')
@include('card_transaction')

<div class="container">
    <a href="{{route('home')}}"><input type="button"  class="btn btn-default" value="Show Transactions"></a>
</div>

