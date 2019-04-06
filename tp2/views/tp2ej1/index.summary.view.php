<?php
if (!empty($errors)): ?>
  <section id="form-errors">
    <h3>Error</h3>
      <p>Ha ocurrido un error en la carga del formulario:</p>
      <?php
    foreach ($errors as $type => $error): ?>
      <p><?= $error ?></p>
    <?php
    endforeach;
  ?> </section> <?php
endif;
?>
