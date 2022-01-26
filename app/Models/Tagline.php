<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tagline extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'tagline';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];


    protected $fillable = [
        'service_id',
        'tagline',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    /**
     * Get the service that owns the AdvantageUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
