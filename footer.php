<footer class="py-5">
    <div class="container text-center">
        <p class="mb-2">© 2025 Dinas Komunikasi dan Informatika Provinsi Kepulauan Riau</p>
        <p class="mb-2">Jam Layanan: Senin-Kamis 08:00-16:00 | Jumat 08:00-15:00 | Sabtu-Minggu Libur</p>
        <p>Powered by MYSELF</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
AOS.init();

const chartElement = document.getElementById('statChart');
if(chartElement){
    const ctx = chartElement.getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: { 
            labels: ['PDRB', 'Pengangguran', 'Inflasi'], 
            datasets: [{ 
                label: 'Statistik 2025', 
                data: [250, 5.2, 3.1], 
                backgroundColor: ['#007BFF', '#28A745', '#FFC107'] 
            }] 
        },
        options: { 
            scales: { 
                y: { beginAtZero: true } 
            } 
        }
    });
}
</script>

</body>
</html>
