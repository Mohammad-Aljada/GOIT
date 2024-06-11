<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'companies_name', 'companies_image'
    ];
  

    public function services()
    {
        return $this->belongsToMany(Service::class, 'company_service' , 'company_id', 'service_id');
    }
}
