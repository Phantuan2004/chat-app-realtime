<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageUserSetting extends Model
{
    use HasFactory;

    protected $table = 'message_user_settings';
    protected $fillable = [
        'message_id',
        'user_id',
        'deleted_at',
        'is_recalled',
        'read_at',
    ];

    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
