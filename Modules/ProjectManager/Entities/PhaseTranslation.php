<?php namespace Modules\ProjectManager\Entities;

use Illuminate\Database\Eloquent\Model;

class PhaseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'projectmanager__phase_translations';
}
