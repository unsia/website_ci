<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = 'features';
    protected $fillable = [
        'id_parent',
        'name',
        'slug',
        'route_name',
        'menu_type',
        'prefix_permission',
        'description',
        'icon',
        'icon_type',
        'status'
    ];

    public function children()
    {
        return $this->hasMany(Feature::class,'id_parent');
    }

    public function parent()
    {
        return $this->hasOne(Feature::class,'id', 'id_parent');
    }

    public function allParent()
    {
        return $this->parent()->with('allParent');
    }

    public function scopeChildless($query)
    {
        $query->has('children', '=', 0);
    }

    public function allChildren()
    {
        return $this->children()->where('status', true)->with('allChildren');
    }

    public function subMenu()
    {
        return $this->children()->with('subMenu');
    }
}
