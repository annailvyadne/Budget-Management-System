@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Saving</h1>
        <form action="{{ route('savings.update', $saving->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" name="amount" id="amount" value="{{ $saving->amount }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="goal_name">Goal Name</label>
                <input type="text" name="goal_name" id="goal_name" value="{{ $saving->goal_name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="goal_amount">Goal Amount</label>
                <input type="text" name="goal_amount" id="goal_amount" value="{{ $saving->goal_amount }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="saved_date">Saved Date</label>
                <input type="date" name="saved_date" id="saved_date" value="{{ $saving->saved_date }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
