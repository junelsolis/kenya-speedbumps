<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use App\Bump;

class Track extends Model
{
    use SpatialTrait;

    public function bumps() {
      return $this->hasMany('App\Bump');
    }

    protected $fillable = ['track_points'];

    protected $spatialFields = [
      'track_points',
    ];
}
