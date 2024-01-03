<div class="container">
    <div class="row">
        <div class="column-12">
            <h1 align="center">Halaman Manajemen Produk</h1>
            <br>
            <br>
            <br>
        </div>
        <div class="column-12">
            <div class="text-right">
                <a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-success">Tambah Produk</a>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product_list as $Key => $row) { ?>
                        <tr>
                            <td>
                                <?php echo ++$Key ?>.
                            </td>
                            <td>
                                <img src="<?php echo base_url('images/' . $row['product_image']) ?>" width="150">
                            </td>
                            <td>
                                <?php echo $row['product_name'] ?>
                            </td>
                            <td>
                                <?php echo number_format($row['product_price']) ?>
                            </td>
                            <td>
                                <?php echo $row['product_description'] ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('admin/produk/edit/' . $row['id_product']) ?>"
                                    class="btn btn-success">Edit</a>
                                <a href="<?php echo site_url('admin/produk/delete/' . $row['id_product']) ?>"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>