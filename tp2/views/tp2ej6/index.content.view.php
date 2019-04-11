<section id="shift-form">
    <form oninput="result.value=parseInt(heigh.value)" method="POST" enctype="multipart/form-data">
        <?php require 'views/forms/form-attachment.html' ?>
        <input type="reset" value="Limpiar">
        <input type="submit" value="Enviar">
    </form>
</section>
