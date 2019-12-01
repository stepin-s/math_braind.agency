<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Test template</title>
</head>

<body>
  <form method="POST">
    <div class="form-group row">
      <label for="inputN" class="col-sm-2 col-form-label">Кол-во n-чисел</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="inputN" name="inputN" value="<?php echo $n; ?>" placeholder="N">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputK" class="col-sm-2 col-form-label">Найти место числа k</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="inputK" name="inputK" value="<?php echo $k; ?>" placeholder="K">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Посчитать</button>

    <?php

    $n = $_POST['inputN'];
    $k = $_POST['inputK']; // получаем введённые данные


    foreach ($arr = range(1, $n) as $number) { } //заполняем массив
    sort($arr, SORT_STRING); // сортируем

    if (in_array("$k", $arr)) {
      $result = array_search($k, $arr)+1; // если переменная существует в массиве пишем её в результат
    }
    else if($k > max($arr)or $k == 0){
      echo "Число превышает диапазон или равно нулю"; // простая проверка на нахождение в диапазоне
    }
    else{
      echo "Ожидаем значения..";
    }

    ?>

    <div class="form-group row">
      <label for="result" class="col-sm-2 col-form-label">Результат</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="result" placeholder="" value="<?php echo $result; ?>"> 
      </div>
    </div>
  </form>



</body>

</html>