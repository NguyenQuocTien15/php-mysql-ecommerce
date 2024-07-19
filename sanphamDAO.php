<?php
    include_once "db.php";
    class sanphamDAO extends db{
        public function addSanPham($ma,$ten,$gia,$mota,$hinh,$loaidanhmuc){
            $add=parent::$connection->prepare("INSERT INTO `sanpham`(`masanpham`, `tensanpham`, `gia`, `mota`, `hinh`, `madanhmuc`) VALUES ('{$ma}','{$ten}','{$gia}','{$mota}','{$hinh}','{$loaidanhmuc}')");
            $add->execute();
        }
        public function dellSanPham($ma){
            $del = parent::$connection->prepare("DELETE FROM `sanpham` WHERE `masanpham` = '{$ma}'");
            $del->execute();
        }
        public function updateSanPham($ma,$ten,$gia,$mota,$hinh,$loaidanhmuc){
            $update=parent::$connection->prepare("UPDATE `sanpham` SET `tensanpham`='{$ten}',`gia`='{$gia}',`mota`='{$mota}',`hinh`='{$hinh}',`madanhmuc`='{$loaidanhmuc}' WHERE `masanpham`='{$ma}'");
            $update->execute();
        }
        public function getAllSanPham(){
            $all = parent::$connection->prepare("SELECT * FROM `sanpham`");
            $item =[];
            $all->execute();
            $item=$all->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
        public function getAllSanPhamtheoDanhMuc($madanhmuc){
            $all = parent::$connection->prepare("SELECT * FROM `sanpham` WHERE `madanhmuc` = '{$madanhmuc}' ");
            $item = [];
            $all->execute();
            $item = $all->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
        // detail
        public function getSanPhamTheoMa($ma){
            $all = parent::$connection->prepare("SELECT * FROM `sanpham`  WHERE `masanpham` = '{$ma}'");
            $item = [];
            $all->execute();
            $item = $all->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item[0];
        }
        public function searchSanPham($keyword){
            $timkiem = parent::$connection->prepare("SELECT * FROM `sanpham` WHERE `tensanpham` LIKE '%{$keyword}%'");
            $item = [];
            $timkiem->execute();
            $item = $timkiem->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
        // phân trang 
        public function searchSanPham_PhanTrang($keyword,$perpage,$page){
            $start = ($page-1)* $perpage;
            $timkiem = parent::$connection->prepare("SELECT * FROM `sanpham` WHERE `tensanpham` LIKE '%{$keyword}%' LIMIT $start ,$perpage ");
            $item = [];
            $timkiem->execute();
            $item = $timkiem->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
        function hienThiPhanTrang($url, $total , $perpage){
            $totalLink = ceil($total/$perpage);
            $link ="";
            for($i =1; $i <= $totalLink; $i++ )
            {
                $link = $link."<a href='$url&page=$i'> $i </a>";
            }
            return $link;
        }
    }
?>