<?php
    function loadall_danhmuc(){
        $sql="select * from danhmuc order by id_danhmuc asc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function insert_danhmuc($tenloai){
        $sql="insert into danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }

    function delete_danhmuc(){
        $sql = "delete from danhmuc where id_danhmuc=".$_GET['id_danhmuc'];
        pdo_execute($sql);
    }
 
    function loadone_danhmuc($id_danhmuc){
        $sql="select * from danhmuc where id_danhmuc=".$id_danhmuc;
        $dm= pdo_query_one($sql);
        return $dm;
    }
    
    function update_danhmuc($id_danhmuc,$tenloai){
        $sql="update danhmuc set name='".$tenloai."' where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }

?>