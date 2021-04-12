<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{//deleteメソッドを使用するとdelete_atにタイムスタンプが追加される
    //
    use SoftDeletes;
}
