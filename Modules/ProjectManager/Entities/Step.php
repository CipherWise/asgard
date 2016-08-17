<?php namespace Modules\ProjectManager\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use Translatable;

    protected $table = 'projectmanager__steps';
    public $translatedAttributes = [];
    protected $fillable = [];
}
