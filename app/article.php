<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function getTitle()
    {
    	return $this->title;

    }
}
