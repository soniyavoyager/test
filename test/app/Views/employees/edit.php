<?php echo form_open(base_url('/employees/update/'.$employee['id']), [
	'method' => 'post',
	'id' => 'form-employee-edit',
	'onsubmit' => 'employeeEdit(event, this);'
])?>

 <div class="form-group">
            <label>Employee ID</label>
            <input type="text" name="ID" id="ID" value="<?=$employee['Emp_id']?>" class="form-control required" readonly>
          </div>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" id="name" value="<?=$employee['name']?>" class="form-control required" required>
	</div>
	<div class="form-group">
		<label>Phone No.</label>
		<input type="number" name="phone" id="phone" value="<?=$employee['phone']?>" class="form-control required" required>
	</div>
	<div class="form-group">
		<label>E-Mail ID</label>
		<input type="email" name="email" id="email" value="<?=$employee['email']?>" class="form-control required">
	</div>
	 <div class="form-group">
            <label>Designation</label>
            <input type="text" name="Designation" id="Designation" value="<?=$employee['designation']?>" class="form-control required">
          </div>
          
           <div class="form-group">
            <label>Rate(per hours)</label>
            <input type="number" name="rate" id="rate" step=".01"  value="<?=$employee['rate']?>" class="form-control required">
          </div>
          
          <div class="form-group">
            <label>Over Time1 Rate(Per hours)</label>
            <input type="number" name="ot1_rate" id="rate" step=".01"  value="<?=$employee['ot1']?>" class="form-control required">
          </div>
            <div class="form-group">
            <label>Over Time2 Rate(Per hours)</label>
            <input type="number" name="ot2_rate" id="rate" step=".01"  value="<?=$employee['ot2']?>" class="form-control required">
          </div>
          
          
	
	<div class="modal-footer">
	    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	    <button type="submit" class="btn btn-primary">Save Changes</button>
	</div>
</form>
