<?php include('inc/header.php'); ?>
<?php include('inc/nav.php'); ?>

<div class="container text-white">
    <section id="content">
        <div class="content-blog">
            <div class="page_header text-center py-5">
                <h2>Checkout Form</h2>
                <p>Silahkan isi biodata dan informasi pengiriman di bawah ini</p>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="billing-details text-center">
                            <h3 class="uppercase">Detail Pembayaran</h3>
                            <div class="space30"></div>
                            <form id="checkoutForm" action="orders.php" method="post">
                                <!-- Form Data -->
                                <label>Kota</label>
                                <select class="form-control" name="kota" required>
                                    <option value="">Pilih Kota Tujuan</option>
                                    <option value="SY">Surabaya</option>
                                    <option value="SD">Sidoarjo</option>
                                    <option value="KD">Kediri</option>
                                    <option value="BG">Bogor</option>
                                    <option value="NW">Ngawi</option>
                                    <option value="AH">Aceh</option>
                                    <option value="BD">Bandung</option>
                                    <option value="JT">Jakarta</option>
                                    <option value="NJ">Nganjuk</option>
                                    <option value="SR">Semarang</option>
                                </select>
                                <div class="clearfix space20"></div>

                                <label>Atas Nama</label>
                                <input class="form-control" name="atas_nama" placeholder="" type="text" required>
                                <div class="clearfix space20"></div>

                                <label>Jumlah Reservasi</label>
                                <input class="form-control" name="jumlah_reservasi" placeholder="" type="text" required>
                                <div class="clearfix space20"></div>

                                <label>Alamat Pemesan</label>
                                <input class="form-control" name="alamat_pemesan" placeholder="Alamat lengkap Pemesan" type="text" required>
                                <div class="clearfix space20"></div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Kota</label>
                                        <input class="form-control" name="kota_pemesan" placeholder="Kota" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Negara</label>
                                        <input class="form-control" name="negara" placeholder="Negara" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kode Pos</label>
                                        <input class="form-control" name="kode_pos" placeholder="Kode Pos" type="text" required>
                                    </div>
                                </div>
                                <div class="clearfix space20"></div>

                                <label>Alamat Email</label>
                                <input class="form-control" name="email" placeholder="" type="text">
                                <div class="clearfix space20"></div>

                                <label>No. Handphone</label>
                                <input class="form-control" name="no_handphone" placeholder="" type="text" required>
                                <div class="clearfix space20"></div>

                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Tambahkan Keterangan jika ada..." rows="4"></textarea>
                                <div class="clearfix space20"></div>

                                <h4 class="heading text-center">Metode Pembayaran</h4>
                                <div class="clearfix space20"></div>

                                <div class="payment-method mt-5">
                                    <div class="row d-flex">
                                        <div class="col-md-4">
                                            <input name="payment" value="Bank Transfer" id="radio1" class="mr-2 css-checkbox" type="radio" required><span>Bank Transfer</span>
                                            <p>BNI: 11112222233334444 (Ani)</p>
                                        </div>
                                        <div class="col-md-4">
                                            <input name="payment" value="Cash" id="radio2" class="mr-2 css-checkbox" type="radio" required><span>Cash</span>
                                            <p>Bawa uang cash yang pas ke tempat pembayaran.</p>
                                        </div>
                                        <div class="col-md-4">
                                            <input name="payment" value="Lainnya" id="radio3" class="mr-2 css-checkbox" type="radio" required><span>Lainnya</span>
                                            <p>Chat admin untuk metode lainnya.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix space30"></div>

                                <button type="button" class="btn btn-light font-weight-bold" data-toggle="modal" data-target="#paymentModal">Bayar Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Pilih Opsi Lanjutan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Silakan pilih salah satu opsi berikut untuk melanjutkan pembayaran:
            </div>
            <div class="modal-footer">
                <a href="https://wa.me/6285156913813" target="_blank" class="btn btn-success">Chat via WhatsApp</a>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('checkoutForm').submit();">Lihat Struk Pembelian</button>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
