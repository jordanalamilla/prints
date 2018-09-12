<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtPrint extends Model
{
    /**
     * Get the project that owns the print.
     */
    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
