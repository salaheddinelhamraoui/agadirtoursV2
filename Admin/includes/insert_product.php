<!DOCTYPE html>
<html>

<head>
    <style>
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
        border: 2px solid #c6852b;
    }

    .button1:hover {
        background-color: #c6852b;
        color: white;
    }

    .red {
        color: red;
    }

    .spacer {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }

    div#alert {
        /* position: absolute; */
        margin-top: 26px;
        padding: 20px 50px 20px 50px;
        width: 50%;
        margin-left: 25%;
        left: 38%;
        background: #337ab70d;
        border-color: #000;

    }
    </style>
</head>

<body>

    <div class="form_box">

        <form action="" method="post" enctype="multipart/form-data">

            <table align="center" width="100%">

                <tr>
                    <td colspan="7">
                        <h3 style=" cursive;color:#black" ;>Ajouter DAY</h3>
                        <div class="border_bottom"></div>
                        <!--/.border_bottom -->
                    </td>
                </tr>

                <tr>
                    <td><b>Titre Day:</b></td>
                    <td><input class="form-control" type="text" name="TitreDay" size="60" required />

                    </td>
                </tr>



                <tr>
                    <td><b>Tour :</b></td>
                    <td>
                        <select name="IdTour">
                            <option>Choisissez une Tour</option>

                            <?php
$get_cats = "select * from tour";

$run_cats = mysqli_query($con, $get_cats);

while ($row_cats = mysqli_fetch_array($run_cats)) {
	$cat_id = $row_cats['IdTour'];

	$cat_title = $row_cats['TitreTour'];

	echo "<option value='$cat_id'>$cat_title</option>";
}
?>
                        </select>
                    </td>

                </tr>


                <tr>
                    <td><b>L'heure : </b></td>
                    <td><input class="form-control" width="100%" type="text" name="TimeDay" required /></td>
                </tr>

                <tr>
                    <td><b>Emplacement :</b></td>
                    <td><input class="form-control" type="text" name="EmpDay" size="60" required />

                    </td>
                </tr>

                <tr>
                    <td><b>Description :</b></td>
                    <td><textarea class="form-control" type="text" name="DescriptionDay" rows="10" required ></textarea>

                    </td>
                </tr>


                <tr>
                    <td></td>
                    <td colspan="7"><button class="button button1" type="submit" name="insert_post"
                            style="font-family:'Great Vibes', cursive;" ;>Ajouter Day</button></td>
                </tr>
            </table>

        </form>

    </div><!-- /.form_box -->

    <?php


if (isset($_POST['insert_post'])) {
	$TitreDay = $_POST['TitreDay'];
	$IdTour = $_POST['IdTour'];
	$TimeDay = $_POST['TimeDay'];
	$EmpDay = $_POST['EmpDay'];
	$DescriptionDay = $_POST['DescriptionDay'];

	$insert_product = " insert into day (IdTour,TitreDay,TimeDay,EmpDay,DescriptionDay) 
   values ('$IdTour','$TitreDay','$TimeDay','$EmpDay','$DescriptionDay')"; // echo $insert_product;
	$insert_pro = mysqli_query($con, $insert_product);

	if ($insert_pro) {
		echo "<script>alert('day a été inséré avec succès!')</script>"; 

		echo "<script>window.open('AdminPanel.php?action=view_pro','_self')</script>";
	}

}
?>




</body>

</html>