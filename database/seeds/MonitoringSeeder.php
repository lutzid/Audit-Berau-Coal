<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertMonitoring($prop, $no, $period, $dc, $site, $date, $auditor, $problem, $location, $obj, $cat, $smkp, $smk3, $ohsas, $iso, $begems, $approver, $status1, $type, $root, $corrective, $due_date1, $pj1, $eviden, $preventive, $due_date2, $pj2, $status2, $expired, $reason, $note, $statusFinal) {
    DB::table('plors')->insert([
        'proposer' => $prop,
        'no_nc' => $no,
        'audit_period' => $period,
        'depcont' => $dc,
        'site' => $site,
        'date' => $date,
        'auditor' => $auditor,
        'problem' => $problem,
        'location' => $location,
        'object' => $obj,
        'category' => $cat,
        'smkp' => $smkp,
        'smk3' => $smk3,
        'ohsas' => $ohsas,
        'iso' => $iso,
        'begems' => $begems,
        'approver' => $approver,
        'status1' => $status1,
        'type' => $type,
        'root' => $root,
        'corrective' => $corrective,
        'due_date1' => $due_date1,
        'pj1' => $pj1,
        'eviden' => $eviden,
        'preventive' => $preventive,
        'due_date2' => $due_date2,
        'pj2' => $pj2,
        'status2' => $status2,
        'expired' => $expired,
        'reason' => $reason,
        'note' => $note,
        'statusFinal' => $statusFinal,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        insertMonitoring('Anisa Nanhidayah', '1', '1', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten memantau Sub-Kontraktornya dalam penerapan Log Out-Tag Out (LOTO)', 'Pit Stop SIS - SMO', '1. Beberapa karyawan UT yang melakukan pekerjaan pada EX2000-0026, belum seluruhnya memasang LOTO 2. Pada pekerjaan di PC 1250-013 tidak ditemukan personal lock PJ Teknis berwarna kuning', 'Minor', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Kurangnya pemahaman mekanik terkait pemasangan LOTO, pada saat aktivitas, belum terdistribusikannya personal lock (gembok) warna kuning untuk pengawas di pit stop', 'Pemasangan LOTO pada unit yang sedang diwashing, sebelum ada perbaikan unit, pendistribusian gembok kuning untuk dipasang pada pekerjaan mantenance oleh pengawas', '2019-1-20', 'Belum diisi', 'Belum diisi', 'Sosialisasi penggunaan LOTO pada mekanik, penyediaan gembok warna kuning untuk pengawas teknis di lapangan (pit stop)', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close'); 
        insertMonitoring('Anisa Nanhidayah', '2', '2', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan pemeliharaan/perawatan peralatan', 'Pit Stop SIS - SMO', 'Ditemukan sampel HD 156, alarm fatique tidak berfungsi dengan baik sesuai dengan F-CMP-08.07_Formulir Pemeriksaan Kelayakan A2B, Truck, Crane, Alat Angkut Peledak', 'Minor', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Kurang kontrol dalam pengisian KIP (Kartu Inspeksi Peralatan)bdi saat pengecekan tabung acetylene untuk digunakan', 'Dilakukan pengisian KIP tabung acetylene saat inspeksi sebelum digunakan sesuai bulan', '2019-1-15', 'Belum diisi', 'Belum diisi', 'Sosialisasi pengisisan KIP saat pengecekan peralatan kepada mekanik, inspeksi peralatan oleh pengawas sebelum pekerjaan dimulai', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '3', '3', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan pemeliharaan/perawatan peralatan', 'Area Dumping elevasi 40 PT SIS - SMO', 'Ditemukan sampel HD 156, alarm fatique tidak berfungsi dengan baik sesuai dengan F-CMP-08.07_Formulir Pemeriksaan Kelayakan A2B, Truck, Crane, Alat Angkut Peledak', 'Minor', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Kurangnya kontrol dan monitoring pemeriksaan terkait alarm fatigue', 'Melakukan perbaikan alarm fatigue unit HD 156', '2019-1-30', 'Belum diisi', 'Belum diisi', 'Dilakukan pengecekan alarm fatigue disaat unit sedang periodical inspection', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '4', '4', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan prosedur pengelolaan kelelahan (fatigue)', 'Area Dumping elevasi 40 PT SIS - SMO', 'Pada saat audit dilapangan yang dilaksanakan sampai pukul 16.10, pengawas belum dilakukan tes fatigue untuk operator-operator HD yang sedang mengerjakan dumping OB', 'Minor', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Kurangnya kontrol dan konsistensi pelaksanaan test fatigue, karena formulir/checklist test fatgue habis', 'Pelaksanaan tes fatigue di saat jam kritis oleh pengawas penimbunan, penyediaan checklist/formulir di pos', '2019-1-20', 'Belum diisi', 'Belum diisi', 'Sosialisasi kepada pengawas penimbunan untuk pelaksanaan test fatigue agar dijalankan secara konsistens, monitoring pelaksanaan test fatigue', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '5', '5', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS belum konsisten di dalam pemenuhan Elemen II SMKP', 'Office PT SIS - SMO', 'SOP HIRA & EAIA DC (SHE/08/001/SOP) PT SIS belum  sesuai ketentuan yang dipersyaratkan oleh SMKP seperti : komunikasi & konsultasi risiko, serta penetapan konteks risiko', 'Minor', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Kurangnya kontrol dalam update legal di dalam SOP HIRA (SHE/08/001/SOP)', 'Meminta HO PT SIS terkait update SOP HIRA & EAIA DC yang sudah direvisi', '2019-1-20', 'Belum diisi', 'Belum diisi', 'Memonitoring update legal di dalam HIRA yang sudah direview', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '6', '6', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'Kurangnya fasilitas keselamatan pada area pembangunan workshop baru PT SIS BMO', 'Pembangunan Workshop SIS BMO oleh CV Putri Dewi', ' Perlunya penempatan APAR untuk area kerja office dan warehouse CV Putri Dewi mengingat adanya bahan bakar yang disimpan di dalam warehouse', 'Observasi', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Penempatan APAR belum mempertimbangkan radius dan potensi bahaya kebakaran di area werehouse dan office', 'Menambah APAR di area office dan werehouse', '2019-1-31', 'Belum diisi', 'Belum diisi', 'dengan mempehitungkan tingkat risiko', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '7', '7', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum konsisten dalam implementasi pelaksanaan pemeliharaan / perawatan peralatan pertambangan', 'Pit Stop C2 SIS - BMO', 'PC 2000-8 ditemukan 1. Mekanik AC yang belum memasang personal danger tag 2. Mekanik PT Intecs yang menggunakan danger tag PT RBA untuk bekerja di area PT SIS ...', 'Minor', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open');
        insertMonitoring('Anisa Nanhidayah', '8', '8', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum konsisten dalam memonitor Sub-Kontraktornya (CV Putri Dewi) dalam pelaksanaan inspeksi alat bantu kerja', 'Pembangunan workshop SIS - BMO', 'Pada saat audit di lapangan ditemukan :
      1. Peralatan kelistrikan yang tidak dilakukan inspeksi
      2. Full body harness belum dilakukan inspeksi 
      ...', 'Minor', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Jadwal & Pelaksanaan inspeksi lokasi project saat ini belum mengakomodir semua objek inspeksi yang berada di pembangunan workshop baru', 'Membuat jadwal inspeksi lokasi project lebih detail', '2019-1-2', 'Belum diisi', 'Belum diisi', 'Melakukan kegiatan inspeksi mengacu pada jadwal yang sudah dibuat dan dimonitor follow upnya', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '9', '9', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS belum konsisten di dalam memenuhi elemen II SMKP', 'Office PT SIS - BMO', 'SOP HIRA & EAIA DC (SHE/08/001/SOP) PT SIS belum  sesuai ketentuan yang dipersyaratkan oleh SMKP seperti : komunikasi & konsultasi risiko, serta penetapan konteks risiko', 'Minor', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Ruang lingkup telah direvisi pada dokumen SHE/08/001/STD revisi 4', 'Mengumpulkan dokkumen SHE/08/001/STD', '2019-1-15', 'Belum diisi', 'Belum diisi', 'Melakukan review secara berkala', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');
        insertMonitoring('Anisa Nanhidayah', '10', '10', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum update mengenai refrensi peraturan tebaru 2018 pada prosedur kerjanya', 'Office PT SIS - BMO', 'Pada saat audit dokumen ditemukan beberapa sampel prosedur kerja belum mencantumkan peraturan terbaru.', 'Minor', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', '', 'Anisa Nanhidayah', 'in Lead Auditor', 2, 'Saat ini SOP masih progress revisi', 'Melakukan revisi refrensi peraturan terbaru untuk SOP ', '2019-3-31', 'Belum diisi', 'Belum diisi', 'Melakukan revisi SOP secara berkala', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Close');

        //
    }
}
