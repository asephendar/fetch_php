<!-- Deskripsi:
Buatlah sebuah sistem CRUD (Create, Read, Update, Delete) sederhana 
untuk mengelola data karyawan. Database menggunakan MySQL dengan tabel sebagai berikut: -->

<!-- Tugas:

Buat skrip PHP + MySQL untuk menambahkan karyawan ke dalam database.
Buat skrip untuk menampilkan daftar karyawan dalam bentuk tabel HTML.
Buat skrip untuk mengupdate data karyawan.
Buat skrip untuk menghapus karyawan berdasarkan id. -->

<!-- #1. CRUD Sederhana (PHP & MySQL))
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    position VARCHAR(50) NOT NULL
); -->


<!-- 1. Koneksi Database (db.php)) -->
<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "company";

// $conn = new mysqli($host, $user, $pass, $dbname);
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }
?>

<!-- 2. Tambah Data Karyawan (add_employee.php)) -->
<?php
// include 'db.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $position = $_POST['position'];

//     $sql = "INSERT INTO employees (name, email, position) VALUES ('$name', '$email', '$position')";
//     if ($conn->query($sql) === TRUE) {
//         echo "Data berhasil ditambahkan!";
//     } else {
//         echo "Error: " . $conn->error;
//     }
// }
?>

<!-- <form method="POST">
    Nama: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Posisi: <input type="text" name="position" required><br>
    <button type="submit">Tambah</button>
</form> -->

<!-- 3. Tampilkan Daftar Karyawan (list_employee.php)) -->
<?php
// include 'db.php';
// $result = $conn->query("SELECT * FROM employees");
?>

<!-- <table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Posisi</th>
        <th>Aksi</th>
    </tr> -->
    <?php 
    // while ($row = $result->fetch_assoc()) { 
    ?>
    <!-- <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['position'] ?></td>
        <td>
            <a href="edit_employee.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_employee.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr> -->
    <?php 
        // } 
    ?>
<!-- </table> -->

<!-- 4.  Edit Data Karyawan (edit_employee.php)) -->
<?php
// include 'db.php';
// $id = $_GET['id'];
// $result = $conn->query("SELECT * FROM employees WHERE id=$id");
// $row = $result->fetch_assoc();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $position = $_POST['position'];

//     $sql = "UPDATE employees SET name='$name', email='$email', position='$position' WHERE id=$id";
//     if ($conn->query($sql) === TRUE) {
//         echo "Data berhasil diperbarui!";
//     }
// }
?>

<!-- <form method="POST">
    Nama: <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>" required><br>
    Posisi: <input type="text" name="position" value="<?= $row['position'] ?>" required><br>
    <button type="submit">Update</button>
</form> -->

<!-- 5. Hapus Data Karyawan (delete_employee.php)) -->
<?php
// include 'db.php';
// $id = $_GET['id'];

// $sql = "DELETE FROM employees WHERE id=$id";
// if ($conn->query($sql) === TRUE) {
//     echo "Data berhasil dihapus!";
// }
?>

<!-- #2. Validasi Form PHP (Tanpa Database))
Deskripsi:
Buatlah formulir registrasi sederhana yang memiliki validasi sebagai berikut:

Nama harus diisi minimal 3 karakter.
Email harus valid.
Password minimal 6 karakter dan harus mengandung angka. -->

<!-- jawab -->
<?php
// $error = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     if (strlen($name) < 3) {
//         $error = "Nama minimal 3 karakter.";
//     } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $error = "Email tidak valid.";
//     } elseif (!preg_match('/^(?=.*\d).{6,}$/', $password)) {
//         $error = "Password minimal 6 karakter dan harus mengandung angka.";
//     } else {
//         echo "Registrasi berhasil!";
//         exit;
//     }
// }
?>

<!-- <form method="POST">
    Nama: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Daftar</button>
</form>
<p style="color:red"><?= $error ?></p> -->

<!-- #3. API Sederhana dengan JSON) -->

<?php
// header("Content-Type: application/json");

// $products = [
//     ["id" => 1, "name" => "Laptop", "price" => 10000000],
//     ["id" => 2, "name" => "Mouse", "price" => 150000],
//     ["id" => 3, "name" => "Keyboard", "price" => 300000]
// ];

// $data = json_encode($products);
// echo $data;
?>
