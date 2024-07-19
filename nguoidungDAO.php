<?php
    include_once "db.php";
    class nguoidungDAO extends db{
        public function addNguoiDung($ma,$ten,$email,$matkhau){
            $add = parent::$connection->prepare("INSERT INTO `nguoidung`(`ma`, `ten`, `email`, `matkhau`) VALUES ('{$ma}','{$ten}','{$email}','{$matkhau}')");
            $add->execute();
        }
        public function dellNguoiDung($ma){
            $del =  parent::$connection->prepare("DELETE FROM `nguoidung` WHERE `ma` = '{$ma}'");
            $del->execute();
        }
        public function updateNguoiDung($ma,$ten,$email,$matkhau){
            $update = parent::$connection->prepare("UPDATE `nguoidung` SET `ten`='{$ten}',`email`='{$email}',`matkhau`='{$matkhau}' WHERE `ma` = '{$ma}' ");
            $update->execute();
        }
        public function getAllNguoiDung(){
            $all = parent::$connection->prepare("SELECT * FROM `nguoidung`");
            $item =[];
            $all->execute();
            $item=$all->get_result()->fetch_all(MYSQLI_ASSOC);
            return $item;
        }
        //kiem tra user , pass cos trong sql 
        public function kiemTraUser($ten,$matkhau){
            $kt = parent::$connection->prepare("SELECT * FROM `nguoidung` WHERE `ten`='{$ten}' AND `matkhau`='{$matkhau}' ");
            $kt->execute()['role'];
            

        }
    }
?>