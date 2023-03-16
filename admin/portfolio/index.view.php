<?php
require_once('../layouts/header.view.php');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="fw-bold py-3 mb-4">Basic Inputs</h4> -->
    <div class="row justify-content-center">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <h5 class="card-header">Features</h5>
                <div class="text-nowrap">
                    <?php
                    if (isset($_SESSION['success'])) {
                    ?>
                        <div class="alert <?= $_SESSION['success']['message_type'] == 'success' ? "alert-success" : "alert-danger"; ?>">
                            <span><?= $_SESSION['success']['message']; ?></span>
                        </div>
                    <?php
                    }
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SR</th>
                                <th>Image</th>
                                <th>Project Name</th>
                                <th>Category</th>
                                <th>Client</th>
                                <th>Project URL</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td>
                                            <img src="<?= USER_IMAGE_SITE_PATH . 'portfolio/' . $row['image'] ?>" alt="<?= $row['project_name'] ?>" width="70">
                                        </td>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary"></i>
                                            <strong><?= substr($row['project_name'], 0, 20) ?></strong>
                                        </td>
                                        <td>
                                            <?php
                                            if ($row['category'] == 1) echo "App";
                                            if ($row['category'] == 2) echo "Card";
                                            if ($row['category'] == 3) echo "Web";
                                            ?>
                                        </td>
                                        <td><?= substr($row['client'], 0, 20) . '...' ?></td>
                                        <td>
                                            <a href="<?= $row['project_url'] ?>"><?= substr($row['project_url'], 0, 20) . '...' ?></a>
                                        </td>
                                        <td>
                                            <a href="change_status.php?id=<?= $row['id'] ?>">
                                                <span class="badge <?= ($row['status'] == 1) ? 'bg-label-info' : 'bg-label-warning' ?>  me-1">
                                                    <?= ($row['status'] == 1) ? "Active" : "Deactive" ?>
                                                </span>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="portfolio.php?id=<?= $row['id'] ?>"><i class='bx bx-show'></i> Show</a>
                                                    <a class="dropdown-item" href="edit.php?id=<?= $row['id'] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                                    <a class="dropdown-item" href="delete.php?id=<?= $row['id'] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('../layouts/footer.view.php');
?>
