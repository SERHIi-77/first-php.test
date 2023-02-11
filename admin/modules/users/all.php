
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users list</h4>
                  <p class="card-description">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="?page=add" class="btn btn-sm btn-rounded btn-success btn-icon-text"><i class="fa fa-user-plus btn-icon-prepend"></i></i>Add</a> 
                    </div>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Имя</th>
                          <th>Почта</th>
                          <th>Пароль</th>
                          <th>Телефон</th>
                          <th>права</th>
                          <th>Option</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $sql = "SELECT * FROM users WHERE id!=" . $userID;
                          $result = $conn->query($sql);
                          foreach ($result as $row) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["username"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["password"] ?></td>
                            <td><?php echo $row["phone"] ?></td>
                            <td><?php echo $row["role"] ?></td>
                            <td>
                                <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-rounded btn-warning btn-icon-text"><i class="ti-pencil btn-icon-prepend"></i>Edit</a>
                                <a href="/admin/modules/users/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-rounded btn-danger btn-icon-text"><i class="ti-trash btn-icon-prepend"></i>Delete</a>
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