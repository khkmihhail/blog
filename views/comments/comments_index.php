<div class="container">
    <?foreach($_comments as $comment):?>
      <span>
          <div>
              <h1><?=$comment['post_subject']?></h1>
              <p><?=$comment['post_text']?></p>
              <p><?=$comment['post_comment']?></p>
          </div>
          <div class="pull-right">
                <span class="label label-primary">blog</span>
                <span class="label label-success">personal</span>
                <span class="label label-info">comments</span>
            </div>
    </span>
    <?endforeach?>
</div>
