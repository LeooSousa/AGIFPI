<?php 
header('Content-Type: text/html; charset=utf-8');
$login = $_POST['usuario'];
$senha = $_POST['senha'];
$Email= $_POST['Email'];
$Empresa = $_POST['Empresa'];
$connect = mysqli_connect('localhost','root','','login_php');
$db = mysqli_select_db($connect,'login_php');
$query_select = "SELECT usuario FROM usuarios WHERE usuario = '$login'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['usuario'];

    if($Email == "" || $Email == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='cadastro_tela_inicial.html';</script>";
 
        }elseif($login == "" || $login == null){
            echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro_tela_inicial.html';</script>";

        }elseif($senha == "" || $senha == null){
            echo"<script language='javascript' type='text/javascript'>alert('O campo senha deve ser preenchido');window.location.href='cadastro_tela_inicial.html';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro_tela_inicial.html';</script>";
                die();
 
            }else{
                $md5 = MD5($senha);
                $query = "INSERT INTO usuarios (usuario,senha,Email,Empresa) VALUES ('$login','$md5','$Email', '$Empresa')";
                $insert = mysqli_query($connect,$query);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='home.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro_tela_inicial.html'</script>";
                }
            }
        }
?>