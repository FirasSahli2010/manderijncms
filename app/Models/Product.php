<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory;

    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'summery',
        'slug',
        'langauge_id',
        'shw',
    ];

    public $sortable = ['id', 'title', 'langauge', 'shw', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function language(){
      return $this->belongsTo(Languages::class, 'language_id');
    }

    public function categories()
    {
      return $this->belongsToMany(product_category::class, 'product_product_category', 'product_id', 'product_category_id');
    }

    public function photos()
    {
      return $this->hasMany('App\ItemImage');
    }

}
