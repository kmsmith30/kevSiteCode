
    <div id="content">

      <div id="content-left">

      <?php foreach($pics as $pic): ?>
        <div class="pic">
          <h2 id="pic-title"><b><?= $pic->title ?></b></h2>
        <?php if ($pic->location != null): ?>
          <p id="pic-caption"><?= $pic->caption ?> @ <?= $pic->location ?></p>
        <?php else: ?>
          <p id="pic-caption"><?= $pic->caption ?></p>
        <?php endif; ?>
          <img src="<?= BASE_URL?>/public/images/<?= $pic->img_name ?>" alt="Pic id:<?= $pic->id ?>">
        </div><!-- .pic -->

      <?php endforeach; ?>
      </div><!-- #content-left -->

      <div id="content-right">
      </div><!-- #content-right -->
    </div><!-- #content -->
