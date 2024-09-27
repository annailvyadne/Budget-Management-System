@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sinking Funds</h1>
        <a href="{{ route('funds.create') }}" class="btn btn-primary mb-3">Add Sinking Fund</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fund Name</th>
                    <th>Target Amount</th>
                    <th>Current Amount</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($funds as $fund)
                    <tr>
                        <td>{{ $fund->id }}</td>
                        <td>{{ $fund->fund_name }}</td>
                        <td>{{ $fund->target_amount }}</td>
                        <td>{{ $fund->current_amount }}</td>
                        <td>{{ $fund->due_date }}</td>
                        <td>
                            <a href="{{ route('funds.edit', $fund->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('funds.destroy', $fund->id) }}" method="POST" class="d-inline">
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
