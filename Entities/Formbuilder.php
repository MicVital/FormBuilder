<?php

namespace Modules\Formbuilder\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Formbuilder extends Model
{
    use Translatable;

    protected $table = 'formbuilder__formbuilders';
    public $translatedAttributes = [];
    protected $fillable = [];
}
