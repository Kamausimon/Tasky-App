<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'project_id',
        'category_id',
        'completed',
        'due_at',
        'priority'
    ];

    protected $cast = [
        'completed' => 'boolean',
        'due_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function taskcategory()
    {
        return $this->belongsTo(TaskCategory::class);
    }
}
