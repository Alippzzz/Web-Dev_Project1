<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h1 class="h2 mb-1">Welcome to HydroTech</h1>
        <p class="text-muted mb-0">Manage your products, customers, staff, and orders in one place.</p>
    </div>
</div>

<section id="dashboard" aria-labelledby="dashboard-heading">
    <h2 id="dashboard-heading" class="h4 mb-2">
        <i class="bi bi-bar-chart-line-fill text-primary me-2" aria-hidden="true"></i>Dashboard
    </h2>
    <p class="text-muted mb-4">Choose an area below to get started.</p>

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <i class="bi bi-controller text-primary fs-2 mb-3" aria-hidden="true"></i>
                    <h3 class="h5">Products</h3>
                    <p class="text-muted">View your products and manage inventory.</p>
                    <a href="products.php" class="btn btn-outline-primary mt-auto">Manage Products</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <i class="bi bi-person-lines-fill text-success fs-2 mb-3" aria-hidden="true"></i>
                    <h3 class="h5">Customers</h3>
                    <p class="text-muted">View customer details and manage records.</p>
                    <a href="customer.php" class="btn btn-outline-success mt-auto">Manage Customers</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <i class="bi bi-person-fill text-secondary fs-2 mb-3" aria-hidden="true"></i>
                    <h3 class="h5">Staff</h3>
                    <p class="text-muted">View staff details and manage your team.</p>
                    <a href="staff.php" class="btn btn-outline-secondary mt-auto">Manage Staff</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <i class="bi bi-cart text-danger fs-2 mb-3" aria-hidden="true"></i>
                    <h3 class="h5">Orders</h3>
                    <p class="text-muted">Create orders and review order details.</p>
                    <a href="orders.php" class="btn btn-outline-danger mt-auto">Manage Orders</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/layout.php';
?>