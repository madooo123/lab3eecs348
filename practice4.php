<?php
$n = isset($_GET['n']) ? (int)$_GET['n'] : 10;
if ($n < 1) { $n = 1; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Practice 4</title>
</head>
<body>
  <h1>Practice 4: Multiplication Table</h1>

  <form method="get" action="practice4.php">
    <label>Generate upto:
      <input type="number" name="n" min="1" value="<?php echo htmlspecialchars($n, ENT_QUOTES); ?>">
    </label>
    <button type="submit">Generate</button>
  </form>

  <table border="1" cellpadding="4">
    <thead>
      <tr>
        <th>&times;</th>
        <?php for ($c = 1; $c <= $n; $c++): ?>
          <th><?php echo $c; ?></th>
        <?php endfor; ?>
      </tr>
    </thead>
    <tbody>
      <?php for ($r = 1; $r <= $n; $r++): ?>
        <tr>
          <th><?php echo $r; ?></th>
          <?php for ($c = 1; $c <= $n; $c++): ?>
            <td><?php echo $r * $c; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</body>
</html>