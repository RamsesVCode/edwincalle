<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_summary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'summary';
}
