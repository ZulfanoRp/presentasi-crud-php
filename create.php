<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <div class="row">
                <div class="card" style="width: 50rem">
                    <div class="card-header">
                        <div class="row">
                            <div>
                                <!-- <a href=""><i class="bi bi-arrow-left-square-fill"></i> Back</a> -->
                                <a href="index.php" class="btn btn-secondary"><i
                                        class="bi bi-arrow-bar-left"></i>Back</a>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <h5>Create Mahasiswa</h5>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="number" class="form-control" id="id_mahasiswa" name="id_mahasiswa"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                                    required>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="number" class="form-control" id="umur" name="umur">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan">
                            </div>

                            <div class="row">
                                <div class="col d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary" name="submit"
                                        value="save">Submit</button>
                                </div>
                            </div>
                        </form>

                        <?php
                        include 'config.php';

                        if (isset($_POST['submit'])) {
                            $id_mahasiswa = $_POST['id_mahasiswa'];
                            $nama_mahasiswa = $_POST['nama_mahasiswa'];
                            $umur = $_POST['umur'];
                            $jurusan = $_POST['jurusan'];

                            $datas = mysqli_query($conn, "INSERT INTO tb_mahasiswa (id_mahasiswa,nama_mahasiswa,umur,jurusan) values ('$id_mahasiswa', '$nama_mahasiswa', '$umur', '$jurusan' )") or die(mysqli_error($conn));
                            header('Location: index.php');
                            exit();
                        }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>