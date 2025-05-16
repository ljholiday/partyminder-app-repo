<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Party Minder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/partyminder.css') }}">
</head>
<body>
    <header>
        <h1>Party Minder</h1>
        <p>The social network for real-life gatherings</p>
    </header>

    <main>
        <section>
            <h2>How It Works</h2>
            <ul>
                <li>Create or join a dinner party</li>
                <li>Invite friends, neighbors, or new connections</li>
                <li>Show up, share food, and connect</li>
            </ul>
        </section>

        <section>
            <h2>Why Party Minder?</h2>
            <p>No ads. No endless feeds. Just people connecting over good food and better conversation.</p>
        </section>

        <section>
            <a href="/admin/events/create"><button>Create an Event</button></a>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Party Minder</p>
    </footer>
</body>
</html>

