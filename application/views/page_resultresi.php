<div class="container">
	<div class="box">
		<h3>Hasil Pencarian</h3>
		<hr>
		<table class="table table-bordered" id="table">
			<thead>
          		<tr>
            		<th>invoice</th>
            		<th>penerima</th>
		            <th>pengirim</th>
            		<th>alamat</th>
            		<th>kota</th>
            		<th>deskripsi</th>
            		<th>status</th>
          		</tr>
        	</thead>
        	<tbody>
				<?php 
				if(count($cari)>0) {
					foreach ($cari as $data) { ?>
						<td><?php echo $data->invoice ?></td>
						<td><?php echo $data->penerima ?></td>
						<td><?php echo $data->pengirim ?></td>
						<td><?php echo $data->alamat ?></td>
						<td><?php echo $data->kota ?></td>
						<td><?php echo $data->deskripsi ?></td>
						<td><?php echo $data->status ?></td>
					<?php }
				} else {
					echo "Data tidak ditemukan";
				} 
				?>
			</tbody>
		</table>
	</div>
</div>