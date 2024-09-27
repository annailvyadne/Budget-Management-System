@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Budget</h1>
        <form action="{{ route('budgets.update', $budget->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="total_income">Total Income</label>
                <input type="text" name="total_income" id="total_income" class="form-control" value="{{ $budget->total_income }}" required>
            </div>
            <div class="form-group">
                <label for="total_expense">Total Expense</label>
                <input type="text" name="total_expense" id="total_expense" class="form-control" value="{{ $budget->total_expense }}" required>
            </div>
            <div class="form-group">
                <label for="savings_goal">Savings Goal</label>
                <input type="text" name="savings_goal" id="savings_goal" class="form-control" value="{{ $budget->savings_goal }}">
            </div>
            <div class="form-group">
                <label for="sinking_fund_goal">Sinking Fund Goal</label>
                <input type="text" name="sinking_fund_goal" id="sinking_fund_goal" class="form-control" value="{{ $budget->sinking_fund_goal }}">
            </div>
            <div class="form-group">
                <label for="debt_payment">Debt Payment</label>
                <input type="text" name="debt_payment" id="debt_payment" class="form-control" value="{{ $budget->debt_payment }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
