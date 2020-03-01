<?php $this->load->view('header');?>
	<!-- Header Card -->
	<div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-watch bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Users</h5>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Card -->
	<!-- Inner Content -->
	<div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5>Ajax Data Source (Arrays)</h5>
									<span>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</span>
								</div>
								<div class="card-block">
								<div class="table-responsive dt-responsive">
									<div id="dt-ajax-array_wrapper" class="dataTables_wrapper dt-bootstrap4">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
												<div class="dataTables_length" id="dt-ajax-array_length">
													<label>Show 
														<select name="dt-ajax-array_length" aria-controls="dt-ajax-array" class="form-control input-sm">
															<option value="1">1</option>
															<option value="10">10</option>
															<option value="25">25</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select> entries
													</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div id="dt-ajax-array_filter" class="dataTables_filter">
													<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dt-ajax-array"></label>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-12">
												<table id="dt-ajax-array" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="dt-ajax-array_info">
													<thead>
														<tr role="row">
															<th class="sorting" tabindex="0" aria-controls="dt-ajax-array" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 123px;">Name</th>
															<th class="sorting" tabindex="0" aria-controls="dt-ajax-array" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 152px;">Position</th>
														</tr>
													</thead>
													<tbody>
														<tr class="odd">
															<td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>
														</tr>
													</tbody>
												</table>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-5">
													<div class="dataTables_info" id="dt-ajax-array_info" role="status" aria-live="polite">
														Showing 0 to 0 of 0 entries
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-7">
													<div class="dataTables_paginate paging_simple_numbers" id="dt-ajax-array_paginate">
														<ul class="pagination">
															<li class="paginate_button page-item previous disabled" id="dt-ajax-array_previous">
																<a href="#" aria-controls="dt-ajax-array" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
															</li>
															<li class="paginate_button page-item next disabled" id="dt-ajax-array_next">
																<a href="#" aria-controls="dt-ajax-array" data-dt-idx="1" tabindex="0" class="page-link">Next</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End Inner content -->
<?php $this->load->view('footer');?>
<script type="text/javascript" src="<?= base_url()?>assets/js/user/app.js"></script>
