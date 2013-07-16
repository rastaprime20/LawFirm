<?php
$no_visible_elements=true;
include('header.php'); ?>


	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				
				
				<!-- theme selector starts -->
				<div class="btn-group pull-right theme-container" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="themes">
						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
					</ul>
				</div>
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> Administrator</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Profile</a></li>
						<li class="divider"></li>
						<li><a href="login.html">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
					
						<li>
						
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.html"><i class="icon-home"></i><span class="hidden-tablet"> Home</span></a></li>
						<li><a class="ajax-link" href="templates.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Templates</span></a></li>
						<li><a class="ajax-link" href="accounts.html"><i class="icon-user"></i><span class="hidden-tablet"> Accounts</span></a></li>
					</ul>					
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Blank</a>
					</li>
				</ul>
			</div>
			
			<!-- the introduction -->
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> Introduction</h2>
					</div>
					<div class="box-content">
						<h1>Welcome</h1>
						<p>Just modify</p>	
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
<!-- the introduction end -->

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i>Documents</h2>
						
					</div>
					<div class="box-content">
					
					<!-- the search code -->
					<div class="row-fluid">
						<div class="span6">
						
                                                <div id="DataTables_Table_0_length" class="dataTables_length">
						<label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
						<option value="10" selected="selected">10</option><option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
                                                    
                                                </select> records per page</label>
                                                </div>
                                                
                                                </div>
						<div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label>
						
				<!-- the option  -->
					<table border="0">
						<tr>
						<td></td>
						<td></td>
						</tr>
						<tr>
						<td><div class="control-group">
							<label class="control-label" for="selectError3">Filter By:</label></div></td>
						<td>
                                                    <div class="controls">
							<select id="selectError3">
								<option value="client name" >Client Name</option>
                                                                <option value="template name" >Template Name</option>
								<option value="date and time created" >Date and Time Created</option>
                                                        </select>
                                                    </div>
                                                </td>
						</tr>
						</table>
				<!-- the option end -->
						
						</div></div></div>
				<!-- the search code end -->
					
					
						
							<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th><form id="form1" name="form1" method="post" action="">
									    <input type="checkbox" name="checkbox" id="checkbox" />
									    <label for="checkbox"></label>
								      </form></th>
									  <th>TItle</th>
									  <th>Created By</th>
									  <th>Date Created</th>
									  <th>History</th>
									  <th>Action</th>
								  </tr>
							  </thead>   
							  <tbody>
							  
							  <!--first information-->
								<tr>
									<td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
									<td class="center">Civil Case Cover Sheet</td>
									<td class="center">John Parker</td>
																	
									<td class="center">01/10/2013</td>
									
									<td>
									<a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
								    </td>
									
									<td class="center">
									<a class="btn btn-info" href="pdf/1.  CM-010 (Civil Case Cover Sheet).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
									<a class="btn btn-warning" href=#"> <i class="icon-edit icon-white"></i> <!-- Edit -->
									</a>
									<a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
									</td>
								</tr>
								
								<!-- second information -->
								<tr>
									<td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
									<td class="center">Summons</td>
									<td class="center">Black Smith</td>
																	
									<td class="center">02/10/2013</td>
									
									<td>
									<a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
								    </td>
									
									<td class="center">
									<a class="btn btn-info" href="pdf/2.  SUM-100 (Summons).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
									<a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit -->
									</a>
									<a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
									</td>
								</tr>
								
								<!-- third information -->
								<tr>
									<td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
									<td class="center">Summons Additional Parties</td>
									<td class="center">Black Smith</td>
																	
									<td class="center">02/10/2013</td>
									
									<td>
									<a href="#" class="btn btn-group btn-setting"> <i class="icon icon-clock"></i> <!-- Browse --></a>
								    </td>
									
									<td class="center">
									<a class="btn btn-info" href="pdf/3.  SUM-200(A) (Summons Additional Parties).pdf"> <i class="icon-eye-open icon-white"></i> <!-- View --> </a> 
									<a class="btn btn-warning" href="#"> <i class="icon-edit icon-white"></i> <!-- Edit -->
									</a>
									<a class="btn btn-danger" href="#"> <i class="icon-trash icon-white"></i> <!-- Delete --></a>
									</td>
								</tr>
								                                 
						      </tbody>
							</table>
							
							<!-- paging part -->
							<div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div>
							
								
						 				
					</div>
				</div><!--/span-->
			</div><!--/row-->
    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
						
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

    
					<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Document history</h3>
			</div>
			<div class="modal-body">
				<table border="0">
				<tr>
				<td>Last accessed by:</td>
				<td>Juan Dela Cruz</td>
				</tr>
				<tr>
				<td>Date of last accessed:</td>
				<td>December 12, 2013</td>
				</tr>
				<tr>
				<td>Modified by:</td>
				<td>Pedro Santos</td>
				</tr>
				</table>
			</div>
			<div class="modal-footer">
				<a href="index.html" class="btn" data-dismiss="modal">Restore</a>
				<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
			</div>
		</div>		

		<footer>
			
		</footer>
		
	</div><!--/.fluid-container-->

				  

		  
       
<?php include('footer.php'); ?>
