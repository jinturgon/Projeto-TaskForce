<?php include("conexao.php"); ?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$fone=$_POST['fone'];
$msg=$_POST['msg'];

$sql = "INSERT INTO fale_conosco (id, nome, email, fone, msg) VALUES ('', '$nome', '$email', '$fone', '$msg')";

        
if($query_result = mysqli_query($con,$sql))
{
	echo  nl2br ("Formulário de Contato enviado! \n Nós entraremos em contato em breve.");
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
$con->close();
?>