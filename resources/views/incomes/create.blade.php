@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Income</h1>
        <form action="{{ route('incomes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="source">Source</label>
                <input type="text" name="source" id="source" class="form-control">
            </div>
            <div class="form-group">
                <label for="income_date">Income Date</label>
                <input type="date" name="income_date" id="income_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
