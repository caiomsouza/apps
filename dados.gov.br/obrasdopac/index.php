<!DOCTYPE HTML>
<html>
<head>
<title>Aplicativo - Obras do PAC by IT4biz e Dados.gov.br</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="jquery/development-bundle/themes/base/jquery.ui.all.css">
<script src="jquery/development-bundle/jquery-1.7.1.js"></script>
<script src="jquery/development-bundle/ui/jquery.ui.core.js"></script>
<script src="jquery/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="jquery/development-bundle/ui/jquery.ui.tabs.js"></script>
<link rel="stylesheet" href="/it4biz/jquery-ui-1.8.17.custom/development-bundle/demos/demos.css">
<script>
$(function() {
	$( "#tabs" ).tabs();
});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-668417-10']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div class="demo">

<div id="tabs"   >
	<ul>
		<li><a href="#tabs-1">Painel</a></li>
		<li><a href="#tabs-2">Mapa</a></li>
		<li><a href="#tabs-3">Cubo OLAP</a></li>
		<li><a href="#tabs-4">Sobre</a></li>
		<li><a href="#tabs-5">Videos</a></li>
		<li><a href="#tabs-6">Sobre a IT4biz</a></li>
		
	</ul>
	<div id="tabs-1" >	
		<iframe src="http://23.23.194.193/pentaho/content/pentaho-cdf-dd/Render?solution=PAC&path=%2FDashboards&file=Painel+de+Controle+dos+Empreendimentos.wcdf&userid=obrasdopac&password=it4biz" width="100%" height="1200"  frameborder="0"></iframe>
	</div>
	<div id="tabs-2">
		<iframe src="http://www.it4biz.com.br/apps/dados.gov.br/obrasdopac/MapadeControledosEmpreendimentos/" width="100%" height="1200"  frameborder="0"></iframe>
	</div>	
	<div id="tabs-3">
		<iframe src="http://www.it4biz.com.br/apps/dados.gov.br/obrasdopac/CuboOLAP" width="100%" height="1200"  frameborder="0"></iframe>
	</div>
	<div id="tabs-4">
		
		<p>Este aplicativo mostra, de diversas maneiras, os investimentos realizados nas Obras do PAC (Programa de Aceleração do Crescimento).<BR><BR>

Através de Dashboards e Análises OLAP você poderá cruzar os dados e saber como está sendo investido o nosso dinheiro.<BR><BR>

O objetivo deste aplicativo é demonstrar para os clientes e possíveis clientes da IT4biz o que é possível fazer com a utilização ferramentas livres (Open Source) para o desenvolvimento de sistemas de tomada de decisão.<BR><BR>

<b>Este aplicativo não busca concorrer com o Portal de Transparência do Governo Federal e não tem objetivos políticos.</b></p>
		
		<p>Conjuntos de dados do portal dados.gov.br utilizados no Aplicativo:</p>

<p>Os dados utilizados para este aplicativo foram extraídos do site Dados.gov.br através do link abaixo.</p>

<p>Obras do PAC (Programa de Aceleração do Crescimento)</p>
<p><a href="http://www.dados.gov.br/dataset/obras-do-pac-programa-de-aceleracao-do-crescimento">http://www.dados.gov.br/dataset/obras-do-pac-programa-de-aceleracao-do-crescimento</a></p>

	</div>
	<div id="tabs-5">
		<p>Para facilitar o entendimento deste aplicativo criamos um video curto de 1 minuto e 45 segundos:</p>
<p><iframe width="640" height="360" src="http://www.youtube.com/embed/OmJ4OXLZ3_0?feature=player_embedded" frameborder="0" allowfullscreen></iframe></p>

		<p>Para uma maior demonstração do aplicativo criamos um video mais longo de 26 minutos e 46 segundos:</p>
<p><iframe width="640" height="360" src="http://www.youtube.com/embed/_zBRytljbv4" frameborder="0" allowfullscreen></iframe></p>

					
	</div>
	<div id="tabs-6">
		
		A <a href="http://www.it4biz.com.br"><b>IT4biz</b></a> é uma empresa de Tecnologia da Informação focada em Soluções de Código Aberto fundada em 2007 na cidade de São Paulo, Brasil.<BR><BR>

        Somos pioneiros no Brasil na utilização da Suite de Business Intelligence Pentaho.<BR><BR>

        O nome IT4biz (Information Technology For Business) significa Tecnologia da Informação para Negócios.<BR><BR>
        
        Nosso foco é obter os melhores resultados e gerar lucro para sua empresa, aplicando tudo o que existe de mais moderno em Tecnologia da Informação para Negócios.<BR><BR>
		
		<p>Para obter ajuda entre em contato com info@it4biz.com.br.</p>
		
		<iframe width="100%" height="450" frameborder="0" src="http://www.it4biz.com.br/novosite/wp-content/uploads/2012/01/banner_geral.jpg"></iframe>		

	</div>
	
</div>

</div><!-- End demo -->
</body>
</html>
