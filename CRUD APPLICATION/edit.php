<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("UPDATE employees SET firstname='$fname', lastname='$lname', email='$email', phone='$phone' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Edit Employee</h2>
    <form method="POST">
        <div class="mb-2"><input type="text" name="firstname" class="form-control" value="<?= $row['firstname'] ?>" required></div>
        <div class="mb-2"><input type="text" name="lastname" class="form-control" value="<?= $row['lastname'] ?>" required></div>
        <div class="mb-2"><input type="email" name="email" class="form-control" value="<?= $row['email'] ?>" required></div>
        <div class="mb-2"><input type="text" name="phone" class="form-control" value="<?= $row['phone'] ?>" required></div>
        <button class="btn btn-primary" type="submit">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>
