<?php

namespace App;
use App\Account;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
