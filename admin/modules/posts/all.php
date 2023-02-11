
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Posts list</h4>
                  <p class="card-description">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="?page=add" class="btn btn-sm btn-rounded btn-success btn-icon-text"><i class="fa fa-user-plus btn-icon-prepend"></i></i>Add</a> 
                    </div>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Message content</th>
                          <th>Author</th>
                          <th>Creation date and time</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $sql = "SELECT * FROM posts";
                          $result = $conn->query($sql);
                          foreach ($result as $row) {
                            // $sql_u = "SELECT username FROM users"; // $row["user_id"];
                            // $result_u = mysqli_query($conn, $sql_u);
                            $sql_u = "SELECT * FROM users WHERE id=" . $row['user_id'];
                            $result_u = $conn->query($sql_u);
                            $user_u = $result_u->fetch_assoc();

                      ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["twit"]; ?></td>
                            <td><?php echo $user_u["username"]; ?></td>      
                            <td><?php echo $row["created"]; ?></td>
                            <td>
                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-rounded btn-warning btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>Edit</a>
                                <a href="/admin/modules/posts/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-rounded btn-danger btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <?php
                      $result->free();
                      mysqli_close($conn);
                    ?>
                  </div>
                </div>
              </div>
            </div>