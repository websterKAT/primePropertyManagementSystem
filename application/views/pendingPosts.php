<div id="main">
<div class="col-md-12">
<?php
      if($PPROPERTIES == null){ ?>
        <h3>No any Pending posts </h3>
     <?php } ?>
     <?php 
     if($PPROPERTIES != null) { ?>
      <h2 style="margin-top:50px;">PENDING POST </h2>
    <table class="table table-striped" style="margin-top:10px;">
    <thead>
      <tr>
        <th>Property Type</th>
        <th>District</th>
        <th>AddressLine 1</th>
        <th>AddressLine 2</th>
        <th>City</th>
        <th>Revenue Expecting</th>
       	<th>Description </th>
       	<th>User Name </th>
       	<th> Date </th>
       	<th>Image</th>
       	<th>Approve </th>
       	<th>Delete </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($PPROPERTIES as $value1) {?>
        <tr><td><?=$value1->propertyType;?></td>
        <td><?=$value1->district;?></td>
        <td><?=$value1->addressLine1;?></td>
        <td><?=$value1->addressLine2;?></td>
        <td><?=$value1->city;?></td>
        <td><?=$value1->revenue;?></td>
        <td><?=$value1->description;?></td>
        <td><?=$value1->Users_username;?></td>
        <td><?=$value1->Date;?></td>
        <td><img src="./uploads/<?php echo $value1->imgName ?>"></td>
        <td><a href="" type="button" class="btn btn-success btn-xs">Approve</button></td>
        <td><a href="" type="button" class="btn btn-danger btn-xs">Delete</button></td>
        
        </tr>
        <?php }?> 
      </tbody>
      </table>
     <?php } ?>
</div>
</div>
</div>
</body>
</html>