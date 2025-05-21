<p>Hello {{ $invite->guest_name }},</p>
<p>You’ve been invited to a party!</p>
<p><strong>Event:</strong> {{ $invite->event->title }}</p>
<p>Click here to RSVP: <a href="{{ url('/rsvp/'.$invite->id) }}">RSVP Now</a></p>
