<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TodoTask extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'descricao', 'is_complete',
    ];

    /**
     * @return BelongsTo
     */
    //  relacao
    public function todo(): BelongsTo
    {
        return $this->belongsTo(Todo::class);
    }
}
