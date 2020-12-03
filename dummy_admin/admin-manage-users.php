<!--=================================
Header -->
<?php include("admin-header.php"); ?>
<!--=================================
Header -->


<!--=================================
Manage users -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        

          <div class="user-dashboard-info-box pb-0 ">
            <div class="row mb-12">
              <div class="col-md-12 col-sm-12 col-lg-12 d-flex align-items-center">
                <div class="section-title ">
                  <h2 class="title header-text">Users Details</h2>
                </div>
              </div>
            </div>
          <!--=================================
              show  users -->

              <?php

              $user_details = mysqli_query($con,"SELECT * FROM registration");

              if(mysqli_num_rows($user_details) == 0) {
                echo "<span class='emptyRecord'> No details to be shown...</span>";
                return;
              }

              // echo " <div class="employers-list">"
// INSERT INTO `registration`
// (`Name`, `Address`, `Gender`, `Contact`, `Age`, `Email`, `User_Type`, `User_id`, `Password`, `Reg_date`, `Pro_pic`)
              echo '<table class = "table manage-users-top mb-0">

                          <thead class="bg-color" align = "center">
                              <tr >


                                <th>User ID</th>
                                <th>Name</th>
                                <th>User TYPE</th>
                                <th>Contact</th>
                                <th>EmailId</th>
                                <th>Address</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Action</th>
                              </tr>
                            </thead> ';

                    while($row = mysqli_fetch_array($user_details))
                    {
                      // $picPath = $row['profile_pic'] ;

                      echo '<tr class="candidates-list" align = "center">';
                      // echo "<td>" . $picPath . "</td>";
                          // echo ' <td>
                          //         <div class="thumb">
                          //           <img class="img-fluid" src= "' .$picPath.'" alt="">
                          //         </div>
                          //       </td>';


                          echo "<td>" . $row['User_id'] . "</td>";
                          echo "<td>" . $row['Name'] . "</td>";
                          echo "<td>" . $row['User_Type'] . "</td>";
                          echo "<td>" . $row['Contact'] . "</td>";
                          echo "<td>" . $row['Email'] . "</td>";
                          echo "<td>" . $row['Address'] ."</td>";
                          echo "<td>" . $row['Age'] . "</td>";
                          echo "<td>" . $row['Gender'] . "</td>";


                          echo '<td>
                                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                                    <!--<li><a href="admin-edit-user.php?id=' . $row["User_id"] . '"
                                      class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </li>-->

                                     <li><a href="admin-delete-user.php?id=' . $row["User_id"] . '" onclick = "return checkDelete()"
                                       class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i>
                                       </a>
                                     </li>
                                  </ul>
                                </td> ';

                       echo "</tr>";

                    }

              echo "</table>";

              // echo "</div>"
              mysqli_close($con);
              ?>
          <!--=================================
          show  users -->
          </div>
          <br>

        <!-- <div class="row">
          <div class="col-12 text-center mt-4 mt-sm-5">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">..</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div> -->
        
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage users -->
<script>
  function checkDelete() {
    return confirm('Are you sure you want to delete the perticular row ?');
}
</script>
<!--=================================
footer -->
<?php include("admin-footer.php"); ?>
<!--=================================
footer -->
