<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'location',
    ];

    public function id(): int
    {
        return $this->id;
    }


    public function title(): string
    {
        return $this->title;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function date(): string
    {
        return $this->date;
    }

    public function time(): string
    {
        return $this->time;
    }

    public function location(): ?string
    {
        return $this->location;
    }
    


}
