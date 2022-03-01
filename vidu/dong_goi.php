<?php

/*
TÍNH ĐÓNG GÓI

 Các giáo viên có các đặc tính chung như: 
 - Về thuộc tính đều có:  tên họ, kiến thức chuyên môn, kỹ năng sư phạm, kiến thức tâm lý học, có giáo án..
 - Về hành động đều có:  soạn bài, dạy học, công tác tâm lý cho học sinh, 

 - vậy gộp chúng các thông tin trên lại thành class đã thể hiện tính đóng gói

 class giao_vien	{
	protected $ten, $kt_chuyenmon, $kn_supham, $tamly_hoc, $giaoan;

	public function soan_bai(){}
	public function dayhoc(){}
	public function congtac_tamly(){}
}

*/

 /*
 TÍNH TRỪU TƯỢNG

Thông qua việc đóng gói từ các function chưa triển khai code các hành động trong function dựa vào thông tin 
đang có dựa trên mô tả quá trình thực tế của giáo viên 
*/


class giao_vien	{
	protected $ten, $kt_chuyenmon, $kn_supham, $tamly_hoc, $giaoan;

	public function soan_bai(){
		$this->giaoan = 'soạn giáo án bởi: ' . $this->kt_chuyenmon .' '. $this->kn_supham;
	}
	public function dayhoc(){
		echo'đang sử dụng: ' . $this->kt_chuyenmon .' '. $this->kn_supham .' để dạy học';
	}
	public function congtac_tamly(){
		echo 'đang công tác tâm lý cho học sinh';
	}
}

