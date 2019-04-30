
        // MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
        var map = L.map('map').setView([-2.556884820881381,140.46266563281256], 7);


        //Mengambil Layer GEO JSON dari Folder admin_geojson
        //----------------Layer DISTRIK --------------------------------------------------------------------
        //START WP1
        var sentani = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/sentani.json')?>",function(data){
        L.geoJson(data).addTo(sentani);
        });      

         var ebungfauw = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/ebungfauw.json')?>",function(data){
        L.geoJson(data).addTo(ebungfauw);
        });

         var sentani_timur = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/sentanitimur.json')?>",function(data){
        L.geoJson(data).addTo(sentani_timur);
        });

         var waibu = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/waibu.json')?>",function(data){
        L.geoJson(data).addTo(waibu);
        });

         //End WP1-----------------------------------------------------------------------------------------

         //START WP2

         var depapre = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/depapre.json')?>",function(data){
        L.geoJson(data).addTo(depapre);
        });

         var yokari = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/yokari.json')?>",function(data){
        L.geoJson(data).addTo(yokari);
        });

         var demta = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/demta.json')?>",function(data){
        L.geoJson(data).addTo(demta);
        });

         var ravenirara = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/ravenirara.json')?>",function(data){
        L.geoJson(data).addTo(ravenirara);
        });

         var sentani_barat = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/sentanibarat.json')?>",function(data){
        L.geoJson(data).addTo(sentani_barat);
        });

         //End WPII--------------------------------------------------------------------------------------

         //START WP III

         var kemtuk = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/kemtuk.json')?>",function(data){
        L.geoJson(data).addTo(kemtuk);
        });

         var kemtuk_gresi = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/kemtukgresi.json')?>",function(data){
        L.geoJson(data).addTo(kemtuk_gresi);
        });

         var grasela = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/grasela.json')?>",function(data){
        L.geoJson(data).addTo(grasela);
        });

         var namblong = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/namblong.json')?>",function(data){
        L.geoJson(data).addTo(namblong);
        });

         var nimboran = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/nimboran.json')?>",function(data){
        L.geoJson(data).addTo(nimboran);
        });

         var nimbokrang = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/nimbokrang.json')?>",function(data){
        L.geoJson(data).addTo(nimbokrang);
        });

         //End WP III----------------------------------------------------------------------------------

         //START WP IV


         var kaureh = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/kaureh.json')?>",function(data){
        L.geoJson(data).addTo(kaureh);
        });

         var unurumguay = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/unurumguay.json')?>",function(data){
        L.geoJson(data).addTo(unurumguay);
        });

         var yapsi = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/yapsi.json')?>",function(data){
        L.geoJson(data).addTo(yapsi);
        });

         var airu = new L.LayerGroup();

         $.getJSON("<?php echo base_url('admin_geojson/distrik/airu.json')?>",function(data){
        L.geoJson(data).addTo(airu);
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

        "Koordinat" :{
          "Perumahan" : rumah
          
        },

      };

        // MENAMPILKAN TOOLS UNTUK MEMILIH BASEMAP, DAN LAYER YANG DITAMPILKAN
        L.control.groupedLayers(baseLayers, groupedOverlays).addTo(map);