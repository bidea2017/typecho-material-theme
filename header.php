<!DOCTYPE HTML>
<html lang="zh-CN">
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    	<meta name="renderer" content="webkit">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
        <?php if ($this->options->siteIcon): ?>
        <link rel="Shortcut Icon" href="<?php $this->options->siteIcon() ?>" />
        <link rel="Bootmark" href="<?php $this->options->siteIcon() ?>" />
        <?php endif; ?>
    	<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/bootstrap.min.css">
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/font-awesome.min.css">
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/material.min.css">
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/ripples.min.css">
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/roboto.min.css">
        <link rel="stylesheet" href="https://dn-biezhi.qbox.me/highlight/github.min.css">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/customs.css'); ?>">
<script>
</script>

	</head>

	<header>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                </div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
				    <ul class="nav navbar-nav">
				    	<li<?php if($this->is('index')): ?> class="active"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> <?php $this->options->title() ?></a></li>
						<?php $catelist = $this->widget('Widget_Metas_Category_List');
							if($catelist->have()){
								while($catelist->next()){
									if(count($catelist->children)){
										echo "<li class='dropdown'>";
										echo "<a href='$catelist->permalink' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$catelist->name<span class='caret'></span></a>";
										echo "<ul class='dropdown-menu'>";
											foreach($catelist->children as $v){
												echo "<li><a href='".$v['permalink']."'>".$v['name']."</a></li>";
											}				
										echo "</ul>";
										echo "</li>";						  
									} else if($catelist->parent==0){
										echo "<li><a href='$catelist->permalink'>$catelist->name</a></li>";
									}
								}
							}
						?>
				    </ul>
                    <?php if ( !empty($this->options->misc) && in_array('ShowLogin', $this->options->misc) ) : ?>
				    <ul class="nav navbar-nav navbar-right">
				    	<?php if($this->user->hasLogin()): ?>
				    		<li><a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a></li>
				      	<?php endif; ?>
				      	<?php if ($this->options->githubName): ?>
				      	<li><a href="https://github.com/<?php $this->options->githubName() ?>" target="_blank"><i class="fa fa-github-alt"></i> github</a></li>
				      	<?php endif; ?>

				      	<?php if ($this->options->weibolink): ?>
				      	<li><a href="<?php $this->options->weibolink() ?>" target="_blank"><i class="fa fa-weibo"></i> weibo</a></li>
				      	<?php endif; ?>
						
						<?php if ($this->options->qqgroup): ?>
				      	<li><a href="<?php $this->options->qqgroup() ?>" target="_blank"><i class="fa fa-users"></i> QQ群</a></li>
				      	<?php endif; ?>
				    </ul>
                    <?php endif; ?>
			  	</div>
			</div>
		</div>
	</header>

