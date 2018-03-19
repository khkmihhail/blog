<?foreach($tags as $tag):?>
<ul class="list-group">
  <li class="list-group-item list-group-item-warning">
      <span>
        <a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>">
            <h1><?=$tag['tag_name']?></h1>
        </a>
    </span>
  </li>
</ul>
<?endforeach?>

