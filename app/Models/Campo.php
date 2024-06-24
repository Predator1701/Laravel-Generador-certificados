<?php

namespace App\Models;
use App\Models\Proyecto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campo extends Model
{
    use HasFactory;
    
    protected $primaryKey = "id_campo";

    public function proyecto() : BelongsTo
    {
        return $this->belongsTo(Proyecto::class);
    }
  
}
