<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180700517-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-180700517-1');
        </script>
    <!---- Tags Meta ---------->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta name="author" content="www.techeleven.com.br/">
            <meta name="description" content="WE CONSORCIOS, carros, motos, imoveis">
              <meta name="keywords" content="WE CONSORCIOS, carros, motos, imoveis">

    <link rel="stylesheet" type="text/css" href="../Styles/imovel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="../Styles/style.css"/>
    <link rel="stylesheet" type="text/css" href="../Styles/institucional.css"/>
    <link rel="shortcut icon" href="../Images/favicon.ico">
    <title>WE Consócios</title>
</head>
<body>
    <!----- START MENU TOPO DA PAGINA ----->
    <nav class="menuTopo" id="topVeiculo">
        <div class="containerMenu" id="containerMenu">
            <div class="divLogo" id="divLogo">
                <a href="../index.php">
                    <img 
                        src="../Images/we-logo-horizontal_RGB-cinza.png" 
                        alt="WE Consórcios" class="img"
                    />
                </a>    
            </div>

            <div class="divLogoOpenMenu" id="divLogoMenuAberto">
                <a href="../index.php">
                    <img src="../Images/we-logo-horizontal_RGB-branco.png" id="logoWEOpen" alt="WE Consórcios" class="img"/>
                </a>
            </div>

            <div class="menuSlider">
                <img src="../Images/menu-escuro.png" class="open" id="open" onclick="openMenu()">
                <img src="../Images/close.png" class="close" id="close" onclick="closeMenu()">
            </div>

            <div id="menuMobile" onclick="closeMenu()">
                <ul>
                    <li><a href="veiculo.php">Automóvel</a></li>
                    <li><a href="imovel.php">Imóvel</a></li>
                    <li><a href="moto.php">Moto</a></li>
                    <li><a href="quemSomos.php">Quem somos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="formulario.php">Simular Consórcio</a></li>
                </ul>
            </div>

            <div class="menuOption">
                <ul class="menuUl">
                    <li><a href="#">Consórcios<img src="./Images/next.png"/></a>
                        <ul>
                            <li><a href="veiculo.php">Automóvel</a></li>
                            <li><a href="imovel.php">Imóvel</a></li>
                            <li><a href="moto.php">Moto</a></li>
                        </ul>
                    </li>
                    <li><a href="quemSomos.php">Quem somos</a></li>
		            <li><a href="contato.php">Contato</a></li>
                    <li><a id="foneMenu" href="tel:08009412550">0800 941 2550</a></li>
                    <li class="buttonSimular"><a href="formulario.php">Simular Consórcio</a></li>
                </ul>
            </div>
        </div>   
    </nav>
    <!----- END MENU TOPO DA PAGINA ----->
    <section>

    <!------------------- START CONTEUDO ------------------------>


        <div class="menuInstitucional">

        <div class="topoInstitucional">
                <div></div>
                <h1>Institucional WE Consócios</h1>
            </div>

            <div class="menuInstitucional_ul">
                <ul>
                    <li><a href="quemSomos.php">Quem Somos</a></li>
                    <li><a href="marketplace.php">Marketplace</a></li>
                    <li><a href="perguntasFrequentes.php">Perguntas Frequentes</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="trabalheConosco.php">Trabalhe conosco</a></li>
                    <li><a href="politica-privacidade.php">Política de privacidade</a></li>
                </ul>
            </div>
        </div>
    
        <!--------------------CONTEUDO CONTATO-------------->

        <div class="conteudoInstitucional">    

            <div class="institucional">

                <h3>Trabalhe Conosco</h3>

                <p>Se torne um dos melhores Consultores Financeiros do Mercado de Consórcio do Brasil.
Aqui não fazemos apenas uma venda, a Jornada na We é totalmente Consultiva, onde Ouvimos, Entendemos e Explicamos. Realizando uma venda totalmente consultiva com qualidade e transparência.
</p>
                <br><br>
                
                <p class="trabalheConoscoText">Venha ser #WeLover</p><br>

                <form class="contact2" method="POST" enctype="multipart/form-data">
 
 
 <!-- Campo: Nome -->
 <div class="nome1">
              <label>Nome</label><br/>
                  <input type="text" id="name" name="nome" required/>
                  </div><br/>

<!--------Campo Telefone-------->
<div class="telefone1">
                                <label>Telefone</label><br/>
                                <input type="tel" id="telefone" name="fone" required/>
                                <div id="alerta">
                                    <label>Telefone Incompleto</label>
                                </div>
                            </div><br/>
 
 <!-- Campo: Email -->
 <div class="email1">
                                <label>E-mail</label><br/>
                                <input type="email" id="msgemail" name="replyto" required/><br/>
                            </div><br/>
 
 <!-- Campo: Perfil --> 
 <div class="perfil1">
                                <label>Perfil no Linkedin:</label><br/>
                                <input type="text" name="perfil" /><br/>
                            </div><br/>


                            <!-- Campo: Curriculo --> 
                            <div class="cargo">
                            <label>Área de Interesse:</label>
                                <select name="taskOption">
                                    <option value="Outros">Selecione</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Vendas">Vendas</option>
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>


 <!-- Campo: Curriculo --> 
 <div class="curriculo1">
                                <label>Carregar CV:</label><br/>
                                <input type="file" name="arquivo"/><br/>
                            </div>
 
 <!-- Campo: Mensagem -->
 <div class="mensagem">
                                <label>Mensagem:</label><br/>
                                <textarea name="mensagem" placeholder="Digite Sua Mensagem" required></textarea>
                            </div>
 
 <!-- Botão Enviar -->
 <div class="buttonNext2"><br/>
                                <button type="submit" name="submit" id="buttonNext2">ENVIAR</button>
                            </div>

                            <div class="nextMsg2" id="nextMsg2">
                                <h4>Formulário enviado com sucesso!</h4>
                            </div>
 </form>
 

 <!-- Layout
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  -->
<?php


if(isset($_POST['replyto']) && !empty($_POST['replyto'])){
 
          /* Valores recebidos do formulário  */
          $arquivo = $_FILES['arquivo'];
          $nome = $_POST['nome'];
          $fone = $_POST['fone'];
          $perfil = $_POST['perfil'];
          $selectOption = $_POST['taskOption'];
          $replyto = $_POST['replyto']; // Email que será respondido
          $mensagem_form = $_POST['mensagem'];
          $assunto = "Quero Fazer Parte do Time WE";
           


          /* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
          $to = "gente@weconsorcios.com.br";
          $remetente = $replyto; // Deve ser um email válido do domínio
           
          /* Cabeçalho da mensagem  */
          $boundary = "XYZ-" . date("dmYis") . "-ZYX";
          $headers = "MIME-Version: 1.0\n";
          $headers.= "From: $remetente\n";
          $headers.= "Reply-To: $replyto\n";
          $headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
          $headers.= "$boundary\n"; 
           
          /* Layout da mensagem  */
          $corpo_mensagem = " 
          <br>Formulário via site
          <br>--------------------------------------------<br>
          <br><strong>Nome:</strong> $nome
          <br><strong>Email:</strong> $replyto
          <br><strong>Telefone:</strong> $fone
          <br><strong>Perfil:</strong> $perfil
          <br><strong>Área de Interesse:</strong> $selectOption
          <br><strong>Assunto:</strong> $assunto
          <br><strong>Mensagem:</strong> $mensagem_form
          <br><br>--------------------------------------------
          ";
           
          /* Função que codifica o anexo para poder ser enviado na mensagem  */
          if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
           
              $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); // Abri o arquivo enviado.
              $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
              $anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
              fclose($fp); // Fecha o arquivo aberto anteriormente
              $anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
              $mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
              $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
              $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
              $mensagem.= "$corpo_mensagem\n"; 
              $mensagem.= "--$boundary\n"; 
              $mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
              $mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
              $mensagem.= "Content-Transfer-Encoding: base64\n\n";  
              $mensagem.= "$anexo\n";  
              $mensagem.= "--$boundary--\r\n"; 
          }
           else // Caso não tenha anexo
           {
           $mensagem = "--$boundary\n"; 
           $mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
           $mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
           $mensagem.= "$corpo_mensagem\n";
          }


        /* Função que envia a mensagem  */
        mail($to, $assunto, $mensagem, $headers);

    ?>

        <script>
            document.getElementById("buttonNext2").style.display = "none";
            document.getElementById("nextMsg2").style.display = "block";
        </script>

    <?php
}

?>

            </div>


        </div>


    <!-------------------- END CONTEUDO ------------------------>
    <div>
            <div class="endFooter">
                <div class="endFooterContent">
                    <div class="text1">
                        <h3>#WeLovers</h3><br/>
                        <p>Somos um marketplace de consórcios.
                            Nascemos Digital e estabelecemos parcerias 
                            com as maiores administradoras de Consórcios do Brasil.
                            A We Consórcios oferece uma experiência digital diferenciada ao cliente,
                            buscando sempre a melhor solução de investimento.
                        </p>
                    </div>
                    <div class="text2">
                        <h3>Institucional</h3><br/>
                        <ul>
                        <li><a href="quemSomos.php">Quem Somos</a></li>
                            <li><a href="marketplace.php">Marketplace</a></li>
                            <li><a href="perguntasFrequentes.php">Perguntas Frequentes</a></li>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="trabalheConosco.php">Trabalhe conosco</a></li>
                            <li><a href="politica-privacidade.php">Política de privacidade </a></li>
                        </ul>
                    </div>
                    <div class="contato">
                        <h3>Canais de Atendimento</h3><br/>
                        <p>WhatsApp 11 94698-3125</p>
                        <p>Central de Vendas 0800 941 2550</p>
                        <p>E-mail contato@weconsorcios.com.br</p>
                    </div>
                    <div class="midias">
                        <h3>Mídias Sociais</h3>
                        <div class="midiaLogos">
                            <div class="instagran">
                                <a href="https://www.instagram.com/weconsorcios/" 
                                    target="blank">
                                    <img src="../Images/instagram.png" class="img"/>
                                </a>
                            </div>
                            <div class="facebook">
                                <a href="https://www.facebook.com/consorcioswe" 
                                    target="blank">
                                    <img src="../Images/facebook.png" class="img"/>
                                </a>    
                            </div>
                            <div class="linkedin">
                                <a href="https://www.linkedin.com/company/weconsorcios/" 
                                    target="blank">
                                    <img src="../Images/linkedin.png" class="img"/>
                                </a>   
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="spaceMobile"></div>
                <div class="copyright">
                    <p>Copyright © 2021 <span>WE CONSÓRCIOS</span> All right reserved. </p>
                </div>
            </div>
        </div>
        
        <div class="botaoZap">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/5511946983125?text=Olá,%20eu%20gostaria%20de%20saber%20mais%20informações%20sobre%20os%20consórcios%20do%20site%20da%20We!" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
        z-index:1000;" target="_blank">
        <i style="margin-top:16px" class="fa fa-whatsapp"></i>
        </a>
        </div>

        <!-- Politica de Cookies -->
        <section id="cookies" class="animate__animated animate__fadeInUp" style="display: none;">
            Para otimizar sua experiência durante a navegação, 
            fazemos uso de nossa Política de Cookies. 
            Para proteger seus dados pessoas respeitamos nossa <a href="politica-privacidade.php" style="color: #4ce0c9;"> Política de Privacidade. </a> 
            Ao seguir com a navegação e visita consideramos que você está de acordo com as nossas políticas.<br><br>
            <div style="width: 200px; margin-left: auto; margin-right: auto;">
                <button type="button" onclick="getCookies()" style="width: 200px; height: 25px; border: none; color: #707070; outline: 0; background-color: #4ce0c9; cursor: pointer;">Concordar e fechar</button>
            <div>
        </section>
            
    </section>
    <!---- END CONTAINER PRINCIPAL ---->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="../JS/javascript.js"></script>

    <script>

        window.addEventListener("load", function (event) {
            if (localStorage['cookies']) {
                if (localStorage['cookies'] == true) {
                    document.getElementById('cookies').style.display = 'none'
                }
            } else {
                document.getElementById('cookies').style.display = 'block'
            }
        });

        function getCookies() {
            $('#cookies').addClass('animate__fadeOutDown')
            localStorage.setItem('cookies', true)
        }

        $("#telefone").mask("(00) 00000-0000");
        
    </script>

</body>
</head>