<section id="form-summary">
  <h3><?= $main_title ?></h3>
      <?php
    foreach ($mapData as $label => $value): ?>
      <p><strong><?= $label . '</strong>: ' . $dates[$value]  ?></p>
    <?php
    endforeach;
      ?>
      <figure>
        <img src="<?= $dates['pathImg']  ?>" height=200 width=300 />
        <figcaption>Diagnóstico</figcaption>
      </figure>
</section>
