<!-- Main content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<!-- /.col-md-6 -->
					<div class="col-lg-12">
						<div class="card card-primary card-outline">
							<div class="card-header">
								<div class="row mb-2">
									<div class="col-sm-12">
										<div class="btn-group-toggle btn-group float-sm-right" data-toggle="buttons">
											<label class="btn btn-outline-primary active">
												<input type="radio" name="payment" autocomplete="off" value="Other" /> Active
											</label>
											<label class="btn btn-outline-primary">
												<input type="radio" name="payment" autocomplete="off" value="Other" /> Pending
											</label>
											<label class="btn btn-outline-primary">
												<input type="radio" name="payment" autocomplete="off" value="Other" /> Disabled
											</label>
										</div>
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div>
							<div class="card-body">
								<pre><?php print_r($list); ?></pre>
							</div>
						</div>
					</div>
					<!-- /.col-md-6 -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content -->
