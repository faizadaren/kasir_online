<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> EDIT DATA PRODUK</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_barang/update' ?>">
            <div class++="for-grub">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
              <option>minuman dingin</option>
              <option>minuman hangat</option>
              <option>makanan berat</option>
              <option>makanan ringan</option>
            </select>
          </div>

            <div class++="for-grub">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class++="for-grub">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

        </form>

        

    <?php endforeach; ?>
    </section>
</div>