<!DOCTYPE html>
<html>
<head>
  <title>QGIS Map</title>
  <link rel="stylesheet" href="https://openlayers.org/en/v6.13.0/css/ol.css" type="text/css">
</head>
<body>
  <div id="map" class="map"></div>
  <script src="https://openlayers.org/en/v6.13.0/build/ol.js"></script>
  <script>
    var map = new ol.Map({
      target: 'map',
      layers: [
        new ol.layer.Tile({
          source: new ol.source.OSM()
        }),
        new ol.layer.Image({
          source: new ol.source.ImageWMS({
            url: 'http://your-qgis-server/cgi-bin/qgis_mapserv.fcgi',
            params: {
              'LAYERS': 'your-layer-name',
              'FORMAT': 'image/png'
            },
            serverType: 'qgis'
          })
        })
      ],
      view: new ol.View({
        center: ol.proj.fromLonLat([longitude, latitude]),
        zoom: 10
      })
    });
  </script>
</body>
</html>