<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'value',
        'category',
        'count',
        'curr_type',
        'details',
        'images',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @return string
     * @var $cost
     *
     * out put price with the right type of coin
     *
     */
    public function getCountAttribute($cost)
    {
        return config('matjer.curr[' . $this->curr_type . ']',) . ' ' . $cost;
//        return '$ ' . $cost;
    }


    /**
     * The attributes that are mass assignable.
     *
     * @return string
     * @var $category
     *
     * out put price with the right type of coin
     *
     */
    public function getCategoryAttribute($category)
    {
        return config('matjer.category[' . $category . ']', 'other');

    }

}
