<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @method static latest()
 * @method static create()
 */
class Listing extends Model
{
    use HasFactory;

    protected $fillable =
        [  'user_id',
            'company',
            'title',
            'location',
            'email',
            'website',
            'description',
            'tags',
            'logo'
        ];


    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
    // Relationship To User
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
