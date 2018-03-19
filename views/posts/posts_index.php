<div class="container">
    <?foreach($posts as $post):?>
    <div class="col-md-12">
        <a href="<?=BASE_URL?>comments/view/<?=$comments['post_comment']?>">
            <h1><?=$post['post_subject']?></h1>
        </a>
        <?var_dump($post_id);?>
        <div>
            <span class="label label-default"><?=$post['user_id']?></span>
            <span class="badge">Posted <?=$post['post_created']?></span>
            <div class="pull-right">
                <span class="label label-primary">story</span>
                <span class="label label-success">blog</span>
                <span class="label label-info">personal</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </div>
         </div>
    </div>
    <?endforeach?>
</div>