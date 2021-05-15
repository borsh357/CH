<?php
//get pricelist values from database
require_once './api/pdo.php';
$demontage_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 4'));
$montage_electricity_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 168'));
$montage_radiator_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 200'));
$montage_pipe_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 199'));
$montage_door_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 135'));
$montage_window_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 134'));
$montage_floor_laminat_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 73'));
$montage_floor_wood_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 82'));
$montage_floor_parket_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 78'));
$montage_floor_tile_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 153'));
$montage_floor_linoleum_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 70'));
$montage_wall_oboi_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 105'));
$montage_wall_paint_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 106'));
$montage_wall_decor_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 115'));
$montage_wall_tile_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 153'));
$montage_ceiling_paint_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 67'));
$montage_ceiling_hang_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 87'));
$montage_ceiling_stretch_price = intval(getSingleValue($pdo, 'SELECT `price` FROM `pricelist` WHERE `id` = 91'));

//convert php values to JS object
echo "<script>
        const pricelist = {
          demontage_price: {$demontage_price},
          montage_electricity_price: {$montage_electricity_price},
          montage_radiator_price: {$montage_radiator_price},
          montage_pipe_price: {$montage_pipe_price},
          montage_door_price: {$montage_door_price},
          montage_window_price: {$montage_window_price},
          montage_floor_laminat_price: {$montage_floor_laminat_price},
          montage_floor_wood_price: {$montage_floor_wood_price},
          montage_floor_parket_price: {$montage_floor_parket_price},
          montage_floor_tile_price: {$montage_floor_tile_price},
          montage_floor_linoleum_price: {$montage_floor_linoleum_price},
          montage_wall_oboi_price: {$montage_wall_oboi_price},
          montage_wall_paint_price: {$montage_wall_paint_price},
          montage_wall_decor_price: {$montage_wall_decor_price},
          montage_wall_tile_price: {$montage_wall_tile_price},
          montage_ceiling_paint_price: {$montage_ceiling_paint_price},
          montage_ceiling_hang_price: {$montage_ceiling_hang_price},
          montage_ceiling_stretch_price: {$montage_ceiling_stretch_price}
        }
      </script>
";
?>

<h2>Рассчет стоимости ремонта</h2>
<div id="price-calc-container" class="price-calc-container">
  <div class="price-calc-row">
    <span class="price-calc-row-number">1</span>
    <div class="price-calc-row-line">
      <span class="price-calc-row-header">Информация об объекте</span>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Тип объекта</p>
          <div>
            <input type="radio" name="object-type" id="object-type-apartment" value="apartment">
            <label for="object-type-apartment">Квартира</label>

            <input type="radio" name="object-type" id="object-type-house" value="house">
            <label for="object-type-house">Коттедж/Частный дом</label>
          </div>
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Вид объекта</p>
          <div>
            <input type="radio" name="object-state" id="object-state-new" value="new">
            <label for="object-state-new">Новостройка</label>

            <input type="radio" name="object-state" id="object-state-old" value="old">
            <label for="object-state-old">Вторичное жилье</label>
          </div>
        </div>

      </div>
    </div>
  </div> <!-- </div> end of 1st calc row -->

  <div class="price-calc-row">
    <span class="price-calc-row-number">2</span>
    <div class="price-calc-row-line">
      <span class="price-calc-row-header">Объем работ</span>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Площадь (м²)</p>
          <input type="number" name="object-measurements-area" id="object-measurements-area" value="50">
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Высота потолка (м)</p>
          <input type="number" name="object-measurements-height" id="object-measurements-height" value="2.7" step="0.1">
        </div>

      </div>
    </div>
  </div> <!-- </div> end of 2nd calc row -->

  <div class="price-calc-row">
    <span class="price-calc-row-number">3</span>
    <div class="price-calc-row-line">
      <span class="price-calc-row-header">Виды работ</span>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Демонтаж перегородок/полов</p>
          <div>
            <input type="radio" name="demontage" id="demontage-yes" value="true">
            <label for="demontage-yes">Да</label>

            <input type="radio" name="demontage" id="demontage-no" value="false" checked>
            <label for="demontage-no">Нет</label>
          </div>
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Монтаж электропроводки</p>
          <div>
            <input type="radio" name="montage-electricity" id="montage-electricity-yes" value="true">
            <label for="montage-electricity-yes">Да</label>

            <input type="radio" name="montage-electricity" id="montage-electricity-no" value="false" checked>
            <label for="montage-electricity-no">Нет</label>
          </div>
        </div>
      </div>
      <div class="price-calc-row-dashed-line"></div>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Замена/установка радиаторов</p>
          <div>
            <input type="radio" name="montage-radiator" id="montage-radiator-yes" value="true">
            <label for="montage-radiator-yes">Да</label>

            <input type="radio" name="montage-radiator" id="montage-radiator-no" value="false" checked>
            <label for="montage-radiator-no">Нет</label>
          </div>
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Монтаж водопровода</p>
          <div>
            <input type="radio" name="montage-water" id="montage-water-yes" value="true">
            <label for="montage-water-yes">Да</label>

            <input type="radio" name="montage-water" id="montage-water-no" value="false" checked>
            <label for="montage-water-no">Нет</label>
          </div>
        </div>
      </div>
      <div class="price-calc-row-dashed-line"></div>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Установка/замена дверей</p>
          <div>
            <input type="radio" name="montage-door" id="montage-door-yes" value="true">
            <label for="montage-door-yes">Да</label>

            <input type="radio" name="montage-door" id="montage-door-no" value="false" checked>
            <label for="montage-door-no">Нет</label>
          </div>
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Установка/замена окон</p>
          <div>
            <input type="radio" name="montage-window" id="montage-window-yes" value="true">
            <label for="montage-window-yes">Да</label>

            <input type="radio" name="montage-window" id="montage-window-no" value="false" checked>
            <label for="montage-window-no">Нет</label>
          </div>
        </div>
      </div>
      <div class="price-calc-row-dashed-line"></div>

      <div class="price-calc-row-content">
        <div class="price-calc-row-content-left">
          <p class="price-calc-row-cat-header">Отделка пола</p>
          <div>
            <input type="checkbox" name="montage-floor-laminat" id="montage-floor-laminat">
            <label for="montage-floor-laminat">Ламинат или паркетная доска</label>
          </div>
          <div>
            <input type="checkbox" name="montage-floor-massive" id="montage-floor-massive">
            <label for="montage-floor-massive">Массивная доска</label>
          </div>
          <div>
            <input type="checkbox" name="montage-floor-parket" id="montage-floor-parket">
            <label for="montage-floor-parket">Штучный паркет</label>
          </div>
          <div>
            <input type="checkbox" name="montage-floor-tile" id="montage-floor-tile">
            <label for="montage-floor-tile">Плитка</label>
          </div>
          <div>
            <input type="checkbox" name="montage-floor-linoleum" id="montage-floor-linoleum">
            <label for="montage-floor-linoleum">Линолеум</label>
          </div>
        </div>

        <div class="price-calc-row-content-middle">
          <p class="price-calc-row-cat-header">Отделка стен</p>
          <div>
            <input type="checkbox" name="montage-wall-oboi" id="montage-wall-oboi">
            <label for="montage-wall-oboi">Обои</label>
          </div>
          <div>
            <input type="checkbox" name="montage-wall-paint" id="montage-wall-paint">
            <label for="montage-wall-paint">Покраска</label>
          </div>
          <div>
            <input type="checkbox" name="montage-wall-decor" id="montage-wall-decor">
            <label for="montage-wall-decor">Декоративная штукатурка</label>
          </div>
          <div>
            <input type="checkbox" name="montage-wall-tile" id="montage-wall-tile">
            <label for="montage-wall-tile">Керамическая плитка</label>
          </div>
        </div>

        <div class="price-calc-row-content-right">
          <p class="price-calc-row-cat-header">Отделка потолка</p>
          <div>
            <input type="checkbox" name="montage-ceiling-paint" id="montage-ceiling-paint">
            <label for="montage-ceiling-paint">Штукатурка + покраска</label>
          </div>
          <div>
            <input type="checkbox" name="montage-ceiling-hang" id="montage-ceiling-hang">
            <label for="montage-ceiling-hang">Подвесной потолок</label>
          </div>
          <div>
            <input type="checkbox" name="montage-ceiling-stretch" id="montage-ceiling-stretch">
            <label for="montage-ceiling-stretch">Натяжной потолок</label>
          </div>
        </div>
      </div>

    </div>
  </div> <!-- </div> end of 3rd calc row -->

  <div class="price-calc-total">
    <div class="price-calc-total-price-block">
      <div class="price-calc-total-col">
        <span class="price-calc-total-header">Ориентировочная стоимость работ</span>
        <p class="price-calc-total-price price-calc-total-price-total">0 руб.</p>
      </div>
      <div class="price-calc-total-col">
        <span class="price-calc-total-header">Ориентировочная стоимость материалов</span>
        <p class="price-calc-total-price price-calc-total-price-material">0 руб.</p>
      </div>
    </div>
    <a href="#callback-block"><button class="price-calc-total-btn">Вызвать замерщика</button></a>
  </div>

</div> <!-- </div> end of calc container -->

<script>
$('.price-calc-container input').on('change', function() {

  //inputs values
  let objectType = $('input[name="object-type"]:checked').val();
  let objectState = $('input[name="object-state"]:checked').val();
  let objectArea = $('#object-measurements-area').val();
  let objectHeight = $('#object-measurements-height').val();
  let demontage = $('input[name="demontage"]:checked').val();
  let montageElectricity = $('input[name="montage-electricity"]:checked').val();
  let montageRadiator = $('input[name="montage-radiator"]:checked').val();
  let montageWater = $('input[name="montage-water"]:checked').val();
  let montageDoor = $('input[name="montage-door"]:checked').val();
  let montageWindow = $('input[name="montage-window"]:checked').val();
  let montageFloorLaminat = $('#montage-floor-laminat').is(':checked');
  let montageFloorMassive = $('#montage-floor-massive').is(':checked');
  let montageFloorParket = $('#montage-floor-parket').is(':checked');
  let montageFloorTile = $('#montage-floor-tile').is(':checked');
  let montageFloorLinoleum = $('#montage-floor-linoleum').is(':checked');
  let montageWallOboi = $('#montage-wall-oboi').is(':checked');
  let montageWallPaint = $('#montage-wall-paint').is(':checked');
  let montageWallDecor = $('#montage-wall-decor').is(':checked');
  let montageWallTile = $('#montage-wall-tile').is(':checked');
  let montageCeilingPaint = $('#montage-ceiling-paint').is(':checked');
  let montageCeilingHang = $('#montage-ceiling-hang').is(':checked');
  let montageCeilingStretch = $('#montage-ceiling-stretch').is(':checked');

  //initial values
  let wallArea = Math.round(Math.sqrt(objectArea)) * 4 * objectHeight;
  let multiplier = 2;
  let demontage_price, montageElectricity_price, montageRadiator_price, montageWater_price, montageDoor_price,
    montageWindow_price, montageFloorLaminat_price, montageFloorMassive_price, montageFloorParket_price,
    montageFloorTile_price, montageFloorLinoleum_price, montageWallOboi_price, montageWallPaint_price,
    montageWallDecor_price, montageWallTile_price, montageCeilingPaint_price, montageCeilingHang_price,
    montageCeilingStretch_price = 0;

  let total_price = 0;

  //multipliers
  if (objectType === 'house') multiplier += 0.2;
  if (objectState === 'old') multiplier += 0.5;

  //calculating separate prices
  if (demontage === "true") {
    demontage_price = objectArea / 2 * pricelist.demontage_price;
  } else {
    demontage_price = 0;
  }

  if (montageElectricity === "true") {
    montageElectricity_price = Math.sqrt(objectArea) * 4 * pricelist.montage_electricity_price;
  } else {
    montageElectricity_price = 0;
  }

  if (montageRadiator === "true") {
    montageRadiator_price = objectArea / 10 * pricelist.montage_radiator_price;
  } else {
    montageRadiator_price = 0;
  }

  if (montageWater === "true") {
    montageWater_price = objectArea / 2 * pricelist.montage_pipe_price;
  } else {
    montageWater_price = 0;
  }

  if (montageDoor === "true") {
    montageDoor_price = Math.round(objectArea / 15) * pricelist.montage_door_price;
  } else {
    montageDoor_price = 0;
  }

  if (montageWindow === "true") {
    montageWindow_price = Math.round(objectArea / 15) * pricelist.montage_window_price;
  } else {
    montageWindow_price = 0;
  }

  //calculating floor price
  let floorCoverCount = 5;
  if (montageFloorLaminat) {
    montageFloorLaminat_price = objectArea * pricelist.montage_floor_laminat_price;
    floorCoverCount++;
  } else {
    montageFloorLaminat_price = 0;
    floorCoverCount--;
  }

  if (montageFloorMassive) {
    montageFloorMassive_price = objectArea * pricelist.montage_floor_wood_price;
    floorCoverCount++;
  } else {
    montageFloorMassive_price = 0;
    floorCoverCount--;
  }

  if (montageFloorParket) {
    montageFloorParket_price = objectArea * pricelist.montage_floor_parket_price;
    floorCoverCount++;
  } else {
    montageFloorParket_price = 0;
    floorCoverCount--;
  }

  if (montageFloorTile) {
    montageFloorTile_price = objectArea * pricelist.montage_floor_tile_price;
    floorCoverCount++;
  } else {
    montageFloorTile_price = 0;
    floorCoverCount--;
  }

  if (montageFloorLinoleum) {
    montageFloorLinoleum_price = objectArea * pricelist.montage_floor_linoleum_price;
    floorCoverCount++;
  } else {
    montageFloorLinoleum_price = 0;
    floorCoverCount--;
  }

  let montageFloor_totalPrice = montageFloorLaminat_price + montageFloorMassive_price +
    montageFloorParket_price + montageFloorTile_price + montageFloorLinoleum_price;
  floorCoverCount = Math.round(floorCoverCount / 2);

  if (floorCoverCount > 0) {
    montageFloor_totalPrice /= floorCoverCount;
  }



  //calculating wall price
  let wallCoverCount = 4;
  if (montageWallOboi) {
    montageWallOboi_price = wallArea * pricelist.montage_wall_oboi_price;
    wallCoverCount++;
  } else {
    montageWallOboi_price = 0;
    wallCoverCount--;
  }

  if (montageWallPaint) {
    montageWallPaint_price = wallArea * pricelist.montage_wall_paint_price;
    wallCoverCount++;
  } else {
    montageWallPaint_price = 0;
    wallCoverCount--;
  }

  if (montageWallDecor) {
    montageWallDecor_price = wallArea * pricelist.montage_wall_decor_price;
    wallCoverCount++;
  } else {
    montageWallDecor_price = 0;
    wallCoverCount--;
  }

  if (montageWallTile) {
    montageWallTile_price = wallArea * pricelist.montage_wall_tile_price;
    wallCoverCount++;
  } else {
    montageWallTile_price = 0;
    wallCoverCount--;
  }

  let montageWall_totalPrice = (montageWallOboi_price + montageWallPaint_price +
    montageWallDecor_price + montageWallTile_price);
  wallCoverCount = Math.round(wallCoverCount / 2);

  if (wallCoverCount > 0) {
    montageWall_totalPrice /= wallCoverCount;
  }


  //calculating ceiling price
  let ceilingCoverCount = 3;
  if (montageCeilingPaint) {
    montageCeilingPaint_price = objectArea * pricelist.montage_ceiling_paint_price;
    ceilingCoverCount++;
  } else {
    montageCeilingPaint_price = 0;
    ceilingCoverCount--;
  }

  if (montageCeilingHang) {
    montageCeilingHang_price = objectArea * pricelist.montage_ceiling_hang_price;
    ceilingCoverCount++;
  } else {
    montageCeilingHang_price = 0;
    ceilingCoverCount--;
  }

  if (montageCeilingStretch) {
    montageCeilingStretch_price = objectArea * pricelist.montage_ceiling_stretch_price;
    ceilingCoverCount++;
  } else {
    montageCeilingStretch_price = 0;
    ceilingCoverCount--;
  }

  let montageCeiling_totalPrice = (montageCeilingPaint_price + montageCeilingHang_price +
    montageCeilingStretch_price);
  ceilingCoverCount = Math.round(ceilingCoverCount / 2);

  if (ceilingCoverCount > 0) {
    montageCeiling_totalPrice /= ceilingCoverCount;
  }

  // calculating total price
  total_price = (montageElectricity_price + montageRadiator_price + montageWater_price +
      montageDoor_price + montageWindow_price + montageFloor_totalPrice + montageWall_totalPrice +
      montageCeiling_totalPrice) *
    multiplier + demontage_price;

  //output
  $('.price-calc-total-price-total').text(Math.round(total_price) + ' руб.');
  $('.price-calc-total-price-material').text(Math.round(total_price * 0.5) + ' руб.');
})
</script>