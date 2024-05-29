<html>
<head>
    <title>Leaderboard</title>
</head>
<div class="container">
    <h1>Leaderboard</h1>
    
    <form action="{{ route('leaderboard.index') }}" method="GET">
        <div class="form-group">
            <label for="category_id">Select Category:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $selectedCategoryId == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">View Leaderboard</button>
    </form>

    @if($selectedCategoryId)
        <h2>Top 10 Players in {{ $categories->find($selectedCategoryId)->name }}</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Player</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leaderboard as $index => $score)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $score->user->username }}</td> <!-- Displaying the player's username -->
                        <td>{{ $score->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</html>