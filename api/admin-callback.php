<?php
session_start();
if ($_SESSION['loggedin'] == 1) {
  require_once 'admin-header.php';
  require_once 'pdo.php';
} else {
  header('Location: admin.php');
}
?>

<section class="content">
  <div class="container">

    <?php
    $stmt = $pdo->prepare('SELECT * FROM `callback` ORDER BY id DESC');
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row => $value) {
      if ($value['status'] == 1) {
        echo '
    <div class="admin-callback-item">
      <p>' . $value['name'] . '</p>
      <p>' . $value['phone'] . '</p>
      <p>' . date("d.m.Y", strtotime($value['date'])) . '</p>
        <select id="testt" data-id="' . $value['id'] . '" onchange="updateCallbackStatus(this)">
          <option value="0">Ожидает</option>
          <option value="1" selected>Исполнено</option>
        </select>
      <p><a href="delete-callback.php?id=' . $value['id'] . '">Удалить</a></p>
    </div>
    <hr>
    ';
      } else {
        echo '
    <div class="admin-callback-item">
      <p>' . $value['name'] . '</p>
      <p>' . $value['phone'] . '</p>
      <p style="color:red">' . date("d.m.Y", strtotime($value['date'])) . '</p>
      <select data-id="' . $value['id'] . '" onchange="updateCallbackStatus(this)">
        <option value="0" selected>Ожидает</option>
        <option value="1">Исполнено</option>
      </select>
      <p><a href="delete-callback.php?id=' . $value['id'] . '">Удалить</a></p>
    </div>
    <hr>
    ';
      }
    }
    ?>
  </div>
</section>

<script>
function updateCallbackStatus(submit) {
  var form = document.createElement('form');
  var status = document.createElement('input');
  var id = document.createElement('input');

  form.method = 'POST';
  form.action = 'callback-update.php';

  status.value = submit.value;
  status.name = 'status';
  status.hidden = true;
  id.value = submit.dataset.id;
  id.name = 'id';
  id.hidden = true;

  form.appendChild(status);
  form.appendChild(id);

  document.body.appendChild(form);
  form.submit();
}
</script>
</body>

</html>