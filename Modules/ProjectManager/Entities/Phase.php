<?php namespace Modules\ProjectManager\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    use Translatable;

    protected $table = 'projectmanager__phases';
    public $translatedAttributes = [];
    protected $fillable = [];
}
