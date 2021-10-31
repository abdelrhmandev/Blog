<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeValue
 * @package App\Models
 */
class AttributeValue extends Model
{
    /**
     * @var string
     */
    protected $table = 'attribute_values';

    /**
     * @var array
     */
    protected $fillable = [
        'attribute_id', 'value', 'price'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'attribute_id'  =>  'integer',
    ];
}
/*
        $sizes = ['small', 'medium', 'large'];
        $colors = ['black', 'blue', 'red', 'orange'];

        foreach ($sizes as $size)
        {
            AttributeValue::create([
                'attribute_id'      =>  1,
                'value'             =>  $size,
                'price'             =>  null,
            ]);
        }
        */