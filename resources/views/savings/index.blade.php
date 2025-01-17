@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Savings</h1>
        <a href="{{ route('savings.create') }}" class="btn btn-primary mb-3">Add Saving</a>

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
                    <th>Goal Name</th>
                    <th>Goal Amount</th>
                    <th>Saved Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($savings as $saving)
                    <tr>
                        <td>{{ $saving->id }}</td>
                        <td>{{ $saving->amount }}</td>
                        <td>{{ $saving->goal_name ?? 'N/A' }}</td>
                        <td>{{ $saving->goal_amount ?? 'N/A' }}</td>
                        <td>{{ $saving->saved_date }}</td>
                        <td>
                            <a href="{{ route('savings.edit', $saving->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('savings.destroy', $saving->id) }}" method="POST" class="d-inline">
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
