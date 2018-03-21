<div class="container">
    <div class="col-md-12">
            <h1><?=$post['post_subject']?></h1>
        <div>
            <span class="label label-default"><?=$post['user_id']?></span>
            <span class="badge">Posted <?=$post['post_created']?></span>
            <span>
                <p>
                    <?=$post['post_text']?>
                </p>
            </span>
            <a href="<?=BASE_URL?>comments/<?=$post['post_id']?>">
                Comments
            </a>
            <div class="pull-right">
                <span class="label label-primary">story</span>
                <span class="label label-success">blog</span>
                <span class="label label-info">personal</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </div>
         </div>
    </div>
</div>