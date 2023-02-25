@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Drugs</h1>

        <form action="{{ route('drugs.index') }}" method="GET">
            <div class="form-group">
                <label for="search_query">Search Query:</label>
                <input type="text" name="search_query" id="search_query" class="form-control" value="{{ old('search_query') }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        @if ($drugs->count() > 0)
            <h2>Results:</h2>

            <ul>
                @foreach ($drugs as $drug)
                    <li>{{ $drug->name }}</li>
                @endforeach
            </ul>
        @else
            <p>No results found.</p>
        @endif
    </div>
@endsection
