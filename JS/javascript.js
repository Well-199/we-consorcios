

$("#telefone").mask("(00) 00000-0000");


$('#email').mask("A", {
	translation: {
		"A": { pattern: /[\w@\-.+]/, recursive: true }
	}
});

function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {

        document.getElementById("msgemail").innerHTML="E-mail válido";
        //alert("email valido");
    }
    else{
        document.getElementById("msgemail").innerHTML="<font color='red'>Email inválido </font>";
        //alert("E-mail invalido");
    }
}

//--------- Menu Mobile --------------//

const openMenu = () => {

    document.getElementById("open").style.display = "none";
    document.getElementById("close").style.display = "block";
    document.getElementById("close").style.filter = "invert(1)";
    document.getElementById("menuMobile").style.marginTop = "80px";

    setTimeout(() => {
        document.getElementById("containerMenu").style.background = "#00DEB5";
        document.getElementById("divLogo").style.display = "none";
        document.getElementById("divLogoMenuAberto").style.display = "block";

        //document.getElementById("logoWE").src = "../Images/we-logo-horizontal_RGB-branco.png";
    }, 400);
    
};

const closeMenu = () => {

    if(window.innerWidth <= 1250){
        document.getElementById("open").style.display = "block";
        document.getElementById("close").style.display = "none";
        document.getElementById("menuMobile").style.marginTop = "-800px";
        //document.getElementById("logoMenuTopo").style.visibility = "hidden";

        setTimeout(() => {
            document.getElementById("containerMenu").style.backgroundColor = "transparent";
            document.getElementById("divLogo").style.display = "block";
            document.getElementById("divLogoMenuAberto").style.display = "none";
            
        }, 100);
    }
    else{
        document.getElementById("close").style.display = "block";
    }
    
}

//--------------------- Lead Veiculo --------------------

const getBannerVeiculo = () => {
    
    localStorage.setItem("lead", "Lead Site - Banner Veículo");

};

const getVeiculo1 = () => {

    localStorage.setItem("lead", "Lead Site - Veículo 01");

};

const getVeiculo2 = () => {

    localStorage.setItem("lead", "Lead Site - Veículo 02");

};

const getVeiculo3 = () => {

    localStorage.setItem("lead", "Lead Site - Veículo 03");

};

//--------------------- Lead Imóvel --------------------

const getBannerImovel = () => {

    localStorage.setItem("lead", "Lead Site - Banner Imóvel");

};

const getImovel1 = () => {

    localStorage.setItem("lead", "Lead Site - Imóvel 01"); 

};

const getImovel2 = () => {

    localStorage.setItem("lead", "Lead Site - Imóvel 02");

};

const getImovel3 = () => {

    localStorage.setItem("lead", "Lead Site - Imóvel 03");

};

//--------------------- Lead Motos --------------------

const getBannerMoto = () => {

    localStorage.setItem("lead", "Lead Site - Banner Moto");

};

const getMoto1 = () => {

    localStorage.setItem("lead", "Lead Site - Moto 01");

};

const getMoto2 = () => {

    localStorage.setItem("lead", "Lead Site - Moto 02");

};

const getMoto3 = () => {

    localStorage.setItem("lead", "Lead Site - Moto 03");

};



console.log(window.innerWidth)// Exibe a Largura da Tela