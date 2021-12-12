<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifies extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function notifiationBy()
    {
        return $this->belongsTo('App\Models\User', 'notification_by_id', 'id');
    }
    public function notifiationTo()
    {
        return $this->belongsTo('App\Models\User', 'notification_to_id', 'id');
    }
}
