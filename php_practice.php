
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <section class="mb-5">
      <h2>for文</h2>
      <h3>Answer</h3>
      <?php
        for ($i=100; $i > 0 ; $i--) { 
          echo $i . '<br>';
        } 
      ?>
      <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
      for ($i=100; $i > 0 ; $i--) { 
        echo $i . '&lt;br&gt;';
      }
    ?&gt;
      </code></pre>
    </section>
    <section class="mb-5">
      <h2>for文</h2>
      <h3>Answer</h3>
      <?php
        $var = 100;
        while ($var > 0) {
          echo $var . '<br>';
          $var--;
        }
      ?>
      <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
      $var = 100;
      while ($var > 0) {
        echo $var . '&lt;br&gt;';
        $var--;
      }
    ?&gt;
      </code></pre>
    </section>
    <section class="mb-5">
    <h2>1から9</h2>
    <?php
    for ($i=1; $i <= 9 ; $i++) { 
      echo $i*3 . ' ';
    }
    ?>
    <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
      for ($i=1; $i <= 9 ; $i++) { 
        echo $i*3 . ' ';
      }
    ?&gt;
      </code></pre>
    </section>
    <section class="mb-5">
    <h2>FizzBuzz</h2>
    <?php
    for ($i=1; $i < 101; $i++) { 
      if ($i % 5 === 0 && $i % 3 === 0) {
        echo 'FizzBuzz';
      }
      elseif ($i % 5 === 0) {
        echo 'Buzz';
      }
      elseif ($i % 3 === 0) {
        echo 'Fizz';
      }
      else {
        echo $i;
      }
      echo ' ';
    }
    ?>
    <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
      for ($i=1; $i < 101; $i++) { 
        if ($i%5 === 0 && $i%3 === 0) {
          echo 'FizzBuzz';
        }
        elseif ($i%5 === 0) {
          echo 'Buzz';
        }
        elseif ($i%3 === 0) {
          echo 'Fizz';
        }
        else {
          echo $i;
        }
        echo ' ';
      }
    ?&gt;
      </code></pre>
    </section>
    <section class="mb-5">
    <h2>10個ずつ改行</h2>
    <?php
    for ($i=1; $i < 101; $i++) {
      echo $i . ' ';
      if ($i % 10 == 0) {
        echo '<br>';
      }
    }
    ?>
    <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
    for ($i=1; $i < 101; $i++) {
      echo $i . ' ';
      if ($i % 10 === 0) {
        echo '&lt;br&gt;';
      }
    }
    ?&gt;
      </code></pre>
    </section>
    <section class="mb-5">
    <h2>Aの数を数える</h2>
    <?php
      $alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
      $i = 0;
      foreach ($alpha as $value) {
        if ($value === 'A') {
          $i++;
        }
      }
      echo "答えは${i}です。"
    ?>
    <h3 class="mt-3">Code</h3>
      <pre class="border"><code>
    &lt;?php
    $alpha = array('E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C');
      $i = 0;
      foreach ($alpha as $value) {
        if ($value === 'A') {
          $i++;
        }
      }
      echo "答えは${i}です。"
    ?&gt;
      </code></pre>
    </section>
    <?php
      //特定の文字で配列を文字列に結合
      $alpha = implode(',', $alpha);
      echo $alpha;

      //文字列で配列化
      $alpha = explode(',', $alpha);
      var_dump($alpha);
    ?>
  </div>
</body>
</html>