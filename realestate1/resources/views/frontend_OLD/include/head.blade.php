<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="google-site-verification" content="KLlrgEGNfxV8hiDfD3Ru0d1QKTgcu-ZBSTj0VnZ1gYc" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
	<link href="assets/slick-1.6.0/slick.css" rel="stylesheet">
	<link href="assets/chosen-1.6.2/chosen.min.css" rel="stylesheet">
	<link href="css/nouislider.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	<script src="js/nouislider.min.js"></script>
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130963961-1"></script>
  	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'UA-130963961-1');
  	</script>
	<style>
		.header-default .main-menu-wrap {
			width: 100%;
		    background: #414197;
		}
		a:focus, a:hover{
		    color: #fff ;
		    text-decoration: none !important;
		}
		.header-default .nav.navbar-nav li .sub-menu li a { color:#fff; font-weight:300; }
		/* scrollbar */
		::-webkit-scrollbar {width:6px}
		::-webkit-scrollbar-track {background:#fff}
		::-webkit-scrollbar-thumb {border-radius:10px;background:#ccc}
		::-webkit-scrollbar-thumb:window-inactive {background:#ccc}

		/* button */
		.pop-btn{font-weight: 500;display:inline-block;width:auto;height:15px;line-height:30px;color:#414197 !important;text-align:center;font-size:1.2em;}
		.pop-btn:hover{color:#414197 !important;text-decoration: underline !important;}
		.pop-btn i {margin-right: 3px;font-size:1.3em}
		.mob-no{color: #504e4e !important;font-weight: 500 !important;font-size: 1.2em !important;}
		.mob-no i {margin-right: 3px;}

		/* modal Pop */
		.modalDialog{
		    position:fixed;
		    top:0;
		    right:0;
		    bottom:0;
		    left:0;
		    z-index:99999;
		    background:rgba(0, 0, 0, 0.7);
		    opacity:0; 
		    -webkit-transition: opacity 300ms ease-in;
		    transition: opacity 300ms ease-in;
		    pointer-events: none;
		}
		.modalDialog:target{
		    opacity:1;
		    pointer-events:auto;
		}

		/* custum-popup style */
		.modalDialog{position:fixed;top:0;right:0;bottom:0;left:0;z-index: 99999;background:rgba(0, 0, 0, 0.7);opacity:0; 
		    -webkit-transition: opacity 300ms ease-in;
		    transition: opacity 300ms ease-in;
		    pointer-events: none;}
		.modalDialog:target{opacity:1;pointer-events:auto;}
		.popWrap{
		    position:fixed;top:50%;left:50%;width:50%;max-width:500px;min-width:325px;height:auto;background:#fff;
		    -webkit-transform: translateX(-50%) translateY(-50%);
		    transform: translateX(-50%) translateY(-50%);
		    }
		.popTit{height:50px;line-height:50px;text-align:center;color:#fff;background: #414197;font-size:1.2em;font-weight:500;}
		.popCont{padding:15px 15px 0px 15px;color:#000;font-weight: 500;}
		.popCont p{white-space:pre-line;padding: 1em;}
		.popCont.type02{text-align:left}
		.popBtn{text-align:center;overflow:hidden}
		.popBtn.type01{padding: 0.7em;}
		.popBtn.type02{padding:10px}
		.popBtn.type02 .btnBx{display:block;float:left;width:50%}
		.popBtn.type02 .btnBx .btn{display:block;padding:0 5px}
		.popBtn .cmnBtn{height:35px;line-height:35px;width: 9em;}
		.cmnBtn:focus, .cmnBtn:hover{color: #fff !important;}
		.cmnBtn{display:inline-block;width:100%;height:30px;line-height:30px;text-align:center;color:#fff !important;background-color:#414197;border:1px solid #414197;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px}
		.cmnBtn.on{color:#ff7573 !important;background-color:#fff;border:1px solid #ff7573}

		/* table style */
		.tbStWrap{position:relative;margin-top:15px;color:#605e5c}
		.tbStWrap .tbTit{line-height:1.0;margin-bottom:10px;color:#605e5c;text-align:left;font-size:16px;font-weight:bold;background:url('/images/table_bull.png') 0 center no-repeat}
		.tbSt01{width:100%;border:1px solid #e6e6e6;/* font-size:12px */}
		.tbSt01 th,.tbSt01 td{padding:10px;border-bottom:1px solid #e6e6e6}
		.tbSt01 th:last-child,.tbSt01 td:last-child{border-right:none}
		.tbSt01 th{background-color:#eceef1;color:#605e5c;text-align:left}
		.tbSt01 td{background-color:#fff;color:#a0a0a0;text-align:left}

		.PopNoDiv{
		    display: flex;
		    padding-top: 5px;
		}

		.PopUpNo{
		    text-align: center;
		    padding-top: 20px;
		    font-size: 19px;
		    color: #414197;
		}
	</style>

	@stack('head')
</head>
