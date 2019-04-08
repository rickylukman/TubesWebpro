  <div class="container">
    <div class="box">
      <h2>Data Ongkir</h2>
      <p>Tabel Data Ongkir Telkom Univerity</p>            
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH MAHASISWA</button> -->
      <br><br>
      <table class="table table-bordered" id="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Kota</th>
            <th>Reguler</th>
            <th>Extra</th>
            <th>Kilat</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; foreach ($data as $d ) {?>
          <tr>
        <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
            <form action="">
              <td><?php echo $no++ ?></td>
              <td><?php echo $d->kota ?></td>
              <td><?php echo $d->reguler ?></td>
              <td><?php echo $d->extra ?></td>
              <td><?php echo $d->kilat ?></td>
            </form>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>