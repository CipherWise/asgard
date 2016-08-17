<?php namespace Modules\ProjectManager\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Translatable;

    protected $table = 'projectmanager__tasks';
    public $translatedAttributes = [];
    protected $fillable = [];
}
