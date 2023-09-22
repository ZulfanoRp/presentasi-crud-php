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
                <button type="button" class="btn btn-success" data-toggle="modal"
                  data-target="#createModal">Create</button>
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
                    echo '<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#editModal">Edit</button>';
                    echo '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>';
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

  <!-- Start Create Mahasiswa -->
  <div class="modal fade" id="createModal" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Create Mahasiswa -->

  <!-- Start Edit Mahasiswa -->
  <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Edit Mahasiswa -->

  <!-- Start Delete Mahasiswa -->
  <div class="modal fade " id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">are you sure to delete this data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Delete Mahasiswa -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>