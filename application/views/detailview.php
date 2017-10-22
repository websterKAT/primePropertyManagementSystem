<div class="row-fluid front-content">
  <div class="span12">
    <br>

    <br>

    <br>

    <br>
    <br>
    <br>

  </div>
  <div class="span12">
    <div class="row-fluid">


        <div class="span6">

          <b> Image </b>
          <img src="../../uploads/<?php echo $view['imgName']; ?>">


        </div>

        <div class="span6">

        <b>Property Type</b>
        <p><?php echo $view['propertyType']; ?></p>
        <br>
        <b>District</b>
        <p><?php echo $view['district']; ?></p>
        <br>
        <b>City</b>
        <p><?php echo $view['city']; ?></p>
        <br>
        <b>Revenue</b>
        <p><?php echo $view['revenue']; ?><br>per month</p>
        <br>
        <b>Uploaded Date</b>
        <p><?php echo $view['Date']; ?></p>

        </div>


    </div><!-- end row-fluid -->
  </div>
  <div class="span6">
    <b class="bold" > Address </b>

    <p><?php echo $view['addressLine1']; ?><br><?php echo $view['addressLine2']; ?></p>

    <br>
    <br>
  </div>


  <div class="span6">
    <b class="bold" > Description </b>

    <p><?php echo $view['description']; ?></p>

  </div> <!-- end span12 -->
</div>
