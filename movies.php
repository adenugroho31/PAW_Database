<?php
include 'db.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);
?>

<h2>Daftar Film</h2>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Genre</th>
        <th>Tahun Rilis</th>
    </tr>
    
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['genre']; ?></td>
        <td><?php echo $row['release_year']; ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<p><a href="logout.php">Logout</a></p>
