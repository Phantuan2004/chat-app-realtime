<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'is_group', 'created_by'];

    public function users()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function members()
    {
        return $this->hasMany(ConversationMember::class, 'conversation_id');
    }
}
