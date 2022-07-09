<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ExperienceUser extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $table = 'experience_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];


    protected $fillable = [
        'detail_user_id',
        'experience',
        'created_at',
        'updated_at',
        'deleted_at',

    ];




    /**
     * Get the detail_user that owns the ExperienceUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detail_user(): BelongsTo
    {
        return $this->belongsTo(DetailUser::class, 'detail_user_id', 'id');
    }
}
