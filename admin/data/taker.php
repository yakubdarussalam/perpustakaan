<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <?php
            
            if (isset($_SESSION['success_message'])) {
                echo '<button class="btn btn-success toastsDefaultSuccess">' . $_SESSION['success_message'] . '</button>';
                unset($_SESSION['success_message']); // Hapus pesan sukses dari session
            } elseif (isset($_SESSION['error_message'])) {
                echo '<button class="btn btn-danger toastsDefaultDanger">' . $_SESSION['error_message'] . '</button>';
                unset($_SESSION['error_message']); // Hapus pesan error dari session
            }
            ?>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?module=dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><?php echo $title; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <button class="btn btn-success mx-4" onclick="location.href='dashboard.php?module=add_taker_data'">Add</button>
    </div><!-- /.container-fluid -->

</div>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- /.row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">



                        <h3 class="card-title" for="limit">Taker Data Table</h3>
                        <select id="limit" class="mx-2" onchange="updateTable()">
                            <option value="0">all</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>

                        <div class="card-tools">
                            <form method="post">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" id="search" name="search" class="form-control float-right" placeholder="Search" value="<?php echo isset($_POST['search']) ? $_POST['search'] : ''; ?>">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap" id="data-table">
                            <thead>
                                <tr>
                                    <th class='text-center'>No</th>
                                    <th class='text-center'>Taker ID</th>
                                    <th class='text-center'>Member Name</th>
                                    <th class='text-center'>Staff Name</th>
                                    <th class='text-center'>Date</th>
                                    <th class='text-center'>Time</th>
                                    <th class='text-center'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                // Inisialisasi query SQL
                                $sql = "SELECT taker_id, member_name, staff_name, date, time  FROM taker INNER JOIN member ON taker.member_id = member.member_id INNER JOIN staff ON taker.staff_id = staff.staff_id";

                                // Periksa apakah ada kata kunci pencarian yang dikirimkan
                                if (isset($_POST['search']) && !empty($_POST['search'])) {
                                    // Jika ada kata kunci pencarian, tambahkan filter pencarian ke query SQL
                                    $search = $_POST['search'];
                                    $sql .= " WHERE Title LIKE '%$search%'";
                                }

                                $result = mysqli_query($conn, $sql);
                                $i = 1;

                                if (!$result) {
                                    die("Error: " . mysqli_error($conn));
                                }

                                // Tampilkan data dari hasil query di dalam tbody
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $i . "</td>";
                                    echo "<td class='text-center'>" . $row['taker_id'] . "</td>";
                                    echo "<td class='text-center'>" . $row['member_name'] . "</td>";
                                    echo "<td class='text-center'>" . $row['staff_name'] . "</td>";
                                    echo "<td class='text-center'>" . $row['date'] . "</td>";
                                    echo "<td class='text-center'>" . $row['time'] . "</td>";
                                    echo "<td class='text-center'>";
                                    echo "<button class='btn btn-warning mx-2'><a class='text-white' href='dashboard.php?module=edit_taker&&taker=" . $row['taker_id'] .
                                        "' onclick='return confirm(\"Are you sure you want to edit this taker ? : " . $row['taker_id'] . "\")'>Edit</a></button>";
                                    echo "<button class='btn btn-primary     mx-2'><a class='text-white' href='dashboard.php?module=taker_detail&&taker=" . $row['taker_id'] .
                                        "' " . $row['taker_id'] . "\")'>Detail</a></button>";
                                    echo "<button class='btn btn-danger'><a class='text-white' href='dashboard.php?module=delete_taker&&taker=" . $row['taker_id'] .
                                        "'' onclick='return confirm(\"Are you sure you want to delete this taker ? : " . $row['taker_id'] . "?\")'>Delete</a></button>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $i++;
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

</body>

</html>