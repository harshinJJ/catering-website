<section class="py-2">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body">
                <div class="w-100 justify-content-between d-flex">
                    <h4><b>My Reservations</b></h4>
                    <a href="./?p=edit_account" class="btn btn-dark btn-flat">
                        <div class="fa fa-user-cog"></div> Manage Account
                    </a>
                </div>
                <hr class="border-warning">
                <table class="table table-striped text-dark">
                    <colgroup>
                        <col width="10%">
                        <col width="15%">
                        <col width="25%">
                        <col width="25%">
                        <col width="15%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>DateTime</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i = 1;
                            $qry = $conn->query("SELECT o.*,concat(c.firstname,' ',c.lastname) as client from `orders` o inner join clients c on c.id = o.client_id where o.client_id = '".$_settings->userdata('id')."' order by unix_timestamp(o.date_created) desc ");
                            while($row = $qry->fetch_assoc()):
                        ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo date("Y-m-d H:i",strtotime($row['date_created'])) ?></td>
                                <td><a href="javascript:void(0)" class="view_order" data-id="<?php echo $row['id'] ?>"><?php echo md5($row['id']); ?></a></td>
                                <td><?php echo number_format($row['amount']) ?> </td>
                                <td class="text-center">
                                    <?php if($row['status'] == 0): ?>
                                        <span class="badge badge-warning">Pending</span>
                                    <?php elseif($row['status'] == 1): ?>
                                        <span class="badge badge-primary">Confirmed</span>
                                    <?php elseif($row['status'] == 2): ?>
                                        <span class="badge badge-success">Done</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Cancelled</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<style>
    /* Hide the sorting arrows in DataTables */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0.5rem 1rem;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color: #007bff;
        color: white;
    }

    /* Styling for the table */
    table.table {
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        overflow: hidden;
    }

    /* Set blue background for the table header */
    thead {
        background-color: #007bff; /* Blue background */
        color: white; /* White text color */
    }

    /* Additional styling for table rows */
   

    .badge {
        font-size: 0.9rem; /* Smaller badge font size */
    }

    /* Specific styles for badges */
    .badge-warning {
        background-color: #ffc107; /* Bootstrap warning color */
        color: #212529; /* Dark text for better contrast */
    }
</style>

<script>
    function cancel_book($id) {
        start_loader();
        $.ajax({
            url: _base_url_ + "classes/Master.php?f=update_book_status",
            method: "POST",
            data: { id: $id, status: 2 },
            dataType: "json",
            error: err => {
                console.log(err);
                alert_toast("An error occurred", 'error');
                end_loader();
            },
            success: function (resp) {
                if (typeof resp == 'object' && resp.status == 'success') {
                    alert_toast("Book cancelled successfully", 'success');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(resp);
                    alert_toast("An error occurred", 'error');
                }
                end_loader();
            }
        });
    }

    $(function () {
        $('.view_order').click(function () {
            uni_modal("Reservation Details", "./admin/orders/view_order.php?view=user&id=" + $(this).attr('data-id'), 'large');
        });
        $('table').dataTable({
            "ordering": true, // Keep ordering feature
            "order": [], // Default order (no initial sorting)
            "columnDefs": [{
                "targets": '_all', // Targets all columns
                "orderable": false // Disable sorting for all columns
            }]
        });
    });
</script>
