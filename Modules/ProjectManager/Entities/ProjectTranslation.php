<?php namespace Modules\ProjectManager\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'projectmanager__project_translations';
}
