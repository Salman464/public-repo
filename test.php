<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="tab-content">
						<div class="tab-pane active" id="allComplaints" role="tabpanel">
							<div class="p-20">
								<div class="table-responsive">
									<table id="allComplaintsTable" class="table table-bordered table-striped">
										<thead>
										<tr>
											<th>Complaint ID#</th>
											<th>Complainant</th>
											<th>Complaint Date</th>
											<th>Department</th>
											<th>Subject</th>
											<th>Current Status</th>
											<th>Action</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ([1,2,3,4,5] as $row) { ?>
											<tr>
												<td>
													<b><a href="<?php echo site_url('Admin/view_complaint/' . $row->complaint_id); ?>"><?php echo $row->complaint_id; ?></a></b>
												</td>
												<td><?php echo $row->name; ?></td>
												<td><?php echo date('d M Y', strtotime($row->complaint_date)); ?></td>
												<td><?php echo $row->dept_name; ?></td>
												<td><?php echo $row->subject; ?></td>
												<?php if ($row->status == 0) {
													$stats = "Pending";
													$color = "warning";
												} else if ($row->status == 1) {
													$stats = "In-Process";
													$color = "info";
												} else if ($row->status == 2) {
													$stats = "Product Requested";
													$color = "primary";
												} else {
													$stats = "Closed";
													$color = "success";
												} ?>
												<td>
													<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
												</td>
												<td>
													<a href="<?php echo site_url('Admin/view_complaint/' . $row->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
												</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="tab-pane p-20" id="pending" role="tabpanel">
							<div class="table-responsive">
								<table id="pendingComplaints" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Complaint ID#</th>
										<th>Complainant</th>
										<th>Complaint Date</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($pendingComplaints as $pending) { ?>
										<tr>
											<td>
												<b><a href="<?php echo site_url('Admin/view_complaint/' . $pending->complaint_id); ?>"><?php echo $pending->complaint_id; ?></a></b>
											</td>
											<td><?php echo $pending->name; ?></td>
											<td><?php echo date('d M Y', strtotime($pending->complaint_date)); ?></td>
											<td><?php echo $pending->dept_name; ?></td>
											<td><?php echo $pending->subject; ?></td>
											<?php if ($pending->status == 0) {
												$stats = "Pending";
												$color = "warning";
											} else if ($pending->status == 1) {
												$stats = "In-Process";
												$color = "info";
											} else if ($pending->status == 2) {
												$stats = "Product Requested";
												$color = "primary";
											} else {
												$stats = "Closed";
												$color = "success";
											} ?>
											<td>
												<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
											</td>
											<td>
												<a href="<?php echo site_url('Admin/view_complaint/' . $pending->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane p-20" id="processing" role="tabpanel">
							<div class="table-responsive">
								<table id="processingComplaints" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Complaint ID#</th>
										<th>Complainant</th>
										<th>Complaint Date</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($InProcessComplaints as $pending) { ?>
										<tr>
											<td>
												<b><a href="<?php echo site_url('Admin/view_complaint/' . $pending->complaint_id); ?>"><?php echo $pending->complaint_id; ?></a></b>
											</td>
											<td><?php echo $pending->name; ?></td>
											<td><?php echo date('d M Y', strtotime($pending->complaint_date)); ?></td>
											<td><?php echo $pending->dept_name; ?></td>
											<td><?php echo $pending->subject; ?></td>
											<?php if ($pending->status == 0) {
												$stats = "Pending";
												$color = "warning";
											} else if ($pending->status == 1) {
												$stats = "In-Process";
												$color = "info";
											} else if ($pending->status == 2) {
												$stats = "Product Requested";
												$color = "primary";
											} else {
												$stats = "Closed";
												$color = "success";
											} ?>
											<td>
												<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
											</td>
											<td>
												<a href="<?php echo site_url('Admin/view_complaint/' . $pending->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane p-20" id="productWaiting" role="tabpanel">
							<div class="table-responsive">
								<table id="productWaitingComplaints" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Complaint ID#</th>
										<th>Complainant</th>
										<th>Complaint Date</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($ReqAssetComplaints as $waitingProduct) { ?>
										<tr>
											<td>
												<b><a href="<?php echo site_url('Admin/view_complaint/' . $waitingProduct->complaint_id); ?>"><?php echo $waitingProduct->complaint_id; ?></a></b>
											</td>
											<td><?php echo $waitingProduct->name; ?></td>
											<td><?php echo date('d M Y', strtotime($waitingProduct->complaint_date)); ?></td>
											<td><?php echo $waitingProduct->dept_name; ?></td>
											<td><?php echo $waitingProduct->subject; ?></td>
											<?php if ($waitingProduct->status == 0) {
												$stats = "Pending";
												$color = "warning";
											} else if ($waitingProduct->status == 1) {
												$stats = "In-Process";
												$color = "info";
											} else if ($waitingProduct->status == 2) {
												$stats = "Product Requested";
												$color = "primary";
											} else {
												$stats = "Closed";
												$color = "success";
											} ?>
											<td>
												<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
											</td>
											<td>
												<a href="<?php echo site_url('Admin/view_complaint/' . $waitingProduct->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane p-20" id="resolve" role="tabpanel">
							<div class="table-responsive">
								<table id="resolveComplaints" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Complaint ID#</th>
										<th>Complainant</th>
										<th>Complaint Date</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($Resolved as $row) { ?>
										<tr>
											<td>
												<b><a href="<?php echo site_url('Admin/view_complaint/' . $row->complaint_id); ?>"><?php echo $row->complaint_id; ?></a></b>
											</td>
											<td><?php echo $row->name; ?></td>
											<td><?php echo date('d M Y', strtotime($row->complaint_date)); ?></td>
											<td><?php echo $row->dept_name; ?></td>
											<td><?php echo $row->subject; ?></td>
											<?php if ($row->status == 0) {
												$stats = "Pending";
												$color = "warning";
											} else if ($row->status == 1) {
												$stats = "In-Process";
												$color = "info";
											} else if ($row->status == 2) {
												$stats = "Product Requested";
												$color = "primary";
											} else {
												$stats = "Resolved";
												$color = "success";
											} ?>
											<td>
												<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
											</td>
											<td>
												<a href="<?php echo site_url('Admin/view_complaint/' . $row->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane p-20" id="reject" role="tabpanel">
							<div class="table-responsive">
								<table id="rejectComplaints" class="table table-bordered table-striped">
									<thead>
									<tr>
										<th>Complaint ID#</th>
										<th>Complainant</th>
										<th>Complaint Date</th>
										<th>Department</th>
										<th>Subject</th>
										<th>Current Status</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($Rejected as $row2) { ?>
										<tr>
											<td>
												<b><a href="<?php echo site_url('Admin/view_complaint/' . $row2->complaint_id); ?>"><?php echo $row2->complaint_id; ?></a></b>
											</td>
											<td><?php echo $row2->name; ?></td>
											<td><?php echo date('d M Y', strtotime($row2->complaint_date)); ?></td>
											<td><?php echo $row2->dept_name; ?></td>
											<td><?php echo $row2->subject; ?></td>
											<?php if ($row2->status == 0) {
												$stats = "Pending";
												$color = "warning";
											} else if ($row2->status == 1) {
												$stats = "In-Process";
												$color = "info";
											} else if ($row2->status == 2) {
												$stats = "Product Requested";
												$color = "primary";
											} else {
												$stats = "Rejected";
												$color = "danger";
											} ?>
											<td>
												<span class="label label-<?php echo $color; ?>"><?php echo $stats; ?></span>
											</td>
											<td>
												<a href="<?php echo site_url('Admin/view_complaint/' . $row2->complaint_id); ?>"><span class="label label-danger"><i class="fa fa-pencil" style="margin-right: 10px;"></i>View Complaint</span></a>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
  </body>
</html>