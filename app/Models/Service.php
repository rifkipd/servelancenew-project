<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'service';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];


    protected $fillable = [
        'users_id',
        'title',
        'description',
        'delivery_time',
        'revision_limit',
        'price',
        'note',

        'created_at',
        'updated_at',
        'deleted_at',

    ];



    //one to many
    /**
     * Get all of the advantage_user for the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantage_user(): HasMany
    {
        return $this->hasMany(AdvantageUser::class, 'service_id');
    }

    public function tagline(): HasMany
    {
        return $this->hasMany(Tagline::class, 'service_id');
    }

    public function advantage_service(): HasMany
    {
        return $this->hasMany(AdvantageService::class, 'service_id');
    }

    public function thumbnail_service(): HasMany
    {
        return $this->hasMany(ThumbnailService::class, 'service_id');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'service_id');
    }








    //belongsTo

    /**
     * Get the user that owns the Service
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
