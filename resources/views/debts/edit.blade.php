@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Debt</h1>
        <form action="{{ route('debts.update', $debt->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="debt_name">Debt Name</label>
                <input type="text" name="debt_name" id="debt_name" value="{{ $debt->debt_name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="principal_amount">Principal Amount</label>
                <input type="text" name="principal_amount" id="principal_amount" value="{{ $debt->principal_amount }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="remaining_amount">Remaining Amount</label>
                <input type="text" name="remaining_amount" id="remaining_amount" value="{{ $debt->remaining_amount }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="interest_rate">Interest Rate (%)</label>
                <input type="text" name="interest_rate" id="interest_rate" value="{{ $debt->interest_rate }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="minimum_payment">Minimum Payment</label>
                <input type="text" name="minimum_payment" id="minimum_payment" value="{{ $debt->minimum_payment }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{ $debt->due_date }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
