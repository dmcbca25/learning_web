<?php
$pageTitle = "Users - TMS";

include 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title></title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding-top: 70px; }
        .sidebar { min-height: 60vh; }
        .table-placeholder { color: #666; text-align: center; padding: 40px 0; }
    </style>
</head>
<body>
    <!-- Top navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample"
                            aria-controls="navbarsExample" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/users.php">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects.php">Projects</a></li>
                </ul>
                <form class="d-flex" role="search" method="get" action="/users.php">
                    <input class="form-control me-2" type="search" placeholder="Search users" aria-label="Search" name="q">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 mb-4 sidebar">
                <div class="list-group">
                    <a href="users.php" class="list-group-item list-group-item-action active">All users</a>
                    <a href="#" class="list-group-item list-group-item-action">Add user</a>
                    <a href="#" class="list-group-item list-group-item-action">Roles & Permissions</a>
                    <a href="#" class="list-group-item list-group-item-action">Settings</a>
                </div>
            </aside>

            <!-- Main content -->
            <section class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="h4 mb-0">Users</h1>
                    <a href="#" class="btn btn-primary">New User</a>
                </div>

                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-body p-0">
                        <!-- Replace this static table with dynamic PHP-generated content -->
                        <table class="table table-striped mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>ConcatNumber</th>
                                    <th>Message</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example rows -->
                                 <?php 
                                 $query = "SELECT * FROM contactForm";
                                 $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc())
                                 
                                 { ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>                
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['contactNumber']; ?></td>           
                                    <td><?php echo $row['message']; ?></td>
                                    <td class="text-end">
                                        <a class="btn btn-sm btn-outline-secondary" href="#">Edit</a>
                                        <a class="btn btn-sm btn-outline-danger" href="#">Delete</a>
                                    </td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>

                        <!-- Empty placeholder (uncomment or remove when using real data) -->
                        <!-- <div class="table-placeholder">No users found.</div> -->
                    </div>

                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <small class="text-muted">Showing 2 of 2 users</small>
                        <nav aria-label="Users pagination">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-light mt-5 py-3">
        <div class="container text-center">
            <small class="text-muted">© TMS. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>all>tle>