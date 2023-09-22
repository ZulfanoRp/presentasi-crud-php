<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_kampus";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // echo "Koneksi ke database berhasil!";
  
  $sql = "SELECT * FROM tb_mahasiswa";
  $result = $conn->query($sql);
  ?>

  <div class="container">
    <div class="d-flex justify-content-center mt-5">
      <div class="row">

        <div class="card" style="width: 50rem">
          <div class="card-header">
            <div class="row">
              <div class="col">
                <h5>Table Mahasiswa</h5>
              </div>
              <div class="col d-flex justify-content-end">
                <button type="button" class="btn btn-success">Create</button>
              </div>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">NIM</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {

                    echo '<tr>';
                    echo '<th scope="row">' . $row['id_mahasiswa'] . '</th>';
                    echo '<td>' . $row['nama_mahasiswa'] . '</td>';
                    echo '<td>' . $row['umur'] . '</td>';
                    echo '<td>' . $row['jurusan'] . '</td>';
                    echo '<td>';
                    echo '<button type="button" class="btn btn-primary mr-3">Edit</button>';
                    echo '<button type="button" class="btn btn-danger">Delete</button>';
                    echo '</td>';
                    echo '</tr>';
                  }
                } else {
                  echo '<tr>';
                  echo '<td colspan="5" class="text-center">No Data</td>';
                  echo '</tr>';
                }
                $conn->close();
                ?>
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
  </div>
</body>

</html>