<?foreach ($tags as $tag):?>
    <div class="pull-left">
        <h1><?=$tag['tag_name']?></h1>
        <a href=""><span class=""><?=$tag['tag_name']?></span></a>
    </div>
<?endforeach?>