<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_name', 'description', 'image_url'
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_service', 'service_id', 'company_id');
    }
}
