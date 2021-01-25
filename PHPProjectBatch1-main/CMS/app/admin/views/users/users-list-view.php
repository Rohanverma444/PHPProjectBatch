<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div>
                <input type="text" placeholder="Search Username, Name, Email or Mobile">
        </div>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
             <a href="?admin=show&module=users&action=export"><button type class="btn btn-sm btn-outline-secondary">Export</button></a>
            </div>
             <input type="date" class="btn btn-sm btn-outline-secondary dropdown-toggle"placeholder="This week">
                
        </div>
    </div>

   <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->

    <h2>Users List View</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $counter = 0;
            while($row = mysqli_fetch_assoc($users_list)){
                $counter++;
                ?>
            <tr>
                <td><?php echo $counter;?></td>
                <td><?php echo $row['user_name'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><a href="?admin=show&module=users&action=view&record=<?php echo $row['id'];?>">View</td>
                <td><a href="?admin=show&module=users&action=edit&record=<?php echo $row['id'];?>">Edit</td>
                <td><button onclick="deleteUser(<?php echo $row['id'] ?>)">Delete</button></td>
            </tr>
            <?php } ?>

            </tbody>
        </table>
        <?php if($counter === 0) {?>
        No records found
        <?php } ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li <?php if($page > 1) { ?> class="page-item" <?php } else {?> class="page-item disabled" <?php } ?>>
                    <a class="page-link"  href="?admin=show&module=users&action=list&page=<?php echo ($page - 1) ?>" tabindex="-1"
                       aria-disabled="true">Previous</a>
                </li>

                <?php
                $page_link = null;
                $page = ($page > 1 ) ? $page : 1;
                for($i = 1; $i < $total_pages; $i++){

                    if($i == $page){
                        $page_link .= "<li class='page-item active'><a class='page-link' href='?admin=show&module=users&action=list&page=$i'>$i</a></li>";
                    }else {
                        $page_link .= "<li class='page-item'><a class='page-link' href='?admin=show&module=users&action=list&page=$i'>$i</a></li>";
                    }
                }
                echo $page_link;
                ?>

                <!--<li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</main>

<script>
    function deleteUser(id){
        // Method1 Call Ajax
        // Method2 Call Href
        if(confirm("Do you want to delete this user.")){
            window.location.href = "?admin=show&module=users&action=delete&record="+id;
        }else{
            alert("I am not intrested to delete this user.");
        }
    }
</script>