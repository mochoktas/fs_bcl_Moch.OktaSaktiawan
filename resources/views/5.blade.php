@extends('Layouts/main')
@section('title_page','location')
@section('title','location')
@section('content')

<button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#default">
    Add Location
</button>
<br>
<!--Basic Modal -->
<div class="row">
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Input Location</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('5.store') }}" method="post">
                    <div class="modal-body">

                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="basicInput">nomor armada</label>
                                    <input type="text" class="form-control" id="no_armada" name="no_armada" required placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Latitude</label>
                                    <input type="text" class="form-control" id="latitudes" name="latitude" required placeholder="Enter Latitude">
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Longitude</label>
                                    <input type="text" class="form-control" id="longitudes" name="longitude" required placeholder="Enter Longitude">
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-info ml-1" onclick="getLocation()">Generate Location</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="map" style="width: 100%; height: 500px;"></div>

@endsection
@section('css_custom')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
@endsection
@section('js_custom')
<script>
    var map = L.map('map').setView([0, 0], 2);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Fetch all armada and add to map
    var armadas = @json($armada);

    armadas.forEach(function(armada) {
        L.marker([armada.latitude, armada.longitude]).addTo(armada)
            .bindPopup(armada.nomor_armada);
    });
</script>
<script>
    var x = document.getElementById("latitudes");
    var y = document.getElementById("longitudes");
    // var latitude_user;
    // var longitude_user;
    // var accuracy_user;
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.value = "Geolocation is not supported by this browser.";
            y.value = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.value = position.coords.latitude;
        y.value = position.coords.longitude;
        // latitude_user = position.coords.latitude;
        // longitude_user = position.coords.longitude;
    }
</script>
@endsection