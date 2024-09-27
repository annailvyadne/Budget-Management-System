@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Saving</h1>
        <form action="{{ route('savings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="goal_name">Goal Name</label>
                <input type="text" name="goal_name" id="goal_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="goal_amount">Goal Amount</label>
                <input type="text" name="goal_amount" id="goal_amount" class="form-control">
            </div>
            <div class="form-group">
                <label for="saved_date">Saved Date</label>
                <input type="date" name="saved_date" id="saved_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
