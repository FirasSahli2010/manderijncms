<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\SoftDeletes; //soft delete

class Categories extends Model
{
    use HasFactory;
    use Sortable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'desc',
        'slug',
        'parent_category',
        'langauge',
        'shw',
        'deleted',
        'deleted_at'
    ];

    public $sortable = ['id', 'title', 'langauge', 'shw', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function language(){
      return $this->belongsTo(Languages::class);
    }

    public function parent_category() {
       return $this->belongsTo(Categories::class);
    }

    public function posts(){
      return $this->hasMany(Posts::class);
    }

    public function pages(){
      return $this->hasMany(Pages::class);
    }

}
