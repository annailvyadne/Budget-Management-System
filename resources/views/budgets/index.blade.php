@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Budgets</h1>
        <a href="{{ route('budgets.create') }}" class="btn btn-primary mb-3">Add Budget</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total Income</th>
                    <th>Total Expense</th>
                    <th>Savings Goal</th>
                    <th>Sinking Fund Goal</th>
                    <th>Debt Payment</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($budgets as $budget)
                    <tr>
                        <td>{{ $budget->id }}</td>
                        <td>{{ $budget->total_income }}</td>
                        <td>{{ $budget->total_expense }}</td>
                        <td>{{ $budget->savings_goal ?? 'N/A' }}</td>
                        <td>{{ $budget->sinking_fund_goal ?? 'N/A' }}</td>
                        <td>{{ $budget->debt_payment ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('budgets.edit', $budget->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('budgets.destroy', $budget->id) }}" method="POST" class="d-inline">
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
