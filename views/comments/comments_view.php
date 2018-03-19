<?foreach ($comments as $comment):?>
<div class="col-md-12">
      <span>
          <div>
              <h1><?=$post['post_subject']?></h1>
              <p><?=$post['post_text']?></p>
              <p><?=$comment['post_comment']?></p>
          </div>
    </span>
</div>
<?endforeach?>