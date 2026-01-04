<?php include 'header.php'; ?>

<h2 class="section-title" data-aos="fade-down">Layanan Publik Lengkap</h2>
<div class="row g-4">
    <?php $layanan = ['Informasi Publik', 'Layanan SPBE', 'Layanan Kesehatan', 'Layanan Pendidikan', 'Info Pajak & Harga', 'Investasi & Perizinan', 'Transparansi Data', 'Destinasi & Mobilitas']; ?>
    <?php foreach($layanan as $i => $item): ?>
    <div class="col-md-3" data-aos="zoom-in" data-aos-delay="<?php echo $i * 100; ?>">
        <div class="card card-hover h-100 shadow-sm">
            <div class="card-body text-center p-4">
                <i class="bi bi-info-circle icon mb-2"></i>
                <h5><?= $item ?></h5>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<a href="index.php" class="btn btn-primary mt-4">← Kembali ke Beranda</a>

<?php include 'footer.php'; ?>