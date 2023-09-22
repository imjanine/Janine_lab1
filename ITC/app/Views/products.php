<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #30D5C8;
            color: #fff;
        }

        .bg-primary {
            background-color: lightblue !important;
        }

        .table-bordered {
            border-color: lightblue;
        }

        .thead-primary {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <header class="bg-primary text-white text-center py-4">

    </header>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Add Student</h2>
                <form action="/save" method="post">
                    <div class="form-group">
                        <label for="StudName">Student Name:</label>
                        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
                        <input type="text" class="form-control" name="StudName" placeholder="Enter Student Name"
                            value="<?= isset($pro['StudName']) ? $pro['StudName'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="StudGender">Student Gender:</label>
                        <select class="form-control" name="StudGender">
                            <option value="Male"
                                <?= (isset($pro['StudGender']) && $pro['StudGender'] === 'Male') ? 'selected' : '' ?>>
                                Male</option>
                            <option value="Female"
                                <?= (isset($pro['StudGender']) && $pro['StudGender'] === 'Female') ? 'selected' : '' ?>>
                                Female</option>
                            <option value="Other"
                                <?= (isset($pro['StudGender']) && $pro['StudGender'] === 'Other') ? 'selected' : '' ?>>
                                Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="StudCourse">Student Course:</label>
                        <input type="text" class="form-control" name="StudCourse" placeholder="Enter Year Level"
                            value="<?= isset($pro['StudCourse']) ? $pro['StudCourse'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="StudSection">Student Section:</label>
                        <input type="text" class="form-control" name="StudSection" placeholder="Enter Section"
                            value="<?= isset($pro['StudSection']) ? $pro['StudSection'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="StudYear">Student Year:</label>
                        <input type="text" class="form-control" name="StudYear" placeholder="Enter Student Year"
                            value="<?= isset($pro['StudYear']) ? $pro['StudYear'] : '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Student Listing</h2>
                <ul>
                    <?php foreach ($product as $pr): ?>
                    <li>
                        <strong>Student Name:</strong> <?= $pr['StudName'] ?><br>
                        <strong>Student Gender:</strong> <?= $pr['StudGender'] ?><br>
                        <strong>Student Course:</strong> <?= $pr['StudCourse'] ?><br>
                        <strong>Student Section:</strong> <?= $pr['StudSection'] ?><br>
                        <strong>Student Year:</strong> <?= $pr['StudYear'] ?><br>
                        <a href="/delete/<?= $pr['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        <a href="/edit/<?= $pr['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
