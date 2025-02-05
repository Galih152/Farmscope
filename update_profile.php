<?php
  include 'servernya/tes_koneksi.php'; // Sesuaikan dengan file koneksi yang Anda gunakan.
  session_start();
  $id_user = $_SESSION['id_user'];

  // Ambil data dari formulir
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $foto = $_FILES['foto']['name'];
    $username = $_POST['username'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Update data user
    $sql = "UPDATE user SET foto = '$foto', username = '$username', nohp = '$nohp', alamat = '$alamat', latitude = '$latitude', longitude = '$longitude' WHERE id_user = '$id_user'";
     // Sesuaikan dengan cara Anda menyimpan ID pengguna


      if ($conn->query($sql)){

        // Pindahkan file gambar ke direktori yang diinginkan
        $target_dir = "peternak/foto_profil/"; // Sesuaikan dengan direktori penyimpanan gambar
        $target_file = $target_dir . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

        header ('Location: profile.php');
        die();
    } else {
      echo "Error: ". $conn->error;
    }

    // Tutup koneksi database
    $pdo = null;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Diri</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="">
    </script>
    <style>
        /* Custom styling for centering the form */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            max-width: 500px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <?php
      $sql = "SELECT * FROM user WHERE id_user =" . $_SESSION['id_user'];
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
    ?>
    <form method="post" enctype="multipart/form-data">
      <div class="form-container">
          <h2 class="text-center mb-4">Form Update Diri</h2>

          <div class="mb-3">
              <label for="foto" class="form-label">Poto Profile</label>
              <input type="file" name="foto" id="foto" class="form-control" accept="image/*" />
          </div>

          <!-- Nama -->
          <div class="mb-3">
              <label for="username" class="form-label">Nama</label>
              <input type="text" name="username" id="username" value="<?php echo $row["username"]?>" class="form-control" />
          </div>

          <!-- Nomor Telepon -->
          <div class="mb-3">
              <label for="nohp" class="form-label">Nomor Telepon</label>
              <input type="tel" name="nohp" id="nohp" <?php echo $row["nohp"] && "value='". $row["nohp"] ."'"?> class="form-control" />
          </div>

          <!-- Alamat -->
          <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea name="alamat" id="alamat" <?php echo $row["alamat"] && "value='". $row["alamat"] ."'"?> class="form-control"></textarea>
          </div>

          <div class="form-group" style="display: none;">
            <label>Latitude</label>
            <input class="form-control" id="latitude" name="latitude">
        </div>

        <div class="form-group" style="display: none;">
            <label>Longitude</label>
            <input class="form-control" id="longitude" name="longitude">
        </div>

        <div class="form-group" style="display: none;">
            <label>Lokasi</label>
            <input class="form-control" id="lokasi" name="lokasi">
        </div>

          <!-- Lokasi -->
        <div class="form-group">
          <label for="lokasiBtn"></label>
          <button type="button" id="lokasiBtn" class="btn btn-primary">lokasi saya</button>
        </div>
        <h1>View Map</h1>

        <div class="row">
        <div class="col-sm-7">
            <div id="map" style="width: 450px; height: 200px;"></div>
        </div>
      </div>

          <!-- Tombol Submit -->
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>

    <script>
       var map = L.map('map').setView([-6.5941819, 106.785877], 13);

      const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      var latInput = document.querySelector("#latitude");
      var lngInput = document.querySelector("#longitude");
      var lokasiInput = document.querySelector("#lokasi");
      var alamatInput = document.querySelector("#alamat");

      var curLocation = [-6.5941819, 106.785877];

      map.attributionControl.setPrefix(false);

      var marker = new L.marker(curLocation, {
        draggable: true,
      });

      marker.on('dragend', function (event) {
        var position = marker.getLatLng();
        marker.setLatLng(position);
        marker.bindPopup(position).update();
        latInput.value = position.lat;
        lngInput.value = position.lng;
        lokasiInput.value = position.lat + "," + position.lng;
      });

      map.addLayer(marker);

      map.on("click", function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
          marker = L.marker(e.latlng).addTo(map);
        } else {
          marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
        lokasiInput.value = lat + "," + lng;
        // Perbarui alamat dengan geocoding
        $.ajax({
          type: "GET",
          url: "https://nominatim.openstreetmap.org/reverse",
          data: {
            format: "json",
            lat: lat,
            lon: lng,
          },
          success: function (response) {
            alamatInput.value = response.display_name;
          },
          error: function (xhr, status, error) {
            console.error("Error: " + error);
          },
        });
      });

      // document.getElementById("submitBtn").addEventListener("click", function () {
      //   var latitude = latInput.value;
      //   var longitude = lngInput.value;

      //   // Kirim data ke server dengan AJAX
      //   fetch('/NYOBA-GEO/save_location.php', {
      //     headers: {
      //       'Content-Type' : 'application/json'
      //     },
      //     method : 'POST',
      //     body : JSON.stringify({
      //       latitude: latitude,
      //       longitude: longitude ,
      //     })
      //   }).then(res=>res.json())
      //   .then(console.log)
      //   .catch(console.log)
      // });

        document.getElementById("lokasiBtn").addEventListener("click", function () {
        // Try to get the user's current location
        navigator.geolocation.getCurrentPosition(
            function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Update input fields with the obtained values
                latInput.value = latitude;
                lngInput.value = longitude;
                lokasiInput.value = latitude + "," + longitude;

                // Update the map view and add a marker at the new location
                map.setView([latitude, longitude], 13);
                marker.setLatLng([latitude, longitude]);

                // Optionally, you can also update the address using reverse geocoding here
            },
            function (error) {
                console.error("Error getting location: ", error);
                alert("Error getting your location. Please make sure location services are enabled.");
            }
        );
    });
    </script>
</body>

</html>
