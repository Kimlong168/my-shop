<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoty;
class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'price',
        'description',
        'image',
        'category',
        'isAvailable',
    ];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {

            $query->where('productName', 'like', '%' . $filters['search'] . '%')
            ->orWhere('price', $filters['search']);
            
        }else if (isset($filters['filter'])) {

            switch ($filters['filter']) {
                case 'available':
                  $query->where('isAvailable', 1);
                  break;
                case 'unavailable':
                  $query->where('isAvailable', 0);
                  break;
                default:
                  $query->where('category_id', $filters['filter']);
                  break;
              }

        }else if(isset($filters['sort'])){

            switch ($filters['sort']) {
                case 'nameA-Z':
                  $query->orderBy('productName','ASC');
                  break;
                case 'nameZ-A':
                    $query->orderBy('productName','DESC');
                  break;
                case 'price0-9':
                  $query->orderBy('price','ASC');
                break;
                case 'price9-0':
                    $query->orderBy('price','DESC');
              }
        }
  
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
