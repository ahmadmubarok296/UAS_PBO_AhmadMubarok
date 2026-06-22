<?php
require_once 'koneksi.php';
require_once 'karyawan_kontrak.php';
require_once 'karyawan_tetap.php';
require_once 'karyawan_magang.php';

$db = new Koneksi();
$query = "SELECT * FROM tabel_karyawan";
$result = $db->conn->query($query);

$karyawanData = [];
while ($row = $result->fetch_assoc()) {
    $karyawanData[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Payroll Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .card { border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border: none; }
        .header-bg { background: linear-gradient(135deg, #4e54c8, #8f94fb); color: white; padding: 2rem; border-radius: 0 0 50px 50px; }
        .badge-tetap { background-color: #28a745; }
        .badge-kontrak { background-color: #fd7e14; }
        .badge-magang { background-color: #0d6efd; }
    </style>
</head>
<body>

<div class="header-bg text-center mb-5">
    <h1>Slip Gaji Karyawan</h1>
    <p>PT. Ahmad Mubarok Corporation</p>
</div>

<div class="container">
    <?php 
    $kategori = ['tetap', 'kontrak', 'magang'];
    foreach ($kategori as $kat): ?>
        <h3 class="mt-4 text-uppercase fw-bold text-secondary"><?php echo $kat; ?></h3>
        <div class="row">
            <?php foreach ($karyawanData as $k): 
                if ($k['jenis_karyawan'] == $kat): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title text-primary"><?php echo $k['nama_karyawan']; ?></h5>
                            <span class="badge badge-<?php echo $kat; ?>"><?php echo $kat; ?></span>
                            <hr>
                            <p><strong>Dept:</strong> <?php echo $k['departemen']; ?></p>
                            <p><strong>Gaji Dasar:</strong> Rp <?php echo number_format($k['gaji_dasar_per_hari']); ?>/hari</p>
                            
                            <div class="alert alert-light border">
                                <?php if($kat == 'tetap') echo "Tunjangan: Rp ".number_format($k['tunjangan_kesehatan']); 
                                      elseif($kat == 'kontrak') echo "Durasi: ".$k['durasi_kontrak_bulan']." Bulan";
                                      else echo "Sertifikat: ".$k['sertifikat_kampus_merdeka']; ?>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-outline-primary">Lihat Detail Slip</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>