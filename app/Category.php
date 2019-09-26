<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    use NodeTrait;

    public function threads()
    {
        return $this->hasMany(Thread::class);
    }

    public function breadcrumb()
    {
        return '<a href="' . route('welcome') . '">Forum</a> >> ' . self::ancestors($this->id)->pluck('name', 'id')
                ->map(function ($item, $key)
                {
                    return '<a href="' . route('forum', $key) . '">' . $item . '</a>';
                })->implode(' >> ');
    }

    public function getBreadcrumbAttribute()
    {
        return $this->breadcrumb();
    }

    public function threadsCount()
    {
        /*
         App\Thread::whereIn('category_id', App\Category::descendantsAndSelf(6)->pluck('id')->toArray())->get()->count()
         */
        return Thread::whereIn('category_id', self::descendantsAndSelf($this->id)->pluck('id')->toArray())->get()->count();
    }

    public function getThreadsCountAttribute()
    {
        return $this->threadsCount();
    }

    public function descendantsThreads()
    {
        return Thread::whereIn('category_id', self::descendantsAndSelf($this->id)->pluck('id')->toArray())->get();
    }

    public function getReplyCountAttribute()
    {
        return Reply::whereIn('thread_id',$this->descendantsThreads()->pluck('id'))->get()->count();
    }

    public function getLatestReplyAttribute()
    {
        return Reply::whereIn('thread_id',$this->descendantsThreads()->pluck('id'))->latest()->first();
    }


}
