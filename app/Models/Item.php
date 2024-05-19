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
    public function getValueAttribute($cost)
    {
        $sy = config('matjer.curr',);
        return $sy[$this->curr_type] . $cost;
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

    /**
     * The attributes that are mass assignable.
     *
     * @return string
     * @var $images
     *
     * out put price with the right type of coin
     *
     */
    public function getImagesAttribute($images)
    {
//        for ($i =0 ;$i< sizeof($images);$i++){
//            $images[$i] = url($images[$i]);
//        }
//        return $images;
        return url($images);
    }

}
