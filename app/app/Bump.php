<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use App\Track;


class Bump extends Model
{
    use SpatialTrait;

    public function track() {
      return $this->belongsTo('App\Track');
    }

    protected $fillable = ['track_id', 'location', 'elevation'];
    protected $spatialFields = [
      'location',
    ];
}
