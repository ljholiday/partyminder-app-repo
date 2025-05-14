<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Party Minder – Invite</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Invite a Guest</h1>

    <div id="app">
        <guest-invite-form></guest-invite-form>
    </div>

    <script src="{{ asset('js/vue.global.prod.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

