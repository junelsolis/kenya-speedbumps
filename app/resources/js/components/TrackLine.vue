<template>
  <div>
    <l-polyline
      :lat-lngs="points"
      :color="color">
    </l-polyline>

    <l-marker v-for='(bump, index) in bumps' :key='index' :lat-lng="[bump.location.coordinates[1], bump.location.coordinates[0]]" ></l-marker>
  </div>

</template>

<script>
  export default {
    props: [ 'bumps', 'track_points'],
    data() {
      return {
        color: 'red',
      }
    },
    computed: {
      points() {
        var points = []
        var coordinates = this.track_points.coordinates

        for (let i = 0; i < coordinates.length; i++) {
          // PostGIS coordinates are long/lat format
          var lat = coordinates[i][1]
          var lon = coordinates[i][0]

          var array = [lat, lon]

          points.push(array)
        }

        return points

      },

    }
  }
</script>
