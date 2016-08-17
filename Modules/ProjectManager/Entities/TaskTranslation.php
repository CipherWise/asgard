<?php namespace Modules\ProjectManager\Entities;

use Illuminate\Database\Eloquent\Model;

class TaskTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'projectmanager__task_translations';
}
