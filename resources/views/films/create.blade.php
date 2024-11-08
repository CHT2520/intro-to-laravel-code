<x-layout title="Add new film">
    <h1>Add a new film</h1>

    <form method="POST" action="/films">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">

            @error('title')
            <span>{{ $message }}</span>
            @enderror

        </div>
        <div>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" value="{{ old('year') }}">
            @error('year')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" value="{{ old('duration') }}">
            @error('duration')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">SAVE THE FILM</button>
        </div>
    </form>
</x-layout>