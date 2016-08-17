<?php namespace Modules\ProjectManager\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Translatable;

    protected $table = 'projectmanager__projects';
    public $translatedAttributes = [];
    protected $fillable = [];
}
