<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!-- FB share -->
<meta property="og:url"           content="<?=current_url();?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?=str_replace("|","",$note_data[0]->note_title); ?>" />
<meta property="og:description"   content="<?=strip_tags(mb_substr(strstr($note_data[0]->note_contents,"|"),1,70,"utf-8"))?>..." />
<meta property="og:image"         content="<?=base_url().'assets/img/index/'.$note_data[0]->note_id.'.png' ;?>" />
<meta property="og:site_name" 		content="Shrhe" />
<!-- twitter share -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Shrhe筆記" />
<meta name="twitter:creator" content="@Shrhe" />
<!-- 連結絕對路徑話 -->
<base href="<?= base_url();?>" />
<link rel="icon" href="assets/img/nav/shrhe.ico">
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- sprite css -->
<link href="assets/css/sprite.css" rel="stylesheet" type="text/css">
<!-- navbar css -->
<link href="assets/css/navbar.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
