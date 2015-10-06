<form action="" method="post">
	<div style="width: 900px; height: auto; margin: auto;">
		<button type="button" style="margin-top: 15px; margin-bottom: 10px;" class="btn btn-default" data-toggle="modal" data-target="#div_addnewrecord"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Add new Record</button>
		<table style="width: 100%" class="table">
			<thead>
				<tr>
					<th>No</td>
					<th>Name</td>
					<th>Type</td>
					<th>Producer</td>
					<th>Price</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Yamaha R1</td>
					<td>Sportbike</td>
					<td>Yamaha</td>
					<td>20.000 $</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!--================ ADD NEW RECORD MODAL =====================-->
	<div id="div_addnewrecord" class="modal fade" role="dialog" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">Add new Record</h4>
				</div>
				<div class="modal-body">
			        <strong>Name</strong>
					<input id="txt_name" name="txt_name" class="form-control" type="text" >
					<span><?php echo form_error('txt_name'); ?></span>
					<br />
					<strong>Type</strong>
					<select name="cbo_type" id="cbo_type" class="form-control" style="width: 200px;">
						<option value="sport">Sportbike</option>
						<option value="nake">Nakebike</option>
						<option value="touring">Touring</option>
						<option value="cruiser">Cruiser</option>
						<option value="caferacer">Cafe Racer</option>
						<option value="trike">Trikebike</option>
					</select>
					<br />
					<strong>Producer</strong>
					<select name="cbo_producer" id="cbo_producer" class="form-control" style="width: 200px;">
						<option value="yamaha">Yamaha</option>
						<option value="suzuki">Suzuki</option>
						<option value="honda">Honda</option>
						<option value="bmw">BMW</option>
						<option value="kawasaki">Kawasaki</option>
						<option value="ducati">Ducati</option>
						<option value="benelli">Benelli</option>
						<option value="brp">BRP</option>
					</select>
					<br />
					<strong>Price</strong>
					<input id="txt_price" name="txt_price" class="form-control" type="number" >
					<span><?php echo form_error('txt_price'); ?></span>
					<br />
			    </div>
			    <div class="modal-footer">
			        <button type="submit" class="btn btn-danger">Submit</button>
			    </div>
			</div>
		</div>
	</div>
</form>