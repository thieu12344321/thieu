<?php
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id_user desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

    function loadOne_taikhoan($id_user){
        $sql = "select * from taikhoan where id_user=".$id_user;
        $tk = pdo_query_one($sql);
        return $tk;
    }

    function insert_taikhoan($email,$user,$pass){
        $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp= pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="select * from taikhoan where email='".$email."' ";
        $sp= pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$pass,$email,$address,$tel,$role){
            $sql="update taikhoan set user='".$user."', pass='".$pass."', email='".$email."',address='".$address."',tel='".$tel."',role='".$role."' where id_user=".$id;
            pdo_execute($sql);
    }
    function delete_taikhoan($id_user){
        $sql="delete from taikhoan where id_user=".$id_user;
        pdo_execute($sql);
    }

    function updatetaikhoan($id_user,$user,$pass,$email){
        $sql="update taikhoan set user='".$user."', pass='".$pass."', email='".$email."' where id_user=".$id_user;
        pdo_execute($sql);
}
    
?>