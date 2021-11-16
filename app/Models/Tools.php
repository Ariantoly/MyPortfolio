<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    use HasFactory;

    public function projects() {
        return $this->belongsToMany(Projects::class, 'project_tools', 'tool_id', 'project_id');
    }
}
