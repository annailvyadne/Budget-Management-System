@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Debts</h1>
        <a href="{{ route('debts.create') }}" class="btn btn-primary mb-3">Add Debt</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Debt Name</th>
                    <th>Principal Amount</th>
                    <th>Remaining Amount</th>
                    <th>Interest Rate</th>
                    <th>Minimum Payment</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($debts as $debt)
                    <tr>
                        <td>{{ $debt->id }}</td>
                        <td>{{ $debt->debt_name }}</td>
                        <td>{{ $debt->principal_amount }}</td>
                        <td>{{ $debt->remaining_amount }}</td>
                        <td>{{ $debt->interest_rate }}%</td>
                        <td>{{ $debt->minimum_payment }}</td>
                        <td>{{ $debt->due_date }}</td>
                        <td>
                            <a href="{{ route('debts.edit', $debt->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('debts.destroy', $debt->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
