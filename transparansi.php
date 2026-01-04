<?php include 'header.php'; ?>

<h2 class="section-title" data-aos="fade-down">Transparansi Keuangan Daerah Lengkap</h2>
<div class="row g-4">
    <?php $trans = ['Perencanaan Anggaran Daerah', 'Laporan Keuangan Daerah', 'Peraturan Daerah Tentang APBD', 'Pertanggungjawaban Keuangan', 'Penyelenggaraan Pemda (LPPD)', 'Kinerja Instansi Pemerintah (LKIP)', 'Kebijakan Umum']; ?>
    <?php foreach($trans as $i => $item): ?>
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
        <div class="card card-hover shadow-sm">
            <div class="card-body">
                <i class="bi bi-file-earmark-text icon me-2"></i><?= $item ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<a href="index.php" class="btn btn-primary mt-4">← Kembali ke Beranda</a>

<?php include 'footer.php'; ?>