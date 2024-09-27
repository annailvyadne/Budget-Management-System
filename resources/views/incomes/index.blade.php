@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Incomes</h1>
        <a href="{{ route('incomes.create') }}" class="btn btn-primary mb-3">Add Income</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Source</th>
                    <th>Income Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incomes as $income)
                    <tr>
                        <td>{{ $income->id }}</td>
                        <td>{{ $income->amount }}</td>
                        <td>{{ $income->source ?? 'N/A' }}</td>
                        <td>{{ $income->income_date }}</td>
                        <td>
                            <a href="{{ route('incomes.edit', $income->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('incomes.destroy', $income->id) }}" method="POST" class="d-inline">
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
