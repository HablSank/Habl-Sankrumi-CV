<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
include 'config.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Masukan</title>
  <link rel="stylesheet" href="data.css">
</head>
<body>

  <table>
    <caption>Data Masukan</caption>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Pesan</th>
    </tr>

    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$no}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['message']}</td>
            </tr>";
      $no++;
    }
    ?>

  </table>

</body>
</html>

<?php mysqli_close($conn); ?>
