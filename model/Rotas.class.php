<?php 

Class Rotas{
	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';

	static function get_SiteHome(){
		return Config::SITE_URL.'/'.Config::SITE_PASTA;
	}

	static function get_SiteRAIZ(){
		return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
	}

	static function get_SiteTEMP(){
		return self::get_SiteHome().'/'.self::$pasta_view;
	}

	static function pag_Cart(){
		return self::get_SiteHome().'/cart';
	}

	static function pag_CheckOut(){
		return self::get_SiteHome().'/checkout';
	}

	static function pag_Login(){
		return self::get_SiteHome().'/login';
	}

	static function pag_Conta(){
		return self::get_SiteHome().'/clientes';
	}

	static function pag_Contact(){
		return self::get_SiteHome().'/contact';
	}

	static function pag_Product_Detail(){
		return self::get_SiteHome().'/product_detail';
	}

	static function pag_Products(){
		return self::get_SiteHome().'/products';
	}

	//static function pag_Register(){
		//return self::get_SiteHome().'register';
	//}

	static function get_Pag(){
		$var_get = filter_input(INPUT_GET,'pag', FILTER_DEFAULT);

		$var_get = $var_get ?? 'home';

		require Rotas::get_SiteRAIZ()."/controller/{$var_get}.php";
		
		// if(isset($_GET['pag'])){
		// 	$pagina=$_GET['pag'];
		// 	self::$pag=explode('/',$pagina);

		// 	//echo '<pre>';
		// 	//var_dump(self::$pag);
		// 	//echo '</pre>';

		// 	$pagina='controller/'.self::$pag[0].'.php';
		// 	//$pagina='controller/'.$_GET['pag'].'.php';
		// 	//echo $pagina;
		// 	if(file_exists($pagina)){
		// 		include $pagina;
		// 	}else{
		// 		include 'erro.php';
		// 	}
		// }
	}
}
