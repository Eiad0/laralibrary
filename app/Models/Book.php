<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['title','isbn','publish_date','author_id'];

    /**
     * Get the author that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
    public function user(){
         return $this->belongsTo(User::class);
    }
    /**
     * Get all of the borrowRequests for the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function borrowRequests(): HasMany
    {
        return $this->hasMany(BorrowRequest::class, 'book_id', 'id');
    }


}
