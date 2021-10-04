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
    
    <!--------------------CONTEUDO QUEM SOMOS-------------->

    <div class="conteudoInstitucional">
        <div class="institucional">

            <h3>Quem Somos</h3>

            <h1>POSICIONAMENTO</h1>

            <p>
                Somos um marketplace de consórcios.
                Nascemos Digital e estabelecemos parcerias com as maiores administradoras de Consórcios do Brasil.
                A We Consórcios oferece uma experiência digital diferenciada ao cliente, buscando sempre a melhor solução de investimento.
            </p>

            <h2>PROPÓSITO</h2>

            <p>
                Ajudar as pessoas a realizarem seus sonhos de forma justa e segura, sendo empático e verdadeiro com a história de cada um!
            </p><br><br>

            <h1>NOSSO VALORES</h1>
        
            <p>Transparência</p>
            <p>Alegria</p>
            <p>Empatia</p>
            <p>Crença no Brasil</p>
            <p>Simplicidade</p>
            <p>Meritocracia</p>
            <p>Diversidade</p>

        </div>

    </div>

    <!-------------------- END CONTEUDO ------------------------>
        <div>
            <div class="footerForm">
                <div class="footerFormText">
                    <div>
                        <h1>Se prepare para</h1>
                        <h1>realizar o seu <span class="span">Sonho</span></h1>
                        <p>#TMJ para realizar o seu sonho de forma justa e segura.</p>
                    </div>
                </div>
                <div class="footerFormContent">
                    <div class="form" id="formTop">
                        <p>#WeLovers prontos para te ajudar a</p>
                        <p>construir a sua História!</p>

                        <form method="POST" class="formulario" action="#formTop">
                            <input type="hidden" id="acao" name="acao" value="1">
                            <input type="hidden" name="opcoes" value="Lead Site Formulario" id="option">

                            <div class="nome">
                                <label>Nome</label><br/>
                                <input type="text" id="name" name="name" required/>
                            </div><br/>
                            
                            <div class="telefone">
                                <label>Telefone</label><br/>
                                <input type="tel" id="telefone" name="fone" required/>
                                <div id="alerta">
                                    <label>Telefone Incompleto</label>
                                </div>
                            </div><br/>
                            
                            <div class="email">
                                <label>E-mail</label><br/>
                                <input type="email" id="msgemail" name="email"/><br/>
                            </div>
                            <div class="buttonNext" id="buttonNext"><br/>
                                <button>
                                    <img src="../Images/saibamais.PNG" class="imgSaibaMais"/>
                                </button>
                            </div>
                            <div class="nextMsg" id="nextMsg">
                                <h2>Formulário enviado com sucesso!</h2>
                                <p>Em breve, um de nossos consultores vai entrar em contato!</p>
                            </div>

                        </form>

                            <!----START-----PHP----------PHP-------PHP-------PHP--------PHP-----------PHP----------->
                        <?php
                            require_once (__DIR__.'../../crest.php');
                            //print_r($_POST);

                            $telefone = filter_input(INPUT_POST, 'fone');

                            if (isset($_POST['acao']) && strlen($telefone) >= 14){
                                $result = CRest::call(
                                    'crm.lead.add',
                                        [
                                            'FIELDS' => [
                                                'TITLE' => $_POST['opcoes'], 
                                                'NAME' => $_POST['name'], 
                                                'EMAIL' => ['0' => ['VALUE' => $_POST['email'], 'VALUE_TYPE' => 'WORK', ], ],
                                                'PHONE' => ['0' => ['VALUE' => $_POST['fone'], 'VALUE_TYPE' => 'WORK', ], ], 
                                            ], 
                                        ]
                                    );

                                ?>
                                    <script>
                                        document.getElementById("alerta").style.display = "none";
                                        document.getElementById("buttonNext").style.display = "none";
                                        document.getElementById("nextMsg").style.display = "block";
                                    </script>

                                    
                                <?php

                                
                            }
                            else if($telefone == ""){
                                
                                ?>
                                    <script>

                                        document.getElementById("alerta").style.display = "none";
      
                                    </script>

                                <?php
                
                            }
                            else{
                                    
                                ?>
                                    <script>

                                        document.getElementById("alerta").style.display = "block";

                                        setTimeout(() => {
                                            document.getElementById("alerta").style.display = "none";
                                        }, 8000);
                                        
                                    </script>

                                <?php
                                
                    
                            }// END IF

                        ?>
                        <!---END------PHP----------PHP-------PHP-------PHP--------PHP-----------PHP----------->
                        

                        <div class="whats">

                            <div class="whatsText">
                                <div class="line1"><hr></div>
                                    <div class="p">
                                        <p>Se preferir, chama a gente no Whats!</p>
                                    </div>
                                <div class="line2"><hr></div>
                            </div>
                            
                            <div class="whatsButton">
                                <button>
                                    <a href="https://api.whatsapp.com/send/?phone=5511946983125&text=Ol%C3%A1%2C+eu+gostaria+de+saber+mais+informa%C3%A7%C3%B5es+sobre+os+cons%C3%B3rcios+do+site+da+We%21&app_absent=0" 
                                        target="_blank">
                                        <img src="../Images/whatsapp-botao.png" alt="Botão Whats App" class="img"/>
                                    </a>
                                </button>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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