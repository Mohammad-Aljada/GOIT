<?php

namespace App\Models;

// app/Models/PersonalAccessToken.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    protected $fillable = [
        'tokenable_id', 'name', 'token', 'abilities', 'last_used_at'
    ];

    public function tokenable()
    {
        return $this->morphTo();
    }
}
