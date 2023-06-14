<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>No Tempat Duduk</th>
            <th colspan="2"><center>Aksi</center></th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            <td><?php echo anchor('admin/invoice/hapus/'.$inv->id, '<div class="btn btn-sm btn-success fa fa-paper-plane"></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>