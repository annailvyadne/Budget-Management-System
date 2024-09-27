@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Sinking Fund</h1>
        <form action="{{ route('funds.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fund_name">Fund Name</label>
                <input type="text" name="fund_name" id="fund_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="target_amount">Target Amount</label>
                <input type="text" name="target_amount" id="target_amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="current_amount">Current Amount</label>
                <input type="text" name="current_amount" id="current_amount" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
