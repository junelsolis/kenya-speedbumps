<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;


class Bump extends Model
{
    use SpatialTrait;

    protected $spatialFields = [
      'location',
    ];
}
