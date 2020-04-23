<?php

namespace Modules\Formbuilder\Entities;

use Illuminate\Database\Eloquent\Model;

class FormbuilderTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'formbuilder__formbuilder_translations';
}
