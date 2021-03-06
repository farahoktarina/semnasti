<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h3 style="text-align:center">DAFTAR PESERTA YANG LUNAS</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <a href="<?php echo site_url('Export/export_excellunas');?>" class="btn btn-success">Export Excel</a>
  </div>
</div>
<div class="row">
    <div class="col-md-12">
      <table class="table table-striped" style="margin:10px">
        <thead>
          <th>#</th>
          <th>PIN</th>
          <th>Nama Lengkap</th>
          <th>Email</th>
          <th>No. HP</th>
          <th>Kategori</th>
          <th>Instansi</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Tgl Lunas</th>
          <th style="colspan:2">Status</th>
        </thead>
        <tbody>
          <?php
          $no=1;
          foreach ($lunas as $key){ ?>
            <tr>
              <th><?php echo $no++?></th>
              <td><?php echo $key['pin'] ?></td>
              <td><?php echo $key['name'] ?></td>
              <td><?php echo $key['email'] ?></td>
              <td><?php echo $key['telp'] ?></td>
              <td><?php echo $key['kategori'] ?></td>
              <td><?php echo $key['instansi'] ?></td>
              <td><?php echo $key['jurusan'] ?></td>
              <td><?php echo substr(strip_tags($key['alamat']),0,20)?> <?php echo strlen(strip_tags($key['alamat']))>20 ? "..." : ""?></td>
              <td><?php echo date('M j, Y h:i a', strtotime($key['created_at']))?></td>
             <td>
				<a href="#" class="btn btn-sm btn-primary">Edit</a>
                <a href="<?php echo base_url('admin/belumLunas/'.$key['pin']);?>" class="btn btn-sm btn-danger">Belum Lunas</a>
              </td>
            </tr>
         <?php }?>
        </tbody>
      </table>
      <div class="text-center">

      </div>
    </div>
</div>
