<?php $this->need('header.php'); ?>

<div class="container" id="main">
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="post-title"><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></h3>
                    <div class="post-meta">
                        <span><i class="fa fa-calendar"></i>&nbsp;<?php $this->date('Y-m-d'); ?>　</span>
                        <span><i class="fa fa-user"></i>&nbsp;<a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>　</span>
                        <span><i class="fa fa-eye"></i>&nbsp;阅读 <?php $this->views()._e(' ') ?>　</span>
                        <span><i class="fa fa-book"></i>&nbsp;<?php $this->category(','); ?>　</span>
                        <span><i class="fa fa-comments-o"></i>&nbsp;<a href="<?php $this->permalink() ?>"><?php $this->commentsNum('%d 评论'); ?></a></span>
                    </div>
                    <div class="post-content"><?php $this->content(); ?></div>
                    <p class="arctags text-right"><span aria-hidden="true" class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;&nbsp;<?php $this->tags(' , ', true, '无标签'); ?></p>
                </div>
            </div>

            <div class="panel panel-default prenext">
              <div class="panel-body">
                <?php $this->thePrev('<span class="label label-danger">上一篇</span> %s','<span class="label label-default">上一篇</span> 没有了');?>
              </div>
              <div class="panel-body">
                <?php $this->theNext('<span class="label label-danger">下一篇</span> %s','<span class="label label-default">下一篇</span> 没有了');?>
              </div>                  
            </div>

            <?php $this->need('comments.php'); ?>
        </div>
    <?php $this->need('footer.php'); ?>
