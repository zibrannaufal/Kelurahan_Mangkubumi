@extends('layouts.main')

@section('container')
    <h4 class="text-center" style="margin-left: 200px"><b>Peta Kelurahan Mangkubumi</b></h4>
    <br>
    <div id="mapid" style="height: 400px; width: 1365px;">
        <script>
            var map = L.map('mapid').setView([-7.346656664714616, 108.18735211758994], 13);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            L.marker([-7.346656664714616, 108.18735211758994]).addTo(map)
                .bindPopup('<b>Kantor Kelurahan Mangkubumi</b>').openPopup();
        </script>
    </div>
    <br>
    <h5 class="text-center" style="margin-left: 200px">URL map  :<a href="https://maps.app.goo.gl/Cjkw2cX1vBisYi276">https://maps.app.goo.gl/Cjkw2cX1vBisYi276</a></h5>
    <h5 class="text-center" style="margin-left: 200px">Koordinat : -7.346656664714616, 108.18735211758994</h5>
    <br>
@endsection