<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>You're Invited</title>
</head>
<body style="font-family: sans-serif; background: #f7f7f7; padding: 20px; color: #333;">
    <table width="100%" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 30px; border-radius: 8px;">
        <tr>
            <td>
                <h2 style="margin-top: 0;">Hi {{ $invite->name }},</h2>

                <p>You’ve been invited to <strong>{{ $invite->event->title ?? 'an upcoming event' }}</strong>!</p>

                @if (!empty($invite->event->event_date))
                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($invite->event->event_date)->format('l, F j, Y \a\t g:i A') }}</p>
                @endif

                @if (!empty($invite->event->location))
                    <p><strong>Location:</strong> {{ $invite->event->location }}</p>
                @endif

                <p>Click below to view your invite and RSVP:</p>

                <p style="text-align: center; margin: 30px 0;">
                    <a href="{{ url('/invite/' . $invite->id) }}"
                       style="background-color: #1e90ff; color: #ffffff; padding: 12px 20px; border-radius: 6px; text-decoration: none; font-weight: bold;">
                        View My Invite
                    </a>
                </p>

                <p>If the button above doesn’t work, paste this link into your browser:</p>
                <p style="font-size: 14px; color: #666;">{{ url('/invite/' . $invite->id) }}</p>

                <hr style="margin: 40px 0;">

                <p style="font-size: 12px; color: #aaa; text-align: center;">
                    This invite was sent via <strong>Party Minder</strong>. 
                    If you weren’t expecting this email, you can ignore it.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>

