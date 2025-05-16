<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/partyminder.css') }}">
</head>
<body>
    <main>
        <h1>Create a New Event</h1>
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif


        <form method="POST" action="/admin/events">
            @csrf

            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" required><br><br>

            <label for="description">Description</label><br>
            <textarea name="description" id="description" rows="4"></textarea><br><br>

            <label for="event_date">Event Date & Time</label><br>
            <input type="datetime-local" name="event_date" id="event_date" required><br><br>

            <label for="location">Location</label><br>
            <input type="text" name="location" id="location"><br><br>

            <button type="submit">Create Event</button>
        </form>
    </main>
</body>
</html>

