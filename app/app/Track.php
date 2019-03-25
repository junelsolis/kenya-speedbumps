<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;


class Track extends Model
{
    use SpatialTrait;

    protected $spatialFields = [
      'track_points',
    ];
}
