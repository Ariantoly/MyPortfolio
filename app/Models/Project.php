<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function tools() {
        return $this->belongsToMany(Tools::class, 'project_tools', 'project_id', 'tool_id');
    }
}
