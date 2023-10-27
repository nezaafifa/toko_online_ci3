<div class="container-fluid">  
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-fw fa-plus"></i>  Tambah Barang</button>

    <table class="table table-bordered mt-3">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>CATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $no=1; 
        foreach($barang as $brg) : ?>
            <tr>
                <td><?= $no++ ;?></td>
                <td><?= $brg->nama_brg ;?></td>
                <td><?= $brg->keterangan ;?></td>
                <td><?= $brg->categori ;?></td>
                <td><?= $brg->harga ;?></td>
                <td><?= $brg->stok ;?></td>
                <td><?= anchor('admin/data_barang/detail/'. $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-fw fa-search-plus"></i></div>')?></td>
                <td><?= anchor('admin/data_barang/edit/'. $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-fw fa-edit"></i></div>')?></td>
                <td><?= anchor('admin/data_barang/hapus/'. $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></div>')?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_barang/tambah_aksi')?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>NAMA BARANG</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control">
            </div>
            <div class="form-group">
                <label>KETERANGAN</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label>CATEGORI</label>
                <select class="form-control" name="categori">
                  <option value="Elektronik">Elektronik</option>
                  <option value="Pakaian Pria">Pakaian Pria</option>
                  <option value="Pakaian Wanita">Pakaian Wanita</option>
                  <option value="Pakaian Anak Anak">Pakaian Anak Anak</option>
                  <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                </select>
            </div>
            <div class="form-group">
                <label>HARGA</label>
                <input type="text" name="harga" id="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>STOK</label>
                <input type="text" name="stok" id="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>GAMBAR PRODUK</label><br>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>