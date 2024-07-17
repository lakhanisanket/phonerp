<?php

namespace App\Models;

//use App\Traits\MultiTenantModelTrait;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;
//    use MultiTenantModelTrait;
    use HasFactory;

    public $table = 'businesses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'address_line_1',
        'address_line_2',
        'area',
        'city',
        'zipcode',
        'country',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

//    public function created_by()
//    {
//        return $this->belongsTo(User::class, 'created_by_id');
//    }
}
