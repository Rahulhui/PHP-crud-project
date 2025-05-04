<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $conn->query("INSERT INTO employees (firstname, lastname, email, phone) VALUES ('$fname', '$lname', '$email', '$phone')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Add New Employee</h2>
    <form method="POST">
        <div class="mb-2"><input type="text" name="firstname" class="form-control" placeholder="First Name" required></div>
        <div class="mb-2"><input type="text" name="lastname" class="form-control" placeholder="Last Name" required></div>
        <div class="mb-2"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
        <div class="mb-2"><input type="text" name="phone" class="form-control" placeholder="Phone" required></div>
        <button class="btn btn-success" type="submit">Save</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
</body>
</html>
