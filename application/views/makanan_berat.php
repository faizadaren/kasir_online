<div class="container-fluid">
    <div class="row text-center mp-4">

        <?php foreach ($makanan_berat as $brg) : ?>
          <div class="card ml-3 mb-3" style="width: 16rem;">
          <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" style="width: 255px; height: 240px; object-center: objeck-cover; object-position: 100% 0;" class="card-img-top" alt="card-img-cap">
              <div class="card-body">
              <h5 class="card-title mn-1"><?php echo  $brg->nama_brg ?></h5>
              <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga , 0,',','.')  ?></span><br>
             <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>')?>
             <?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>')?>
             
             </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>