<?php

use Illuminate\Database\Seeder;

class TinTucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $NoiDung = "
    	</h3>Nội dung tin tức: Khoá học Lập trình PHP tại trung tâm đào tạo tin học khoa phạm</h3>
    	<p>
    	<b>Hotline kỹ thuật <b>: 0967 908 907<br>
    	<b>Hotline tư vấn kháo học <b>: 094 276 4080<br>
    	<b>Địa chỉ </b>: 90 Lê Thị Riêng, P.Bến Thành, Q1, TPHCM<br>
    	<b>Website</b>: khoapham.vn<br>
    	<b>Học Online tại :</b>online.khoapham.vn<br>
    	</p>
    	";
        DB::table('TinTuc')->insert([
        
            ['idLoaiTin'=>'3','TieuDe' => 'Thắng cảnh suối nước Vàng','TieuDeKhongDau' => 'Thang-Canh-Suoi-Nuoc-Vang','TomTat' => 'Cách thành phố Bắc Giang chừng 60 km về phía đông bắc, thắng cảnh nước Vàng ở xã Lục Sơn (Lục Nam, Bắc Giang) thuộc khu bảo tồn thiên nhiên Tây Yên Tử là điểm đến đầy kỳ thú cho các chuyến dã ngoại của những du khách “bụi” đi tìm cảm giác mạnh. Độc giả Nguyễn Văn Hưởng viết.','NoiDung' => $NoiDung,'Hinh' => '1.jpg','NoiBat' => 1],
            ['idLoaiTin'=>'3','TieuDe' => 'Nghỉ mát ở thành phố Cebu ','TieuDeKhongDau' => 'Nghi-Mat-O-Thanh-Pho-Cebu','TomTat' => 'Cách Manila 365 dặm về phía nam, Cebu được coi là một trung tâm hành chính thứ hai của Philippines. Cebu còn nổi tiếng bởi những bãi cát trắng sạch và nước biển trong xanh như pha lê. Bạn Kenji Chen chia sẻ. ','NoiDung' => $NoiDung,'Hinh' => '2.jpg','NoiBat' => 1],
           
    	]);
    }
}
