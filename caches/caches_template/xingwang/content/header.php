<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />

<link href="<?php echo CSS_PATH;?>xingwang/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/header.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/page.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/nav.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/tip.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>xingwang/music.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>xingwang/common.js"></script>
<style type="text/css">
	.page-header{
		background:url(<?php echo IMG_PATH;?>xingwang/header.png) center center;
		background-repeat: no-repeat;
	}

	.page-container .wrap-left{
		background: url(<?php echo IMG_PATH;?>xingwang/left.png); 
		background-repeat:no-repeat;
	}

	.page-container .wrap-right{
		background: url(<?php echo IMG_PATH;?>xingwang/right.png); 
		background-repeat:no-repeat;
	}

	.page-container .wrap-top{
		background: url(<?php echo IMG_PATH;?>xingwang/top.png) center center; 
		background-repeat:no-repeat;
	}

	.page-container .wrap{
		background: url(<?php echo IMG_PATH;?>xingwang/content_bg.png);
	}
</style>
</head>
<body>
	<div id="pageIndex" class="page-index">
		<div id="pageHeader" class="page-header">
			<div class="wrap">					
				<ul>
					<?php $key = 0?>
					<?php $n=1;if(is_array($CATEGORYS)) foreach($CATEGORYS AS $data) { ?>
					<?php if($data['parentid'] == 0) { ?>
					<li class="<?php if($key < 3) { ?>left<?php } else { ?>right<?php } ?> <?php if($key == 3) { ?>first<?php } ?>">
						<a href="<?php echo $data['url'];?>" <?php if(in_array($catid, explode(',', $data['arrchildid']))) { ?>class="active"<?php } ?>><?php echo $data['catname'];?></a>
					</li>
					<?php $key++; ?>
					<?php } ?>
					<?php $n++;}unset($n); ?>				
				</ul>				
			</div>
		</div>
		<div id="pageContainer" class="page-container">
			<div class="wrap-left"></div>
			<div class="wrap-right"></div>
			<div class="wrap">
				<div id="pageNav" class="page-nav">
					<span class="title"><?php echo $catname;?></span>					
					<span class="label"><a href="<?php echo siteurl($siteid);?>">Home</a>><?php echo substr(catpos($catid, '>'), 0, -1);?>
				</div>
				<div class="wrap-top"></div>