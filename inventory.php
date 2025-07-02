<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Inventory</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/inventory.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container py-4">
        <!-- Gradient Header -->
        <div class="inventory-header mb-4">
            <img src="images/noto--guitar 1.png" alt="Guitar Icon" class="guitar-icon me-2">
            <h1 class="d-inline align-middle">COMPREHENSIVE GUITAR</h1>
            <p>Manage your guitar collection with style</p>
        </div>
        <!-- Controls -->
        <div class="row g-3 mb-4 align-items-center">
            <div class="col-md-6">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" class="form-control" placeholder="Search guitars...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>All Types</option>
                    <option>Electric</option>
                    <option>Acoustic</option>
                </select>
            </div>
            <div class="col-md-3 text-md-end">
                <button class="btn add-guitar-btn">
                    <i class="bi bi-plus-lg"></i> Add New Guitar
                </button>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-bordered inventory-table mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Guitar Name</th>
                        <th>Brand</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>In Stack</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Stratocaster</td>
                        <td>Fender</td>
                        <td>Electric</td>
                        <td>$799</td>
                        <td>10</td>
                        <td>
                            <a href="#" class="action-link edit"><i class="bi bi-pencil-square"></i> Edit</a><br>
                            <a href="#" class="action-link delete"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Les paul</td>
                        <td>Gibson</td>
                        <td>Electric</td>
                        <td>$899</td>
                        <td>7</td>
                        <td>
                            <a href="#" class="action-link edit"><i class="bi bi-pencil-square"></i> Edit</a><br>
                            <a href="#" class="action-link delete"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>C40</td>
                        <td>Yamaha</td>
                        <td>Acoustic</td>
                        <td>$149</td>
                        <td>20</td>
                        <td>
                            <a href="#" class="action-link edit"><i class="bi bi-pencil-square"></i> Edit</a><br>
                            <a href="#" class="action-link delete"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>GS Mini</td>
                        <td>Taylor</td>
                        <td>Acoustic</td>
                        <td>$35,000</td>
                        <td>20</td>
                        <td>
                            <a href="#" class="action-link edit"><i class="bi bi-pencil-square"></i> Edit</a><br>
                            <a href="#" class="action-link delete"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        <nav class="mt-3">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled"><a class="page-link">&lt; Previous</a></li>
                <li class="page-item active"><a class="page-link">1.</a></li>
                <li class="page-item"><a class="page-link">2.</a></li>
                <li class="page-item"><a class="page-link">3.</a></li>
                <li class="page-item"><a class="page-link">Next &gt;</a></li>
            </ul>
        </nav>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
