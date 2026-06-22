<?php

// --- 3. Subclass KaryawanMagang ---
class KaryawanMagang extends Karyawan {
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    public function __construct($id, $nama, $dept, $hariMasuk, $gaji, $uangSaku, $sertifikat) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gaji);
        $this->uangSakuBulanan = $uangSaku;
        $this->sertifikatKampusMerdeka = $sertifikat;
    }

    public function hitungGajiBersih() {
        return $this->uangSakuBulanan;
    }

    public function tampilkanProfesiKaryawan() {
        return "Magang (Sertifikat: " . $this->sertifikatKampusMerdeka . ")";
    }

    public static function getDataById($conn, $id) {
        $query = "SELECT * FROM tabel_karyawan WHERE id_karyawan = ? AND jenis_karyawan = 'magang'";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>