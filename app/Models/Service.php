<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'services_name', 'slug' , 'description', 'image_url'
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_service', 'service_id', 'company_id');
    }
    



    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('services_name')
            ->saveSlugsTo('slug');
    }
}
