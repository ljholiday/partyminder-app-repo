<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/partyminder.css') }}">
</head>
<body>
    <main>
        <h1>All Events</h1>

        @if ($events->isEmpty())
            <p>No events yet.</p>
        @else
            <ul>
                @foreach ($events as $event)
                    <li>
                        <strong>{{ $event->title }}</strong><br>
                        {{ $event->event_date->format('F j, Y \a\t g:i A') }}<br>
                        {{ $event->location }}<br>
                        <em>{{ $event->description }}</em>
                    </li>
                    <hr>
                @endforeach
            </ul>
        @endif

        <p><a href="/admin/events/create">Create a new event</a></p>
    </main>
</body>
</html>

