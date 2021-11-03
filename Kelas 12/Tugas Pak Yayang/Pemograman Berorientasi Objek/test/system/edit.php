<div class="container">
   <div class="row">
       <div class="col-sm-6 mr-auto ml-auto pt-5">
        <h1 class="text-center">Form Data Tambah</h1>
        <form action="proses.php" method="post">
            <div class="form-group">
                <label>NIS : </label>
                <input type="text" class="form-control" value="" name="nis">
            </div>
            <div class="form-group">
                <label>Nama Siswa : </label>
                <input type="text" class="form-control" value="" name="nama_sws">
            </div>
            <div class="form-group">
                <label>Nama Jurusan : </label>
                <input type="text" class="form-control" value="" name="nama_jurusan">
            </div>
            <div class="form-group">
                <label>Nama Kelas : </label>
                <input type="text" class="form-control" value="" name="nama_kelas">
            </div>
            <button type="tambah" name="tambah" value="tambah" class="btn btn-primary">Tambah</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
</div>

<?php  

