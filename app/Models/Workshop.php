<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
    /**
     * Get the event that owns the Workshop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
