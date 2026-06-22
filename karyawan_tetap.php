<?php

// --- 2. Subclass KaryawanTetap ---
class KaryawanTetap extends Karyawan {
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id, $nama, $dept, $hariMasuk, $gaji, $tunjangan, $opsiSaham) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gaji);
        $this->tunjanganKesehatan = $tunjangan;
        $this->opsiSahamId = $opsiSaham;
    }

    public function hitungGajiBersih() {
        return ($this->gajiDasarPerHari * 22) + $this->tunjanganKesehatan;
    }

    public function tampilkanProfesiKaryawan() {
        return "Karyawan Tetap dengan ID Saham: " . $this->opsiSahamId;
    }

    public static function getDataById($conn, $id) {
        $query = "SELECT * FROM tabel_karyawan WHERE id_karyawan = ? AND jenis_karyawan = 'tetap'";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}

?>