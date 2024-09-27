@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Income</h1>
        <form action="{{ route('incomes.update', $income->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" value="{{ $income->amount }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="source">Source</label>
                <input type="text" name="source" id="source" value="{{ $income->source }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="income_date">Income Date</label>
                <input type="date" name="income_date" id="income_date" value="{{ $income->income_date }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
