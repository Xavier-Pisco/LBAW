<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannedPost extends Model
{
    // Don't add create and update timestamps in database.
    // Created_at and updated_at not expected
    public $timestamps  = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'banned_post_id'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'banned_post';

    /**
     * Get the notification that owns the BannedPost
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function notification()
    {
        return $this->belongsTo(Notification::class, 'id');
    }

    /**
     * Get the post that owns the BannedPost
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'banned_post_id');
    }
}
