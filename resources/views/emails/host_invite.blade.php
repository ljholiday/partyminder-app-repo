<p>Hello,</p>

<p>Your invitation to <strong>{{ $invite->guest_name }}</strong> was successfully sent.</p>

<p><strong>Event:</strong> {{ $invite->event->title }}</p>

<p>Guest Email: {{ $invite->guest_email }}</p>

<p>You can track RSVPs in your <a href="{{ url('/dashboard/invites') }}">Party Minder dashboard</a>.</p>

<p>Thanks for using Party Minder!</p>
