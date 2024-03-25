<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdApplication extends Model
{
    use HasFactory;

    protected $fillable = ['expected_salary', 'user_id', 'ad_id'];

    public function ad():BelongsTo {
        return $this->belongsTo(Ad::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
}
