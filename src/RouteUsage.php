<?php

namespace Julienbourdeau\RouteUsage;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelUpsert\Eloquent\HasUpsertQueries;

class RouteUsage extends Model
{
    use HasUpsertQueries;

    protected $table = 'route_usage';

    protected static $unguarded = true;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getDateFormat()	
    {	
        return config('route-usage.date-format', 'Y-m-d H:i:s');	
    }
}
