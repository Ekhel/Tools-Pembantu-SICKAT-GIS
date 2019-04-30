<script src="<?php echo base_url('assets/shapefile/dist/shp.min.js')?>"> </script>
<script src="<?php echo base_url('assets/js/L.Control.Shapefile.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/css/L.Control.Shapefile.css')?>"/>

<div class="container-fluid">
	<div id="map" style="html,body:100%;">
		<script type="text/javascript">
			var map = L.map('map').setView([-2.556884820881381,140.46266563281256], 7);


			var baseLayers = {
          		'Satelite': L.tileLayer.provider('Esri.WorldImagery'),
          		'OpenStreetMap': L.tileLayer.provider('OpenStreetMap.HOT').addTo(map)
        	};

        	L.control.scale({imperial: false}).addTo(map);
        	L.control.layers(baseLayers,{}).addTo(map);
        	L.control.shapefile({ position: 'topleft' }).addTo(map);

          //var geo = L.control.shapefile({features:[]},{
            //onEachFeature: function(f,l){
            //var out = [];
                //if (f.properties){
                    //for(var key in f.properties){
                     //out.push(key+": "+f.properties[key]);
                //}
                //l.bindPopup(out.join("<br />"));
            //}
          //}}).addTo(map);

		</script>
	</div>
</div>
