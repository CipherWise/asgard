<?php namespace Modules\ProjectManager\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use Translatable;

    protected $table = 'projectmanager__milestones';
    public $translatedAttributes = [];
    protected $fillable = [];
}
