<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #faf4ea;
    }

    .button {
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        margin: 2px 1px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: #faf5ea;
        color: black;
        border: 2px solid #cc0000;
    }

    .button1:hover {
        background-color: #cc0000;
        color: white;
    }

    b.admin {
        background: black;
        color: white;
        padding: 3px 5px;
        float: right;
        FONT-SIZE: 11px;
        border-radius: 10px;
    }

    .left_sidebar {
        width: 25%;
        height: 100vh;
    }
    </style>
</head>

<body>



    <form action="" method="post" enctype="multipart/form-data" />
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <div class="data-table-list">


                        <h3 style=" color: black">LES UTILISATEURS</h3>
                        <div class="border_bottom"></div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>Nom Complet</th>

                                        <th>Email</th>
                                        <th>Mot de passe</th>
                                        <th>Téléphone</th>



                                    </tr>
                                </thead>
                                <tbody>




                                    <?php
$all_users = mysqli_query($con, "select * from users order by id ASC ");

$i = 1;

while ($row = mysqli_fetch_array($all_users)) {
?>




                                    <tr>
                                        <td><input type="checkbox" name="deleteAll[]"
                                                value="<?php echo $row['id']; ?>" /></td>
                                        <td><?php echo $row['firstname'];
  if ($row['role'] == "ADMIN") {
    echo "<b class='admin'>ADMIN</b>";
  }?>
                                        </td>
                                        <!-- <td><?php echo $row['lastname']; ?></td>-->
                                        <td><?php echo $row['email']; ?></td>
                                        <td>***********</td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td>
                                            <!--<a href="AdminPanel.php?action=view_users&delete_user=<?php echo $row['id']; ?>"><i class="fa fa-trash" style="font-size:20px;color:#cc0000"></i></a>-->
                                            <a href="AdminPanel.php?action=edit_user&idUser=<?php echo $row['id']; ?>"><i
                                                    class="fa fa-edit" style="font-size:20px;color:black"></i></a>
                                        </td>


                                    </tr>




                                    <?php $i++;
} // End while loop ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Select</th>
                                        <th>Nom Complet</th>

                                        <th>Email</th>
                                        <th>Mot de passe</th>
                                        <th>Téléphone</th>


                                    </tr>
                                </tfoot>
                            </table>
                            <button class="button button1" type="submit" name="delete_all" style="" ;> Retirer Selection
                                <i class="fa fa-trash" style="font-size:15px;color:red"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->
    <!-- Start Footer area-->





    </form>











    <?php
// Delete User Account

if (isset($_GET['delete_user'])) {
  $delete_user = mysqli_query($con, "delete from users where id='$_GET[delete_user]' ");

  if ($delete_user) {
    echo "<script>alert('Le compte utilisateur a été supprimé avec succès!')</script>";

    echo "<script>window.open('AdminPanel.php?action=view_users','_self')</script>";

  }
}

// Remove items selected using foreach loop
if (isset($_POST['deleteAll'])) {
  $remove = $_POST['deleteAll'];

  foreach ($remove as $key) {
    $run_remove = mysqli_query($con, "delete from users where id='$key'");

    if ($run_remove) {
      echo "<script>alert('les utilisations sélectionnés ont été supprimés avec succès!')</script>";

      echo "<script>window.open('AdminPanel.php?action=view_users','_self')</script>";
    }
    else {
      echo "<script>alert('Mysqli Failed: mysqli_error($con)!')</script>";
    }
  }
}
?>


</body>

</html>