<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

    <h2>Edit View</h2>
    <div class="table-responsive">
        <form method="post" action="?admin=show&module=users&action=update">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <input type="hidden" name="record" value="<?php echo $user_details['id'];?>">
                <th>Username</th>
                <td><?php echo $user_details['user_name'];?></td>
                <th>Status</th>
                <td>
                    <select id="status" name="status" >
                        <option value="">Select</option>
                        <option <?php if($user_details['status'] === 'Active') {?> selected<?php }?> value="1">Active</option>
                        <option <?php if($user_details['status'] === 'Inactive') {?> selected <?php }?> value="0">Inactive</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Is Admin</th>
                <td>
                    <input type="checkbox" name="is_admin" id="is_admin" <?php if($user_details['is_admin'] === 'on') {?> checked<?php }?>>
                </td>
                <th>Gender</th>
                <td><?php echo ucfirst($user_details['gender']);?></td>
            </tr>

            <tr>
                <th>First Name</th>
                <td>
                    <input type="text" name="first_name" id="first_name" value="<?php echo $user_details['first_name'];?>">
                </td>
                <th>Last Name</th>
                <td><?php echo $user_details['last_name'];?></td>
            </tr>

            <tr>
                <th>Mobile</th>
                <td><?php echo $user_details['mobile'];?></td>
                <th>Email</th>
                <td><?php echo $user_details['email'];?></td>
            </tr>

            <tr>
                <th>Address</th>
                <td><?php echo $user_details['address'];?></td>
                <th>Pincode</th>
                <td><?php echo $user_details['zip'];?></td>
            </tr>

            <tr>
                <th>State</th>
                <td><?php echo ucfirst($user_details['state']);?></td>
                <th>Country</th>
                <td><?php echo $user_details['country'];?></td>
            </tr>

            </thead>

        </table>
        <button>Update</button>
        <a href="javascript:window.history.back();">Cancel</a>
        </form>
    </div>
</main>