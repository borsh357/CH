<?php require_once './parts/header.php' ?>
<section class="content">
  <div class="container">
    <h1 class="text-center">Наши работы</h1>
    <div class="gallery">
      <?php require_once 'api/get-gallery.php'; ?>
    </div>
</section>
<link rel="stylesheet" href="plugins/lightzoom/style.css" type="text/css">
<script src="plugins/lightzoom/lightzoom.js"></script>
<script type="text/javascript">
jQuery('.lightzoom').lightzoom();
</script>
<?php require_once './parts/footer.php' ?>