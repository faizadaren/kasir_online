<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="btn btn-sm btn-success"><?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Pesanan Anda: Rp. ".number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>
            <h3>Input Data Pesanan</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

                <div class="form-groub">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-groub">
                    <label>No Tempat Duduk</label>
                    <input type="int" name="alamat" placeholder="Nomor Tempat Duduk Anda" class="form-control">
                </div>

                <div class="form-groub">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                

                <div class="form-groub">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option>Tunai</option>
                        <option>Barcode</option>
                    </select>
                </div><br><br>

                <button type="submit" class="btn btn-sm btn-primary">Pesan </button>
            </form>
            <?php
            }else
                {
                    echo " <h4>Keranjang Belanja Anda Masih Kosong";
                }
            ?>
        </div>

        
        <div class="col-md-2"></div>
    </div>
</div>