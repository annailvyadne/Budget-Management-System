@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Sinking Fund</h1>
        <form action="{{ route('funds.update', $fund->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fund_name">Fund Name</label>
                <input type="text" name="fund_name" id="fund_name" value="{{ $fund->fund_name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="target_amount">Target Amount</label>
                <input type="text" name="target_amount" id="target_amount" value="{{ $fund->target_amount }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="current_amount">Current Amount</label>
                <input type="text" name="current_amount" id="current_amount" value="{{ $fund->current_amount }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{ $fund->due_date }}" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
