<?php include 'header.php'; ?>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title text-center mb-4">Peta Provinsi Kepulauan Riau</h2>
        <p class="text-center mb-4">
            Peta administratif wilayah Kepulauan Riau beserta titik lokasi kota dan kabupaten.
        </p>

        <div class="card shadow-lg">
            <div class="card-body text-center">

                <div class="peta-wrapper mx-auto">
                    <img src="aset/peta_kepri1.png" class="img-fluid rounded shadow-sm" alt="Peta Provinsi Kepulauan Riau">

                    <div class="titik" style="top: 62%; left: 22%;" title="Kota Batam">Batam</div>
                    <div class="titik" style="top: 68%; left: 19%;" title="Kabupaten Karimun">Karimun</div>
                    <div class="titik" style="top: 58%; left: 28%;" title="Kabupaten Bintan">Bintan</div>
                    <div class="titik" style="top: 64%; left: 29%;" title="Kota Tanjungpinang">TPI</div>
                    <div class="titik" style="top: 80%; left: 29%;" title="Kabupaten Lingga">Lingga</div>
                    <div class="titik" style="top: 27%; left: 51%;" title="Kabupaten Kepulauan Anambas">Anambas</div>
                    <div class="titik" style="top: 14%; left: 70%;" title="Kabupaten Natuna">Natuna</div>
                </div>

                <small class="text-muted d-block mt-3">
                    *Titik lokasi digunakan untuk visualisasi posisi wilayah kabupaten/kota.
                </small>

            </div>
        </div>

    </div>
</section>

<style>
    .peta-wrapper {
        position: relative;
        display: inline-block;
        max-width: 1000px;
        width: 100%;
    }

    .titik {
        position: absolute;
        transform: translate(-50%, -50%);
        background: #dc3545;
        color: white;
        font-size: 12px;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 15px;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.25);
        border: 2px solid #fff;
        white-space: nowrap;
    }

    .titik:hover {
        background: #007BFF;
        transform: translate(-50%, -50%) scale(1.08);
        transition: 0.2s;
    }
</style>

<?php include 'footer.php'; ?>
