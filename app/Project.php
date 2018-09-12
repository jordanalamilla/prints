<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Get the print record associated with the project.
     */
    public function art_print()
    {
        return $this->hasOne('App\ArtPrint');
    }

    /**
     * Get the original record associated with the project.
     */
    public function original()
    {
        return $this->hasOne('App\Original');
    }
}
