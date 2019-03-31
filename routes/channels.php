<?php
use App\Broadcasting\ReportCreated;
use App\Broadcasting\ReportCompleted;

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('reportCompleted.{report}.{user}', ReportCompleted::class);
Broadcast::channel('newReport.{report}.{user}' , ReportCreated::class);
