<?php 

class Config{

	//INFOS BASICAS DO SITE
	const SITE_URL = "http://localhost",
		  SITE_PASTA = "ecomm",
	      SITE_NOME = "Matheus' e-Commerce",
	      SITE_EMAIL_ADM = "matheus.a.aguiar@hotmail.com";

	//INFOS DO BD
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "mtsecomm",
		  BD_PREFIX = "";

 	//INFOS PHP MAILLER
	const EMAIL_HOST = "smtp-mail.outlook.com",
		  EMAIL_USER = "matheus.a.aguiar@hotmail.com",
		  EMAIL_NOME = "Contato Matheus e-Commerce",
		  EMAIL_SENHA = "123456",
		  EMAIL_PORT = 587,
		  EMAIL_SMTPAUTH = true,
		  EMAIL_SMPTSECURE = "tls",
		  EMAIL_COPIA = "matheus.a.aguiar@hotmail.com";

}
 ?>