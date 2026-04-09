<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student CRUD</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2 class="text-center mb-4">Student Management System</h2>

    <!-- FORM CARD -->
    <div class="card shadow p-4 mb-4">
        <h4>Add Student</h4>

        <form method="POST" class="row g-3">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>

            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="department" class="form-control" placeholder="Department" required>
            </div>

            <div class="col-12">
                <button name="submit" class="btn btn-primary">Add Student</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $department = $_POST['department'];

        mysqli_query($conn, "INSERT INTO student(name,email,mobile,department)
        VALUES('$name','$email','$mobile','$department')");
    }
    ?>

    <!-- TABLE -->
    <div class="card shadow p-4">
        <h4>Student List</h4>

        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM student");

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['mobile']}</td>
                    <td>{$row['department']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>