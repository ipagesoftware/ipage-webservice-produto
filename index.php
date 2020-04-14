<?php
  $dados = array();
  //
  if($_POST){
    if(isset($_POST['txt_code_bar'])){
      if(!empty($_POST['txt_code_bar'])){
        // ELIMINA CARACATERES INVÁLIDOS
        $value = preg_replace("/[^0-9]/", "", $_POST['txt_code_bar']);
        $url = "https://www.ipage.com.br/ws/v1/codebar/";
        $url .= $value . "/";
        $url .= "07b36825b44111e9a80952540046af69";
        //
        $response = file_get_contents($url);
        $dados = (array)json_decode($response);
      }else{
        $dados = array('error'=>true, 'msg'=>'Ipage Webservice: Invalid Code bar. Please contact technical support through our web site: www.ipage.com.br');
      }
    }
  }
?>
<!doctype html>
<html>
  <base href=""/>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- DEFINICAO META TAG //-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="automacao,comercial,desenvolvimento,sites,software,ocx,dll,visual basic,php,aplicacap web, manutencao,produtos">
    <meta name="description" content="Empresa lider em desenvolvimento de software. Oferece as melhores solucoes em produtos e servicos para o mercado">
    <meta name="author" content="Diogenes Dias de Souza Junior & IPAGE Informatica">
    <meta name="replyTo" content="atendimento@ipagesoftware.com.br">
    <!-- FIM DEFINICAO META TAG //-->
		<title>
			Ipage WebService Produto &reg; PHP
		</title>
    <style>
        ._fancybar{margin-top:50p !important;z-index: 5}
    </style>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- OPEN GRAPH //-->
    <meta property="locale" content="pr_BR">
    <meta property="url" content="https://www.ipage.com.br">
    <meta property="title" content="LavoroX - sua aplicação em nuvem.">
    <meta property="description" content="Empresa lider em desenvolvimento de software. Oferece as melhores solucoes em produtos e servicos para o mercado">
    <meta property="type" content="website">
    <meta property="og:image:" content="https://www.ipage.com.br/newipage/personal/images/recibo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="612">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website">
    <!-- FIM OPEN GRAPH //-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="assets/css/bootsnipp.min.css"/>
    <link rel="stylesheet" href="ipage/css/loader.css"/>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
		<![endif]-->
	</head>
	<body>
  <div id="loader">
      <div class="loader-container">
        <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>
		<nav class="navbar navbar-fixed-top navbar-bootsnipp animate" role="navigation" style="z-index: 9999999">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">
							Toggle navigation
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
					</button>
					<div class="animbrand">
						<a class="navbar-brand animate" href="https://www.ipagesoftware.com.br/license_key/www/examples/">Ipage WebService Produto &reg; PHP</a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="https://github.com/ipagesoftware" class="" target="_blank">Exemplos Github</a>
						</li>
						<li class="">
							<a href="https://www.ipagesoftware.com.br/license_key/www/examples/" class="" target="_blank">Projeto LavoroX</a>
						</li>
						<li>
							<a href="https://www.ipage.com.br" class="" target="_blank">Visite a Ipage &reg;</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- //-->
		<div class="container" style="margin-top: auto; padding-top: 20px;">
<?php
    if(isset($dados['error'])){
      if($dados['error']){
        $msg  = '<div class="alert alert-danger">';
        $msg .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">';
        $msg .= '</button>';
        $msg .= $dados['msg'];
        $msg .= '</div>';
        echo($msg);
      }
    }
?>
  		<form class="form-horizontal" action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post">
  			<fieldset>
  				<!-- Form Name -->
  				<legend>Formulário</legend>
  				<!--// //-->
  				<div class="form-group">
  					<label class="col-md-2 control-label" for="txt_code_bar">Código de Barras:</label>
  					<div class="col-md-4">
  						<div class="input-group">
               <input id="txt_code_bar" name="txt_code_bar" class="form-control" type="text" value="<?php echo(isset($dados['code_bar'])? $dados['code_bar']:"") ?>" data-type="mask" data-inputmask="codebar" data-inputmask-inputformat="#############" autocomplete="off"/>
                <!-- Button -->
                <div class="input-group-addon" style="padding: 0; border: none;">
                    <button type="submit" class="btn"><i class="icon-search"></i> Pesquisar</button>
                </div>
  						</div>
  					</div>
  				</div>
          <hr />
  				<!--// NOMEL //-->
  				<div class="form-group">
  					<label class="col-md-2 control-label" for="textinput">Nome:</label>
  					<div class="col-md-8">
  						<input type="text" class="form-control input-md" value="<?php echo(isset($dados['nome'])? $dados['nome']:null) ?>"/>
  					</div>
  				</div>
  				<!--// NCM //-->
  				<div class="form-group">
  					<label class="col-md-2 control-label" for="textinput">NCM:</label>
  					<div class="col-md-4">
  						<input type="text" class="form-control input-md" value="<?php echo(isset($dados['ncm'])? $dados['ncm']:null) ?>"/>
  					</div>
  				</div>
  				<!--// DESCRIÇÃO //-->
  				<div class="form-group">
  					<label class="col-md-2 control-label" for="textinput">Descrição:</label>
  					<div class="col-md-8">
              <textarea rows="6" cols="50" style="width: 100%"><?php echo(isset($dados['descricao'])? $dados['descricao']:null) ?></textarea>
  					</div>
  				</div>
          <!--// PAÍS REGISTRO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">País de Origem:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['pais_registro'])? $dados['pais_registro']:null) ?>"/>
            </div>
          </div>
          <!--// FABRICANTE //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Fabricante:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['fabricante'])? $dados['fabricante']:null) ?>"/>
            </div>
          </div>
          <!--// DISTRIBUIDOR //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Distribuidor:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['distribuidor'])? $dados['distribuidor']:null) ?>"/>
            </div>
          </div>
          <!--// CATEGORIA //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Categoria:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['categoria'])? $dados['categoria']:null) ?>"/>
            </div>
          </div>
          <!--// MARCA //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Marca:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['marca'])? $dados['marca']:null) ?>"/>
            </div>
          </div>
          <!--// PREÇO MÉDIO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Preço Médio R$:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['preco_medio'])? $dados['preco_medio']:null) ?>"/>
            </div>
          </div>
          <!--// IMAGEM DO PRODUTO //-->          
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Imagem do produto:</label>
            <div class="col-md-4">
              <img src="<?php echo(isset($dados['imagem'])? $dados['imagem']:"https://www.placehold.it/350pxx350px/EFEFEF/AAAAAA&text=Sem+imagem") ?>" class="resultado imagem" style="max-width:350px;">
            </div>
          </div>
          <!--// CODE_BAR //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Código de Barras:</label>
            <div class="col-md-4">
              <input type="text" class="form-control input-md" value="<?php echo(isset($dados['code_bar'])? $dados['code_bar']:null) ?>"/>
            </div>
          </div>            
  			</fieldset>
        <?php
          if(!key_exists("error", $dados) AND sizeof($dados)){
            $i = 0;
            foreach($dados['unidadesComerciais'] as $key){
              $i++;
        ?>
        <fieldset>
          <!-- Form Name -->
          <legend><?= $i ?> - Unidades Comerciais</legend>
          <!-- TIPO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Tipo:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->tipo ?>"/>
            </div>
          </div>
          <!-- EMBALAGEM //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Embalagem:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->embalagem ?>"/>
            </div>
          </div>
          <!-- LASTRO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Lastro:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->lastro ?>"/>
            </div>
          </div>
          <!-- CAMADA //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Camada:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->camada ?>"/>
            </div>
          </div>
          <!-- COMPRIMENTO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Comprimento:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->comprimento ?>"/>
            </div>
          </div>
          <!-- ALTURA //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Altura:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->altura ?>"/>
            </div>
          </div>
          <!-- LARGURA //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Largura:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->largura ?>"/>
            </div>
          </div>
          <!-- PESO LÍQUIDO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Peso Líquido:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->peso_liquido ?>"/>
            </div>
          </div>
          <!-- PESO BRUTO //-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Peso Bruto:</label>
            <div class="col-md-3">
              <input type="text" class="form-control input-md" value="<?= $key->peso_bruto ?>"/>
            </div>
          </div>
        </fieldset>
        <?php
            }
          }
        ?>        
  		</form>
    </div>
    <!-- //-->
		<footer class="bs-footer" role="contentinfo">
			<div class="container">
				<div class="bs-social">
					<ul class="bs-social-buttons">
						<li class="follow-btn">
							<a id="js-twitter-follow" href="https://twitter.com/ipage_software" class="twitter-follow-button" data-show-count="false">Seguir @ipage_software</a>
						</li>
						<li class="tweet-btn">
							<a id="js-twitter-tweet" href="https://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/ipage_software" data-text="Agência de Desenvolvimento Web #LavoroX framework HTML/CSS/JS"
							data-via="lavoroX" data-related="LavoroX">Tweet</a>
						</li>
					</ul>
				</div>
				<p>
					Copyright Diógenes Dias &copy; <?php echo date("Y"); ?>
					<a href="http://www.ipage.com.br" target="_blank">Ipage Software</a>
				</p>
			</div>
		</footer>
		<script src="assets/js/jquery-1.11.0.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/scripts.min.js"></script>
    <script type="text/javascript" src="ipage/js/jquery-mask/jquery.mask.min.js"></script>
    <script src="ipage/js/index.js"></script>
    <!-- end: PACOTE JAVASCRIPT IPAGE WEBSERVICE //-->
	</body>
</html>