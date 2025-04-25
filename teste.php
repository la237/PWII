<?php
 require"usuario.class.php";

 $con = $usuario = new Usuario();
 if ($con){
   
        $exito = $usuario->cadastrar("laryssa", "lalkjds9o@jjkk" , "123");  
        if($exito){
            echo"<script>
                confirm(' Cadastrado com sucesso')
            </script>"; 
         
        }else{
            echo"<script>
            confirm(' Erro ao cadastrar')
          </script>";  

        }

       

 }else{
    echo"<script>
            confirm(' Erro ao conectar')
          </script>";  
 }
