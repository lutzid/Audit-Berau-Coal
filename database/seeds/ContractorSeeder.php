<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

function insertContractor($cont) {
    DB::table('contractors')->insert([
        'name' => $cont,
        'created_at' => Carbon::now('Asia/Jakarta'),
        'updated_at' => Carbon::now('Asia/Jakarta')
    ]); 
}

class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        insertContractor('CV. Alif Pratama');
        insertContractor('CV. Aqualdo');
        insertContractor('CV. Bena Jaya');
        insertContractor('CV. Bintang Azzahra');
        insertContractor('CV. Binungan Jaya');
        insertContractor('CV. Bukit Manimbora');
        insertContractor('CV. Citra Karya Setia');
        insertContractor('CV. Damayanti');
        insertContractor('CV. Derawan Beach Cafe');
        insertContractor('CV. Gamping Jaya');
        insertContractor('CV. Harapanku');
        insertContractor('CV. Haryda Oto');
        insertContractor('CV. Hulu Putra Banua');
        insertContractor('CV. Juwita');
        insertContractor('CV. Karya Amanda');
        insertContractor('CV. Kirana Lestari');
        insertContractor('CV. Langgan Jaya Abadi');
        insertContractor('CV. Megah Jaya Abadi');
        insertContractor('CV. Nusantara Tehnik');
        insertContractor('CV. Putri Dewi');
        insertContractor('CV. Rangga');
        insertContractor('CV. Restu Amanah');
        insertContractor('CV. Rimba Jaya');
        insertContractor('CV. Sambaliung Fiber');
        insertContractor('CV. Santoso Putra Mandiri');
        insertContractor('CV. Sumber Daya Tasuk');
        insertContractor('CV. Surya Wijaya');
        insertContractor('CV. Teguh Harapan');
        insertContractor('CV. Tiara');
        insertContractor('CV. Triana Jaya');
        insertContractor('CV. Tunas Mekar');
        insertContractor('CV. Varissa Jaya');
        insertContractor('Koperasi Banua Sanggam Bersama');
        insertContractor('Koperasi Bersama Kita Bisa');
        insertContractor('Koperasi Bintang Harapan');
        insertContractor('Koperasi Gaai Mandiri');
        insertContractor('Koperasi Karyawan Bina Bersama');
        insertContractor('Koperasi Maju Bersama');
        insertContractor('Koperasi Saturut');
        insertContractor('PT. Abadi Raya Commerce');
        insertContractor('PT. Aditama Putra Grup');
        insertContractor('PT. Aesculap');
        insertContractor('PT. Agricon Putra Citra Optima');
        insertContractor('PT. Agung Buana Rejeki');
        insertContractor('PT. AKR Corporindo');
        insertContractor('PT. Altrak 1978');
        insertContractor('PT. Andalan Multi Kencana');
        insertContractor('PT. Aneka Cahaya Karunia');
        insertContractor('PT. Anugerah Bahtera Lestari');
        insertContractor('PT. Anugrah Sarana Berkat');
        insertContractor('PT. Arcistec International');
        insertContractor('PT. Asian Bulk Logistik');
        insertContractor('PT. Autorent Lancar Sejahtera');
        insertContractor('PT. Aviako Sepinggan');
        insertContractor('PT. Bagong Dekaka Makmur');
        insertContractor('PT. Bandang Mining Coal');
        insertContractor('PT. Bayu Sejati Paser');
        insertContractor('PT. Berca Harydayaperkasa');
        insertContractor('PT. Berkat Jaya Sukses');
        insertContractor('PT. Berkat Teman Sejati');
        insertContractor('PT. Bina Abadi');
        insertContractor('PT. Binungan Mandiri Sejahtera');
        insertContractor('PT. Blasosem Putra');
        insertContractor('PT. Buana Indah Lalebata');
        insertContractor('PT. Budi Harta Lestari');
        insertContractor('PT. Bukit Makmur Mandiri Utama');
        insertContractor('PT. Bumi Hamparan Luas');
        insertContractor('PT. Cahaya Sakti Jaya');
        insertContractor('PT. Cahaya Trijaya Sentosa');
        insertContractor('PT. Cardig Anugerah Sarana Catering');
        insertContractor('PT. Cipta Hydropower');
        insertContractor('PT. Cipta Krida Bahari');
        insertContractor('PT. Citra Alam Semesta');
        insertContractor('PT. Cominco Mitra Perkasa');
        insertContractor('PT. Conbloc Infratecno');
        insertContractor('PT. Dahana');
        insertContractor('PT. Davidi International');
        insertContractor('PT. Dermaga Sukses Jaya Abadi');
        insertContractor('PT. Dharma Lautan Nusantara');
        insertContractor('PT. Dian Ciptamas Agung');
        insertContractor('PT. DNX Indonesia');
        insertContractor('PT. Duta Borneo Mining');
        insertContractor('PT. Dwijaya Sentral Sarana');
        insertContractor('PT. Eka Dharma Jaya Sakti');
        insertContractor('PT. Elnusa Petrofin');
        insertContractor('PT. Eonchemicals Putra');
        insertContractor('PT. Epiroc Southern Asia');
        insertContractor('PT. Episi Sucofindo');
        insertContractor('PT. Equipment Reliability Management');
        insertContractor('PT. E-Tirta Medical Centre');
        insertContractor('PT. Eurotruk Trasindo');
        insertContractor('PT. Fajar Anugerah Dinamika');
        insertContractor('PT. Galva Technovision');
        insertContractor('PT. Gardamas Surya Lestari');
        insertContractor('PT. Garuda Bakti Nusantara');
        insertContractor('PT. Gelar Gatralaras');
        insertContractor('PT. Geosains Enjiniring Nusantara');
        insertContractor('PT. Geoservices');
        insertContractor('PT. Geotechnical & Environmental Service Indonesia');
        insertContractor('PT. Grasindo Pratama');
        insertContractor('PT. Gunung Gaya  Persada');
        insertContractor('PT. Hakiki Inti Sejati');
        insertContractor('PT. Harmoni Mitra Utama');
        insertContractor('PT. Harum Manis Indonesia');
        insertContractor('PT. Hexindo Adiperkasa');
        insertContractor('PT. Hidup Baru Perdana Abadi');
        insertContractor('PT. Hidup Baru Sukses Mandiri');
        insertContractor('PT. Indo Pusaka Berau');
        insertContractor('PT. Indonesia Carbon Energy');
        insertContractor('PT. Intecs Teknikatama Indsutri');
        insertContractor('PT. Jakarta Prima Cranes');
        insertContractor('PT. Kalimantan Teknik Utama');
        insertContractor('PT. Kaliraya Sari');
        insertContractor('PT. Kanitra Mitra Jaya Utama');
        insertContractor('PT. Kasam');
        insertContractor('PT. Kharisma Berkat Sukses');
        insertContractor('PT. Kinend');
        insertContractor('PT. Kirana Berau');
        insertContractor('PT. Limbah Bina Sejahtera');
        insertContractor('PT. Linda Jaya Mandiri');
        insertContractor('PT. Lintas Wahana Indonesia');
        insertContractor('PT. Madhani Talatah Nusantara');
        insertContractor('PT. Majau Inti Jaya');
        insertContractor('PT. Maju Asri Jaya Utama');
        insertContractor('PT. Maju Bersama Binungan');
        insertContractor('PT. Mega Jasa Karya Bersama');
        insertContractor('PT. Megah Mutiara Sakti');
        insertContractor('PT. Mentari Cipta Mandiri');
        insertContractor('PT. MHE Demag');
        insertContractor('PT. Mitra Alam Segara Sejati');
        insertContractor('PT. Mitra Bahtera Segarasejati');
        insertContractor('PT. Mitra Pinasthika Mustika');
        insertContractor('PT. Mitra Sukses Raharja');
        insertContractor('PT. Mitra Usaha Katiga');
        insertContractor('PT. Multi Nitrotama Kimia');
        insertContractor('PT. Multindo Technology Utama');
        insertContractor('PT. Multitama Indonesia');
        insertContractor('PT. Mustika Ganda Utama');
        insertContractor('PT. Mutiara Tanjung Lestari');
        insertContractor('PT. Nuansa Makmur Mandiri');
        insertContractor('PT. Nusa Mandiri');
        insertContractor('PT. Padang Kuring Boga Utama');
        insertContractor('PT. Pamapersada Nusantara');
        insertContractor('PT. Panca Prima Engineering');
        insertContractor('PT. Pancaran Samudera Transport');
        insertContractor('PT. Pangansari Utama');
        insertContractor('PT. Partsindo Servicatama');
        insertContractor('PT. Paz Ace Indonesia');
        insertContractor('PT. Pelayaran Daya Samudera Mandiri');
        insertContractor('PT. Pelayaran Kartika Samudera Adijaya');
        insertContractor('PT. Pelayaran Sanditia Perkasa Maritim');
        insertContractor('PT. Pelayaran Trans Sarana Makmur');
        insertContractor('PT. Permata Dwitunggal Abadi');
        insertContractor('PT. Pertamina Bina Medika');
        insertContractor('PT. Pertamina Patra Niaga');
        insertContractor('PT. Petro Andalan Nusantara');
        insertContractor('PT. Prima Unggul Persada');
        insertContractor('PT. Primadian Mitra Sejati');
        insertContractor('PT. Puncak Makmur Jaya');
        insertContractor('PT. Pusaka Tandi');
        insertContractor('PT. Putra Daerah Mandiri Jaya');
        insertContractor('PT. Rentokil Indonesia');
        insertContractor('PT. Resource Equipment Indonesia');
        insertContractor('PT. Resty Nur');
        insertContractor('PT. Ricobana Abadi');
        insertContractor('PT. Roda Tehnik');
        insertContractor('PT. Salwa Jaya');
        insertContractor('PT. Sambakungan Samburakat Maluang Lati');
        insertContractor('PT. Samburakat Jaya Utama');
        insertContractor('PT. Samudera Berkah Adhiguna');
        insertContractor('PT. Sanggar Sarana Baja');
        insertContractor('PT. Saptaindra Sejati');
        insertContractor('PT. Sarana Langgeng Perkasa');
        insertContractor('PT. Sarana Power Sedaya');
        insertContractor('PT. Satnetcom Balikpapan');
        insertContractor('PT. Segara Persada Nusantara');
        insertContractor('PT. Sejahtera Tridaya Prima');
        insertContractor('PT. Sentratek Adiprestasi');
        insertContractor('PT. Shield On Service');
        insertContractor('PT. Sinar Pagi');
        insertContractor('PT. Smartfren Telecom, Tbk');
        insertContractor('PT. Sucofindo');
        insertContractor('PT. Sumber Makmur Sejahtera Buana');
        insertContractor('PT. Sumber Mitra Binungan');
        insertContractor('PT. Sumber Multi Rejeki');
        insertContractor('PT. Surveyor Carbon Consulting Indonesia');
        insertContractor('PT. Surya Nusantara Perkasa');
        insertContractor('PT. Surya Utama Nuansa');
        insertContractor('PT. Tanjung Harapan Selatan');
        insertContractor('PT. Tata Wisata');
        insertContractor('PT. Taubah Berlian Jaya');
        insertContractor('PT. Terusan Raya');
        insertContractor('PT. Tidung Jaya Mandiri Indonesia');
        insertContractor('PT. Tirta Sarana Borneo');
        insertContractor('PT. Trada Dryship');
        insertContractor('PT. Trakindo Utama');
        insertContractor('PT. Trans Continent');
        insertContractor('PT. Transavia Otomasi Pratama');
        insertContractor('PT. Transkon Jaya');
        insertContractor('PT. Tri Ananda Pratama');
        insertContractor('PT. Trifita Perkasa');
        insertContractor('PT. Tunas Artha Gardatama');
        insertContractor('PT. Tunas Jaya Pratama');
        insertContractor('PT. United Tractors');
        insertContractor('PT. United Tractors Pandu Engineering');
        insertContractor('PT. Utama Alam Energi');
        insertContractor('PT. Valvtrol Indonesia');
        insertContractor('PT. Velseis Indonesia');
        insertContractor('PT. Virtus Facility Services');
        insertContractor('PT. Wahanabhara Bhakti');
        insertContractor('PT. Weir Mineral Indonesia');
        insertContractor('PT. Yerry Primatama Hosindo');
        insertContractor('PT. Yusrina Borneo Quantum');

        //
    }
}
