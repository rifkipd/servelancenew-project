<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];


    protected $fillable = [
        'users_id',
        'photo',
        'role',
        'contact_number',
        'biography',
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    //one to many
    /**
     * Get all of the experience_user for the DetailUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experience_user(): HasMany
    {
        return $this->hasMany(ExperienceUser::class, 'detail_user_id');
    }



    /**
     * Get the user that owns the DetailUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
