<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Nathanmac\Utilities\Parser\Facades\Parser;
use Grimzy\LaravelMysqlSpatial\Types\LineString;
use Grimzy\LaravelMysqlSpatial\Types\Point;

use App\Track;
use App\Bump;
use Storage;

class ImportTracksWithWaypoints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:tracks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import GPX tracks with their waypoints';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {


        $filename = $this->ask('Enter the GPX filename');

        $gpx = Parser::xml(Storage::get('gpx/' . $filename));

        $points = [];

        // dd($gpx['trk']['trkseg']['trkpt']);

        foreach ($gpx['trk']['trkseg']['trkpt'] as $i) {
          $point = new Point($i['@lat'], $i['@lon']);
          $points[] = $point;
        }


        $lineString = new LineString($points);

        $track = Track::create([
          'track_points' => $lineString
        ]);



        if (!empty($gpx['wpt'])) {
          foreach ($gpx['wpt'] as $i) {
            Bump::create([
              'track_id' => $track->id,
              'location' => new Point($i['@lat'], $i['@lon']),
              'elevation' => $i['ele']
            ]);

          }
        }


        return $this->info('Done');

    }
}
