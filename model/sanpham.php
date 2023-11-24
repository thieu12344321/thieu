<?php

    function insert_sp($name__pro,$price__pro,$amount__pro,$size__pro,$img__pro,$des__pro,$iddm){
        $sql = "insert into sanpham(name,price,amount,size,img,mota,iddm) values ('$name__pro','$price__pro','$amount__pro','$size__pro','$img__pro','$des__pro','$iddm')";
        pdo_execute($sql);
    }
    
    // function addbill()

    function insert_bill($code__bill,$name,$phone,$address,$name_pr,$amount_pr,$size_pr,$total){
        $sql = "insert into donhang(bill_code,name_user,tel_user,adress_user,name_pr,amount_pr,size_pr,total_bill,status_order) values ('$code__bill','$name','$phone','$address','$name_pr','$amount_pr','$size_pr','$total',1)";
        pdo_execute($sql);
    }

    function loadAll_sanpham($keyw=""){

        $sql = "select * from sanpham inner join size on sanpham.size= size.id_size";
        if($keyw != ""){
            $sql .= " and name like '%".$keyw."%'";
        }
        
        $sql .= " order by id_pro desc";
        
        $listsp = pdo_query($sql);
        return $listsp;
    }

    //lafm them search//
    function loadAll_sanphampage($keyw,$iddm){
        if($iddm != ""){
            $sql = "select * from sanpham where iddm =".$iddm." order by id_pro asc";
        }
        else{
            $sql = "select * from sanpham where 1 order by id_pro asc";
        }
        if($keyw !=""){
            $sql = "select * from sanpham where name like '%".$keyw."%'";
        }
        $list_sp = pdo_query($sql);
        return $list_sp;
    }

    function load_sanpham_cungloai($id,$iddm){
        $sql = "select * from sanpham where iddm=".$iddm." and id_pro <>".$id;
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function loadOne_sanpham($id){
        $sql = "select * from sanpham where id_pro=".$_GET['id'];
        $sp = pdo_query_one($sql);
        return $sp;
    }

    function loadProductById($id){
        $sql = "select * from sanpham where id_pro=".$id;
        $sp = pdo_query_one($sql);
        return $sp;
    }


    function loadAll_size(){
        $sql= "select * from size order by id_size asc";
        $size = pdo_query($sql);
        return $size;
    }

    function delete_sanpham(){
        $sql = "delete from sanpham where id_pro=".$_GET['id'];
        pdo_execute($sql);
    }

    function loadsp_home(){
        $sql = "select * from sanpham where 1 order by luotxem desc limit 0,8";
        $list_sp = pdo_query($sql);
        return $list_sp; 
    }

    function update_sanpham($id,$name__pro,$price__pro,$amount__pro,$size__pro,$img__pro,$des__pro,$iddm){
        if($img__pro != ""){
            $sql= "update sanpham set name= '".$name__pro."', price='".$price__pro."',amount='".$amount__pro."',size='".$size__pro."',img='".$img__pro."',mota='".$des__pro."',iddm='".$iddm."' where id_pro=".$id;
        }
        else{
            $sql= "update sanpham set name= '".$name__pro."', price='".$price__pro."',amount='".$amount__pro."',size='".$size__pro."',mota='".$des__pro."',iddm='".$iddm."' where id_pro=".$id;
        }
        pdo_execute($sql);

    }

  

?>