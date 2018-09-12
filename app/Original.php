<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Original extends Model
{
    /**
     * Get the project that owns the original.
     */
    public function project()
    {
        return $this->belongsTo('App\Project', 'project_id');
    }
}
