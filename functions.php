<?php
@session_start();

function get_publish_article()
{
  $datas =array();
  $sql ="SELECT * FROM `article` WHERE `publish` = 1";
  $query =mysqli_query($_SESSION['link'], $sql);
 if($query)
 {
  if(mysqli_num_rows($query)>0)
  {
    while($row = mysqli_fetch_assoc($query)){
      $datas[]=$row;
    }
    //執行成功
  }
}
  else
  {
    //執行失敗
    echo '{$sql}語法請求失敗:<br/>' . mysqli_error($_SESSION['link']);
  }
  return $datas;
}



function get_article($id)
{
  $result=null;
$sql ="SELECT * FROM `article` WHERE `publish` = 1 AND `id` ={$id}";
  $query =mysqli_query($_SESSION['link'], $sql);
 if($query)
 {
  if(mysqli_num_rows($query)>0)
  {
    $result = mysqli_fetch_assoc($query);
      
    }
    //執行成功
  }

  else
  {
    //執行失敗
    echo '{$sql}語法請求失敗:<br/>' . mysqli_error($_SESSION['link']);
  }
  return $result;
}



?>
