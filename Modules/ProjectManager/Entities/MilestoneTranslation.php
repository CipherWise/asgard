<?php namespace Modules\ProjectManager\Entities;

use Illuminate\Database\Eloquent\Model;

class MilestoneTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'projectmanager__milestone_translations';
}
