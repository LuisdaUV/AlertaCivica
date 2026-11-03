<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evidence extends Model
{
    protected $table = 'evidences';
    
    protected $fillable = ['alert_id', 'file_path', 'file_type'];

    public function alert(): BelongsTo
    {
        return $this->belongsTo(Alert::class);
    }
}