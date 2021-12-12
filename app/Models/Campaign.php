<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'schedule' => 'datetime:Y-m-d',
        'schedule_ends' => 'datetime:Y-m-d',
    ];

    public function scopeOwner($query){
        return $query->where('user_id', \Auth::id());
    }

    public function scopeActive($query){
        return $query->where('status', 'Active');
    }

    public function scopePending($query){
        return $query->where('status', 'Pending');
    }

    public function scopeRejected($query){
        return $query->where('status', 'Rejected');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
