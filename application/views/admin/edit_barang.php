<div class="container-fluid">
    <h3><i class="fas fa-fw fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($barang as $brg) : ?>
        <form action="<?= base_url('admin/data_barang/update')?>" method="post">
            <div class="for-group">  
                <label>NAMA BARANG</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg?>">
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg?>">
            </div>
            <div class="for-group">  
                <label>KETERANGAN</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan?>">
            </div>
            <div class="for-group">  
                <label>CATEGORI</label>
                <input type="text" name="categori" class="form-control" value="<?= $brg->categori?>">
            </div>
            <div class="for-group">  
                <label>HARGA</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg->harga?>">
            </div>
            <div class="for-group">  
                <label>STOK</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg->stok?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>
        </form>
    <?php endforeach; ?>
</div>