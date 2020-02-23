<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class SanphamTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        $faker    = Faker\Factory::create('vi_VN');
        $photos = array('dell.jpg','acer.jpg','asus.jpg','macbook.jpg','lg.jpg','samsung.jpg','hp.jpg','lenovo.jpg','xiaomi.jpg');

        for ($i=1; $i <= 30; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ten'                  => "sp_ten $i",
                'sp_giaGoc'               => $i,
                'sp_giaBan'               => $i,
                'sp_hinh'                 => "laptop-$i.jpg",
                'sp_maybo'                => $faker->numberBetween(1,2),
                'sp_thongTin'             => "sp_thong $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $i,
                'l_ma'                    => $faker->numberBetween(1, 9)
            ]);
        }
        DB::table('cusc_sanpham')->insert($list);
    }
}