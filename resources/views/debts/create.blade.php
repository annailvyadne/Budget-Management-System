@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Debt</h1>
        <form action="{{ route('debts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="debt_name">Debt Name</label>
                <input type="text" name="debt_name" id="debt_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="principal_amount">Principal Amount</label>
                <input type="text" name="principal_amount" id="principal_amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="remaining_amount">Remaining Amount</label>
                <input type="text" name="remaining_amount" id="remaining_amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="interest_rate">Interest Rate (%)</label>
                <input type="text" name="interest_rate" id="interest_rate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="minimum_payment">Minimum Payment</label>
                <input type="text" name="minimum_payment" id="minimum_payment" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
