<?php
    include_once "db.php";
    class danhmucDAO extends db{
        public function addDanhMuc($ma,$ten,$ghichu){
            $add=parent::$connection->prepare("INSERT INTO `danhmuc`(`madanhmuc`, `tendanhmuc`, `ghichu`) VALUES ('{$ma}','{$ten}','{$ghichu}')");
            $add->execute();
        }
        public function dellDanhMuc($ma){
            $dell = parent::$connection->prepare("DELETE FROM `danhmuc` WHERE `madanhmuc` = '{$ma}'");
            $dell->execute();
        }
        public function updateDanhMuc($ma,$ten,$ghichu){
            $update=parent::$connection->prepare("UPDATE `danhmuc` SET `tendanhmuc`='{$ten}',`ghichu`='{$ghichu}' WHERE `madanhmuc`='{$ma}'");
            $update->execute();
        }
        public function getAllDanhMuc(){
            $all = parent::$connection->prepare("SELECT * FROM `danhmuc`");
            $item =[];
            $all->execute();
            $item=$all->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
    }
?>