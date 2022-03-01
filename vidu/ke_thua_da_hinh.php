<?php

require "dong_goi_va_truu_tuong.php";
/*
TÍNH Kế thừa

thông qua từ khóa extends kế thừa tất cả các thuộc tính, phương thức của lớp giao_vien
*/

class giaovien_hoa_hoc extends giao_vien {

	protected $loai_bai_hoc ='thực hành';

	public function gioi_thieu() {
		echo 'Xin chào tôi là giáo viên hóa học tên tôi là'. $this->ten;
	}

	public function dayhoc() {
		if( $this->loai_bai_hoc == 'thực hành' ) {
			$this->day_hoc_thuc_hanh();
		}else {
			echo'đang sử dụng: ' . $this->kt_chuyenmon .' và '. $this->kn_supham .' để dạy học';
		}
	}
	public function day_hoc_thuc_hanh() {
		echo " Đến phòng thực hành</br> sử dụng: " . $this->kt_chuyenmon ." và ". $this->kn_supham . " hướng dẫn học sinh thực hành đúng hiểu sâu sắc vấn đề.";
	}
}
class giaovien_tieng_viet extends giao_vien {
	public function gioi_thieu() {
		echo 'Xin chào tôi là giáo viên tiếng việt tên tôi là'. $this->ten;
	}
}

/*
TÍNH Đa hình

Viết lại function giới thiệu
*/
$giao_vien = new giao_vien('Nguyễn Văn A', 'Kiến thức chuyên môn tốt', 'Kỹ năng sư phạm giỏi', 'Nắm bắt tâm lý học sinh tốt' );
$giao_vien_1 = new giaovien_hoa_hoc('Vương Thu Thủy', 'Kiến thức hóa tốt', 'Kỹ năng sư phạm giỏi', 'Nắm bắt tâm lý học sinh tốt' );
$giaovien_2 = new giaovien_tieng_viet('Lương Kim Thu', 'Kiến thức ngữ văn tốt', 'Kỹ năng sư phạm trung bình', 'Nắm bắt tâm lý học sinh khá' );

$giao_vien->gioi_thieu();
echo "</br>";
echo "----------------------------------------";
echo "</br>";
$giao_vien_1->gioi_thieu();
echo "</br>";
$giao_vien_1->lam_viec('ban ngày');
echo "</br>";
echo "----------------------------------------";
echo "</br>";
$giaovien_2->gioi_thieu();
echo "</br>";
$giaovien_2->lam_viec('ban ngày');


