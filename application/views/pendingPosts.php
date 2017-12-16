<div class="col-md-1">

</div>
<div class="col-md-8">
    <?php
        $success_msg= $this->session->flashdata('success_msg');
      if($success_msg){
      ?>
        <div class="alert alert-success">
        <strong>Command Successfully Done!</strong> 
        </div>
       <?php
          }
        ?>
    <?php
      if($PPROPERTIES == null){ ?>
        <h3>No any Pending posts </h3>
     <?php } ?>
     <?php 
     if($PPROPERTIES != null) { ?>
      <h2 style="margin-top:50px;">PENDING POSTS </h2>
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
       	<th>Date </th>
        <th>User Name </th>
       	<th>View </th>
       	
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
        <td><?=$value1->Date;?></td>
        <td><?=$value1->Users_username;?> </td>
        <td><a href="<?php echo site_url('Property/loadPropertyForReview/'.$value1->idproperty);?>" type="button" class="btn btn-success btn-xs">View</a></td>
        </tr>
        <?php }?> 
      </tbody>
      </table>
     <?php } ?>
    
</div>
<div class="col-md-1">
</div>
</div>
</div>

</body>
</html>