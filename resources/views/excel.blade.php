<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excel Import/Export</title>
</head>
<body>
    <h1>Import and Export Users</h1>

    <!-- Import Form -->
    <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file">Select Excel File:</label>
        <input type="file" name="file" required>
        <button type="submit">Import Users</button>
    </form>

    <br>

    <!-- Export Button -->
    <a href="{{ route('users.export') }}">
        <button>Export Users</button>
    </a>
</body>
</html>
