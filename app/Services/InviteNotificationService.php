<?php

namespace App\Services;

use App\Mail\GuestInviteMail;
use App\Mail\HostInviteMail;
use Illuminate\Support\Facades\Mail;

class InviteNotificationService
{
    public static function send($invite)
    {
        // Send email to guest
        if (!empty($invite->email)) {
            Mail::to($invite->email)->send(new GuestInviteMail($invite));
        }

        // Send email to host
        if (!empty($invite->invitor_email)) {
            Mail::to($invite->invitor_email)->send(new HostInviteMail($invite));
        }
    }
}
