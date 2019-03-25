<template>
  <div style="height: 100%; width: 100%">
    <!-- <div class="info" style="height: 15%">
      <span>Center: {{ center }}</span>
      <span>Zoom: {{ zoom }}</span>
      <span>Bounds: {{ bounds }}</span>
    </div> -->
    <l-map
      style="height: 80%; width: 100%"
      :zoom="zoom"
      :center="center"
      @update:zoom="zoomUpdated"
      @update:center="centerUpdated"
      @update:bounds="boundsUpdated"
    >

      <track-line v-for='(track, index) in data' :key='index' :bumps='track.bumps' :track_points='track.track_points'></track-line>


      <l-tile-layer :url="url"></l-tile-layer>
    </l-map>
  </div>
</template>
<script>

  export default {
    props: ['data'],
    data () {
      return {
        url: 'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        zoom: 14,
        center: [-0.6817, 34.7667],
        bounds: null,

        polyline: {
          color: 'red',
        },
      }
    },
    methods: {
      zoomUpdated (zoom) {
      this.zoom = zoom;
      },
      centerUpdated (center) {
        this.center = center;
      },
      boundsUpdated (bounds) {
        this.bounds = bounds;
      }
    },
    // components: {
    //     LMap,
    //     LTileLayer,
    //     LMarker
    // }
  }
</script>
