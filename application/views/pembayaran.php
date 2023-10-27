<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h4>Total Belanjaan Anda: Rp. ".number_format($grand_total,0,',','.')."</h4>";
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url('dashboard/proses_pesanan')?>" method="post">
                <div class="form-group">
                    <label>NAMA LENGKAP</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>ALAMAT LENGKAP</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>NO TELEPON</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>JASA PENGIRIMAN</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                <div class="form-group mt-3">
                    <label>PILIH BANK</label>
                    <select class="form-control">
                        <option>BCA - xxxxxxxxx</option>
                        <option>BNI - xxxxxxxxx</option>
                        <option>BRI - xxxxxxxxx</option>
                        <option>Mandiri - xxxxxxxxx</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>

            <?php
            } else {
                echo "<h4>Keranjang Belanja Anda Masih Kosong";
            }
            ?>
                
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
