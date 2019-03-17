<?php
include('../private/initialize.php');
require_login();
include('../private/shared/header.php');

$sql = ("SELECT * FROM wines");
$wine = Wine::find_by_sql($sql);

?>



<?php 

    
    ?>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Region & Country</th>
                <th>Grapes</th>
                <th>Year</th>
                <th>Volume</th>
                <th>Size</th>
                <th>Price</th>
                <th>Real Price</th>
                <th>Date</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>   
    <?php
      foreach($wine as $wines) {
      ?>

 
            <tr>
                <td><?= $wines->wine_name ?></td>
                <td><?= $wines->wine_region_country ?></td>
                <td><?= $wines->wine_grapes ?></td>
                <td><?= $wines->wine_year ?></td>
                <td><?= $wines->wine_volume ?></td>
                <td><?= $wines->wine_size ?></td>
                <td><?= $wines->wine_price ?></td>
                <td><?= $wines->wine_real_price ?></td>
                <td><?= $wines->wine_date ?></td>
                <td><?= $star->rating($wines->id); ?></td>
            </tr>
 <?php  } ?>
 </tbody>
        <tfoot>
            <tr>
            <th>Name</th>
                <th>Region & Country</th>
                <th>Grapes</th>
                <th>Year</th>
                <th>Volume</th>
                <th>Size</th>
                <th>Price</th>
                <th>Real Price</th>
                <th>Date</th>
                <th>Rating</th>
            </tr>
        </tfoot>
    </table>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<?php include("../private/shared/footer.php"); ?>