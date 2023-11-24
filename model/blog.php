<?php

function insert_blog($id_blog,$name_blog,$img_blog,$mota_blog){
    $sql = "insert into blog(id_blog,name_blog,img_blog,mota_blog) values ('$id_blog','$name_blog','$img_blog','$mota_blog')";
    pdo_execute($sql);
}


function loadone_blog($id_blog){
    $sql = "select * from blog where id_blog=".$id_blog;
    $blog = pdo_query_one($sql);
    return $blog;
}
function update_blog($id_blog,$name_blog,$mota_blog,$filename){
    if($filename != ""){
        $sql="update blog set name_blog='".$name_blog."',mota_blog='".$mota_blog."',img_blog='".$filename."' where id_blog=".$id_blog;
    }
    else{
        $sql="update blog set name_blog='".$name_blog."',mota_blog='".$mota_blog."' where id_blog=".$id_blog;

    }
    pdo_execute($sql);
}



function delete_blog(){
    $sql = "delete from blog where id_blog=".$_GET['id_blog'];
    pdo_execute($sql);
}
function loadall_blog(){
    $sql="select * from blog order by id_blog asc";
    $listblog=pdo_query($sql);
    return $listblog;
}
?>