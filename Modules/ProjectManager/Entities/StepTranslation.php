<?php namespace Modules\ProjectManager\Entities;

use Illuminate\Database\Eloquent\Model;

class StepTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'projectmanager__step_translations';
}
