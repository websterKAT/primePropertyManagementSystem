<?php echo form_open_multipart('Property/insertProperty');?>
	<div class="form-group col-10" style="margin-top: 100px;">
	    <label for="propertyType">Property Type</label>
	    <select class="form-control" id="propertyType" name="propertyType">
	      <option>Land</option>
	      <option>Houses</option>
	      <option>Apartments</option>
	      <option>Portions and Rooms</option>
	      <option>Holiday and Short-Term Rental</option>
	      <option>Commercial Property </option>
	      <option>Other</option>
	    </select>
	</div>

	<div class="form-group">
	    <label for="exampleInputEmail1">District</label>
	    <select class="form-control" id="district" name="district">
	      <option>Ampara</option>
	      <option>Anuradhapura</option>
	      <option>Badulla</option>
	      <option>Batticaloa</option>
	      <option>Colombo</option>
	      <option>Galle</option>
	      <option>Gampaha</option>
	      <option>Hambantota</option>
	      <option>Jaffna</option>
	      <option>Kaluthara</option>
	      <option>Kandy</option>
	      <option>Kegalle</option>
	      <option>Kilinochchi</option>
	      <option>Kurunegala</option>
	      <option>Mannar</option>
	      <option>Matale</option>
	      <option>Matara</option>
	      <option>Moneragala</option>
	      <option>Mullaitivu</option>
	      <option>Nuwara Eliya</option>
	      <option>Polonnaruwa</option>
	      <option>Puttalam</option>
	      <option>Ratnapura</option>
	      <option>Trincomalee</option>
	      <option>Vavuniya</option>
	    </select>
  </div>

   <div class="form-group">
	    <label for="addressLi"> Address Line 1</label>
	    <input type="text" class="form-control" id="addressL1" name="addressL1" placeholder="Address Line 1">
    </div>

     <div class="form-group">
	    <label for="addressL2"> Address Line 2</label>
	    <input type="text" class="form-control" id="addressL2" name="addressL2" placeholder="Address Line 2">
    </div>

     <div class="form-group">
	    <label for="city"> City </label>
	    <input type="text" class="form-control" id="city" name="city" placeholder="City">
    </div>
    <div class="form-group">
	    <label for="revenue"> Expected Revenue(Rs/year)</label>
	    <input type="text" class="form-control" id="revenue" name="revenue" placeholder="Revenue">
    </div>

     <div class="form-group col-10">
	    <label for="Description"> Small Discription </label>
	    <textarea class="form-control" id="description" rows="3" name="description" placeholder="description"></textarea>
	</div>

	<div class="form-group col-10">
	    <label for="exampleInputFile">Upload an Image</label>
	    <input type="file" class="form-control-file" id="imageName" name="imageName" aria-describedby="fileHelp">
    </div>
    <p> </p>
    <div class="form-group col-10">
    	<button type="submit" class="btn btn-primary">Save</button>
    </div>

</form>