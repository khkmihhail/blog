<div class="container">
    <?foreach($comments as $comment):?>
      <span>
          <div>
              <h1><?=$post['post_subject']?></h1>
              <p><?=$post['post_text']?></p>
              <p><?=$comment['post_comment']?></p>
          </div>
    </span>
    <?endforeach?>
</div>
