<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class studentTeam extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the student that owns the studentTeam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the hummatask_team that owns the studentTeam
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hummatask_team(): BelongsTo
    {
        return $this->belongsTo(HummataskTeam::class);
    }
}