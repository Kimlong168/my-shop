<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    use HasFactory;

    protected  $fillable = [
        'categoryName',
        'description',
    ];

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['sort'])) {
            $query->orderBy('categoryName', $filters['sort']);
        }else if(isset($filters['search'])){
            $query->where('categoryName', 'like', '%' . $filters['search'] . '%');
        }
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
