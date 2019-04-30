
<div id='delete'>Delete Features</div>
  <a href='#' id='export'>Export Features</a>
 <div id="map">
   <script type="text/javascript">

    // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
    var map = L.map('map').setView([-2.556884820881381,140.46266563281256], 7);


    //Mengambil Layer GEO JSON dari Folder admin_geojson
    //----------------Layer DISTRIK --------------------------------------------------------------------
    //START WP1
    var sentani = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/sentani.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(sentani);
    });

     var ebungfauw = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/ebungfauw.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }

    }).addTo(ebungfauw);
    });

     var sentani_timur = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/sentanitimur.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(sentani_timur);
    });

     var waibu = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/waibu.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(waibu);
    });

     //End WP1-----------------------------------------------------------------------------------------

     //START WP2

     var depapre = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/depapre.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      },
      style: function(feature) {
        return {
            opacity: 1,
            fillOpacity: 0.7,
            radius: 6,
            color: feature.properties.__color__
        }
    }
    }).addTo(depapre);
    });

     var yokari = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/yokari.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(yokari);
    });

     var demta = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/demta.json')?>",function(data){
     L.geoJson(data,{
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
     }).addTo(demta);
    });

     var ravenirara = new L.LayerGroup();

    $.getJSON("<?php echo base_url('admin_geojson/distrik/ravenirara.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(ravenirara);
    });

     var sentani_barat = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/sentanibarat.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(sentani_barat);
    });

     //End WPII--------------------------------------------------------------------------------------

     //START WP III

     var kemtuk = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/kemtuk.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(kemtuk);
    });

     var kemtuk_gresi = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/kemtukgresi.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(kemtuk_gresi);
    });

     var grasela = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/grasela.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(grasela);
    });

     var namblong = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/namblong.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(namblong);
    });

     var nimboran = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/nimboran.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(nimboran);
    });

     var nimbokrang = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/nimbokrang.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(nimbokrang);
    });

     //End WP III----------------------------------------------------------------------------------

     //START WP IV


     var kaureh = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/kaureh.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(kaureh);
    });

     var unurumguay = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/unurumguay.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(unurumguay);
    });

     var yapsi = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/yapsi.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(yapsi);
    });

     var airu = new L.LayerGroup();

     $.getJSON("<?php echo base_url('admin_geojson/distrik/airu.json')?>",function(data){
    L.geoJson(data, {
        onEachFeature: function(feature, featureLayer) {
        featureLayer.bindPopup("<div class='main-content'>" +"<table class='table table-bordered table-striped col-md-8'>" +
                "<tr class='small'>" +
                "<td>" + "DISTRIK" + "</td>" +
                "<td>" + feature.properties.KECAMATAN + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "KAMPUNG" + "</td>" +
                "<td>" + feature.properties.DESA + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "SUMBER" + "</td>" +
                "<td>" + feature.properties.SUMBER + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS m2" + "</td>" +
                "<td>" + feature.properties.LUAS_M2 + "</td>" +
                "</tr>" +
                "<tr class='small'>" +
                "<td>" + "LUAS Ha" + "</td>" +
                "<td>" + feature.properties.LUAS_HA + "</td>" +
                "</tr>" +
                "</table>" +
                "</div>");
      }
    }).addTo(airu);
    });



    var rumah = new L.LayerGroup();

    $.ajax({
          type: 'POST',
          url: '<?php echo base_url('admin_geojson/rumah/rumah.json')?>',
          dataType: "json",
          success: function(response){
         var data=response;
         L.geoJson(data,{
           style: function(feature){
          var Style1
          return { color: "#cc3f39", weight: 1, opacity: 1 }; // ini adalah style yang akan digunakan
          },
            // MENAMPILKAN POPUP DENGAN ISI BERDASARKAN ATRIBUT TABLE
              onEachFeature: function( feature, layer ){
              layer.bindPopup( "<center>" + feature.properties.PopupInfo + "</center>")
            }
            }).addTo(rumah);  // di akhir selalu di akhiri dengan perintah ini karena objek akan ditambahkan ke map
          }
      });

    // PILIHAN BASEMAP YANG AKAN DITAMPILKAN
    var baseLayers = {
      'Satelite': L.tileLayer.provider('Esri.WorldImagery'),
      'OpenStreetMap': L.tileLayer.provider('OpenStreetMap.HOT').addTo(map)
    };

    //L.control.layers(baseLayers,{}).addTo(map);
    // MENAMPILKAN SKALA
    L.control.scale({imperial: false}).addTo(map);
    L.control.polylineMeasure ({position:'topleft', unit:'metres', showBearings:true, clearMeasurementsOnStop: false, showClearControl: true, showUnitControl: true}).addTo (map);

   var featureGroup = L.featureGroup().addTo(map);

    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: featureGroup
        }
    }).addTo(map);

    map.on('draw:created', function(e) {

        // Each time a feaute is created, it's added to the over arching feature group
        featureGroup.addLayer(e.layer);
    });

    document.getElementById('delete').onclick = function(e) {
        featureGroup.clearLayers();
    }

    document.getElementById('export').onclick = function(e) {
        // Extract GeoJson from featureGroup
        var data = featureGroup.toGeoJSON();

        // Stringify the GeoJson
        var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

        // Create export
        document.getElementById('export').setAttribute('href', 'data:' + convertedData);
        document.getElementById('export').setAttribute('download','data.geojson');
    }

    var helloPopup = L.popup().setContent('Hello World!');

    L.easyButton('glyphicon glyphicon-export', function(e){
        var data = featureGroup.toGeoJSON();

        // Stringify the GeoJson
        var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data));

        // Create export
        document.getElementById('export').setAttribute('href', 'data:' + convertedData);
        document.getElementById('export').setAttribute('download','data.geojson');
    }).addTo(map);

    var groupedOverlays = {
    "WP I" :{
      "Sentani" : sentani,
      "Waibu" : waibu,
      "Sentani Timur" : sentani_timur,
      "Ebungfauw" : ebungfauw,
    },
    "WP II" :{
      "Sentani Barat" : sentani_barat,
      "Depapre" : depapre,
      "Yokari" : yokari,
      "Raveni rara" : ravenirara,
      "Demta" : demta
    },

    "WP III" :{
      "Kemtuk" : kemtuk,
      "Kemtuk Gresi" : kemtuk_gresi,
      "Gresi Selatan" : grasela,
      "Namblong" : namblong,
      "Nimboran" : nimboran,
      "Nimbokrang" : nimbokrang
    },

    "WP IV" :{
      "Kaureh" : kaureh,
      "Unurumguay" : unurumguay,
      "Yapsi" : yapsi,
      "Airu" : airu
    },

  };

    // MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP, DAN LAYER YANG DITAMPILKAN
    L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);
   </script>

</div>
