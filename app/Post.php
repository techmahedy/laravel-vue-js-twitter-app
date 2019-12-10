<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

	protected $guarded = [];
	
    protected $appends = ['createdDate'];

    public function user()
    {
     return $this->belongsTo(User::class);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
