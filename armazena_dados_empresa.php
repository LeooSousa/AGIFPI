<?php 
header('Content-Type: text/html; charset=utf-8');
$Campo1 = $_POST['Campo1'];
$Campo2 = $_POST['Campo2'];
$Campo3 = $_POST['Campo3'];
$Campo4 = $_POST['Campo4'];
$Campo5 = $_POST['Campo5'];
$Campo6 = $_POST['Campo6'];
$Campo7 = $_POST['Campo7'];
$Campo8 = $_POST['Campo8'];
$Campo9 = $_POST['Campo9'];
$Campo10 = $_POST['Campo10'];
$Campo11 = $_POST['Campo11'];
$Campo12 = $_POST['Campo12'];
$Campo13 = $_POST['Campo13'];
$Campo14 = $_POST['Campo14'];
$Campo15 = $_POST['Campo15'];
$Campo16 = $_POST['Campo16'];
$Campo17 = $_POST['Campo17'];
$Campo18 = $_POST['Campo18'];
$Campo19 = $_POST['Campo19'];
$Campo20 = $_POST['Campo20'];
$connect = mysqli_connect('localhost','root','','login_php');
$db = mysqli_select_db($connect,'login_php');
$query_select = "SELECT usuario. id FROM usuario,analize WHERE analize. id_usuario = usuario. id";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['id_usuario'];
 
    if($id_usuario == "" || $id_usuario == null){
         $query = "INSERT INTO analize (Campo1,Campo2,Campo3,Campo4,Campo5,Campo6,Campo7,Campo8,Campo9,Campo10, Campo11,Campo12,Campo13,Campo14,Campo15,Campo16,Campo17,Campo18,Campo19,Campo20) VALUES ('$Campo1','$Campo2','$Campo3','$Campo4','$Campo5','$Campo6','$Campo7','$Campo8','$Campo9','$Campo10','$Campo11','$Campo12','$Campo13','$Campo14','$Campo15','$Campo16','$Campo17','$Campo18','$Campo19','$Campo20')";
 
          } else{
             if($logarray == $id_usuario){
 
                 echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='tabela.html';</script>";
                 die(); 
 
            }else{
                
                $insert = mysqli_query($connect,$query);
                echo $db->insert_id;

                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Dados guardados com sucesso!');window.location.href='resultado.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível registrar esses dados');window.location.href='tabela.html'</script>";
                }
            }
        }
        
?>
