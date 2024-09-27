@extends('layouts.app')

@section('content')
<form action="{{ route('budgets.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="total_income">Total Income</label>
        <input type="text" name="total_income" id="total_income" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="total_expense">Total Expense</label>
        <input type="text" name="total_expense" id="total_expense" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="savings_goal">Savings Goal</label>
        <input type="text" name="savings_goal" id="savings_goal" class="form-control">
    </div>
    <div class="form-group">
        <label for="sinking_fund_goal">Sinking Fund Goal</label>
        <input type="text" name="sinking_fund_goal" id="sinking_fund_goal" class="form-control">
    </div>
    <div class="form-group">
        <label for="debt_payment">Debt Payment</label>
        <input type="text" name="debt_payment" id="debt_payment" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection
