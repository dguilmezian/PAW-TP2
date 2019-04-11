<section id="form-summary">
      <?php
    foreach ($mapData as $label => $value): ?>
      <p><?= $label . ': ' . $dates[$value]  ?></p>
    <?php
    endforeach;
      ?>
      <figure>
        <img src="<?= $dates['pathImg']  ?>" height=200 width=300 />
        <figcaption>Diagnóstico</figcaption>
      </figure>
</section>
