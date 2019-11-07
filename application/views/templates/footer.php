<footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io">Sistem Infomasi Geografis </a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('/assets/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('/assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/assets/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/assets/')?>dist/js/demo.js"></script>
<!-- leflat js -->
<script src="<?= base_url('/assets/')?>leaflet/leaflet.js"></script>
<!-- kelebuh js -->
<script src="<?= base_url('/assets/')?>leaflet/kelebuh.js"></script>
<!-- script untuk penganturan peta -->
<script >
    var peta = L.map('petakelebuh').setView([-8.6822729, 116.1289847], 11);
    var mapIcon = L.Icon.extend({
	    iconSize:     [32, 37]
	});
    //alamat icon yang di panggil
    var masjidIcon = new mapIcon({iconUrl:'<?= base_url('/assets/')?>leaflet/images/mosquee.png'}),
        pasarIcon = new mapIcon({iconUrl:'<?= base_url('/assets/')?>leaflet/images/market.png'}),
        sekolahIcon =new mapIcon({iconUrl:'<?= base_url('/assets/')?>leaflet/images/school.png'}),
        atmIcon =new mapIcon({iconUrl:'<?= base_url('/assets/')?>leaflet/images/atm-2.png'}),
        lapanganIcon = new mapIcon({incoUrl: '<?= base_url('/assets/')?>leaflet/images/above_ground.png'})

    // mendeklarasi marker masjid
    
    L.marker([-8.7341392,116.340404],{icon: masjidIcon}).bindPopup('Masjid Pengembok').addTo(peta);
    L.marker([-8.7387525,116.361799,15],{icon: masjidIcon}).bindPopup('masjid matla\'ul ihsan tompek').addTo(peta);
    L.marker([-8.736312,116.3569629,15],{icon: masjidIcon}).bindPopup('masjid ashabul maimanah').addTo(peta);
    L.marker([-8.7341696,116.3347606,15],{icon: masjidIcon}).bindPopup('mushola bir\'ali').addTo(peta);
    L.marker([-8.7356792,116.3406017,15],{icon: masjidIcon}).bindPopup('masjid Baiturrahman Pejongah').addTo(peta);
    L.marker([-8.7386924,116.3626177],{icon: masjidIcon}).bindPopup('masjid baitul izzah').addTo(peta);
    L.marker([-8.7228917,116.3367393],{icon: sekolahIcon}).bindPopup('MI Al- Ikhtiar Jeruju').addTo(peta);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoia2hhaXJ1ZWxrYWhmaWUiLCJhIjoiY2sxbHVmaGhhMDkyYzNkcGNzaGZxY2g2cCJ9.uDofzgqKLzZoGP0ps4sMPg', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'your.mapbox.access.token'
        }).addTo(peta);

        L.geoJSON([kelebuh], {
            style: function (featur) {
                return featur.properties && featur.properties.style;
            }
        }).addTo(peta); 


</script>

// L.marker([-8.698259, 116.2823649]).addTo(peta)
        //     .bindPopup('STMIK Lombok')
        //     .openPopup();
        // L.marker([-8.6476488, 116.5272865]).addTo(peta)
        //     .bindPopup('Ma Muallimin nw Pancor')
        //     .openPopup();
        // L.marker([-8.7341392,116.340404,15]).addTo(peta)
        //     .bindPopup('Masjid Pengembok')
        //     .openPopup();
        // L.marker([-8.7356792,116.3406017,15]).addTo(peta)
        //     .bindPopup('Masjid Baiturrahaman Pejongah')
        //     .openPopup();
        // L.marker([-8.7341696,116.3347606,15]).addTo(peta)
        //     .bindPopup('Mhusalla Birali')
        //     .openPopup();
        // L.marker([-8.736312,116.3569629,15]).addTo(peta)
        //     .bindPopup('Masjid ashabul maimanah')
        //     .openPopup();

        // var LeafIcon = L.Icon.extend({
        //     options: {
        //         shadowUrl: '<?= base_url('/assets/')?>leaflet/images/market.png',
        //         iconSize: [38, 95],
        //         shadowSize: [50, 64],
        //         iconAnchor: [22, 94],
        //         shadowAnchor: [4, 62],
        //         popupAnchor: [-3, -76]
        //     }
        // });
        // // -8.6322175,116.3466858,
        

        // var greenIcon = L.icon({
        //     iconUrl: '<?= base_url('/assets/')?>leaflet/images/market.png',
        //     iconSize: [25, 25], // size of the icon
        //     iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
        //     popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
        // });

        // L.marker([-8.698259, 116.2823649], { icon: greenIcon }).addTo(peta);