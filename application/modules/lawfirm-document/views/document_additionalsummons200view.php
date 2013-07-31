<div id=content class=span10>
    
    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Create Document</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/plaintiff>Plaintiff</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/defendant>Defendant</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet>Civil Case Cover Sheet</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/createSummons100>Summons 100</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/createDocument/viewAdditionalSummons200>Additional Summons 200</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
    <!--End of page bread crumb-->
    
    <!--Start of whole box-->
    <div class="row-fluid">
        <div class="row-fluid sortable">
            <div class="box span12">
                
                <!--Start of box header-->
                <div class="box-header well">
                    <h2><i class="icon-list-alt"></i> Document</h2>
                </div>
                <!--End of box header-->
                
                <!--Start of box content-->
                <div class="box-content" >
                    <form>
                        <fieldset>
                            <legend>
                                <h4 style="color: #4F5155">Create Document - Additional Summons</h4>
                            </legend>
                            
                            <div style="padding-left: 30px; padding-right: 30px;">
                                <p style="text-align: center;">
                                    <b>INSTRUCTIONS FOR USE</b>
                                </p>
                                <p style="text-align: left;">
                                <ul>
                                    <li>This form may be used as an attachment to any summons  if space does not permit the listing of all parties  on the summons.</li><br>
                                    <li>If this attachment is used, insert the following statement in the plaintiff or defendant box on the summons: "Additional Parties Attachment form is attached."</li>
                                </ul><br>
                                <b>List additional parties</b><i>(Choose only one option. Use a separate page for each type of party):</i>
                                </p>
                                <hr class="hr_att">
                                
                                <!--Start party decision option-->
                                <label class="radio">
                                    <input type="radio" id="Plaintiff" name="partyDecision" onclick="togglePurDec(event)" />Plaintiff
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio">
                                    <input type="radio" id="Defendant" name="partyDecision" onclick="togglePurDec(event)" />Defendant
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio">
                                    <input type="radio" id="CrossComplainant" name="partyDecision" onclick="togglePurDec(event)" />Cross-Complainant
                                </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="radio">
                                    <input type="radio" id="CrossDefendant" name="partyDecision" onclick="togglePurDec(event)" />Cross-Defendant
                                </label>
                                <!--End party decision option-->
                                
                                <hr class="hr_att">
                                
                                <!--Start of list of added plaintiff records-->
                                <div id="PlaintiffData" style="padding-left:20px ;padding-right:20px; padding-top: 20px; display:none; margin-left:20px; height: 420px; border: 1px solid #cccccc;">
                                    
                                    <!--Start of searching, filtering, records per page and to all function-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div id="DataTables_Table_0_length" class="dataTables_length">
                                                <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page
                                                </label>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="dataTables_filter, dataTables_length2" id="DataTables_Table_0_filter">
                                                <div style="margin-left: 30%">
                                                    <label>
                                                        &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                                <div style="margin-left: 73%">
                                                    <label>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createPlaintiff" class="btn btn-group"><i class="icon-plus icon-black"></i> </a>                                               
                                                        <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                    </label>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <!--End of searching, filtering, records per page and to all function-->
                                        
                                    <!--Start of viewing the Plaintiff records-->
                                    <label>
                                        <p>
                                            &nbsp;&nbsp;<b>List of Plaintiff for this case: Rape</b>  
                                        </p>
                                    </label>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" name="checkbox" id="checkbox" />
                                                </th>
                                                <th>Client Name</th>
                                                <th>Last Modified</th>
                                                <th>Modified By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td class="center">07/30/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Christian Buela</td>
                                                <td class="center">07/29/2013 9:26AM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i></a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/28/2013 8:06PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/27/2013 10:26PM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/26/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of viewing the Plaintiff records-->
                                    
                                    <!--Start of pagination for Plaintiff records-->
                                    <div class="row-fluid">
                                        <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 5 of 32 entries</div></div>
                                        <div class="span12 center">
                                            <div class="dataTables_paginate paging_bootstrap pagination">
                                                <ul>
                                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li class="next"><a href="#">Next → </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End of pagination for Plaintiff records-->
                                </div>
                                <!--End of list of added plaintiff records-->
                                
                                <!--Start of list of added defendant records-->
                                <div id="DefendantData" style="padding-left:20px ;padding-right:20px; padding-top: 20px; display:none; margin-left:20px; height: 420px; border: 1px solid #cccccc;">
                                    
                                    <!--Start of searching, filtering, records per page and to all function-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div id="DataTables_Table_0_length" class="dataTables_length">
                                                <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page
                                                </label>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="dataTables_filter, dataTables_length2" id="DataTables_Table_0_filter">
                                                <div style="margin-left: 30%">
                                                    <label>
                                                        &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                                <div style="margin-left: 78%">
                                                    <label>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createDefendant" class="btn btn-group"><i class="icon-plus icon-black"></i> </a>                                               
                                                    </label>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <!--End of searching, filtering, records per page and to all function-->
                                           
                                    <!--Start of viewing the Defendant records-->
                                    <label>
                                        <p>
                                            &nbsp;&nbsp;<b>List of Defendant for this case: Rape</b>  
                                        </p>
                                    </label>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" name="checkbox" id="checkbox" />
                                                </th>
                                                <th>Defendant Name</th>
                                                <th>Cases Imposed</th>
                                                <th>Last Modified</th>
                                                <th>Modified By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td class="center">MIA/Mastermind</td>
                                                <td class="center">07/30/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Christian Buela</td>
                                                <td class="center">Assassin/Hired Hitman</td>
                                                <td class="center">07/29/2013 9:26AM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td> <a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i></a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Confidential/Drug Lord</td>
                                                <td class="center">07/28/2013 8:06PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Child Abuse</td>
                                                <td class="center">07/27/2013 10:26PM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Human Trafficking</td>
                                                <td class="center">07/26/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of viewing the Defendant records-->
                                        
                                    <!--Start of pagination for Defendant records-->
                                    <div class="row-fluid">
                                        <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 5 of 32 entries</div></div>
                                        <div class="span12 center">
                                            <div class="dataTables_paginate paging_bootstrap pagination">
                                                <ul>
                                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li class="next"><a href="#">Next → </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End of pagination for Defendant records-->
                                </div>
                                <!--End of list of added defendant records-->
                                
                                <!--Start of list of added cross-complaint records-->
                                <div id="CrossComplainantData" style="padding-left:20px ;padding-right:20px; padding-top: 20px; display:none; margin-left:20px; height: 420px; border: 1px solid #cccccc;">
                                    
                                    <!--Start of searching, filtering, records per page and to all function-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div id="DataTables_Table_0_length" class="dataTables_length">
                                                <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page
                                                </label>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="dataTables_filter, dataTables_length2" id="DataTables_Table_0_filter">
                                                <div style="margin-left: 30%">
                                                    <label>
                                                        &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                                <div style="margin-left: 73%">
                                                    <label>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createPlaintiff" class="btn btn-group"><i class="icon-plus icon-black"></i> </a>                                               
                                                        <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                    </label>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <!--End of searching, filtering, records per page and to all function-->
                                        
                                    <!--Start of viewing the cross-complaint records-->
                                    <label>
                                        <p>
                                            &nbsp;&nbsp;<b>List of Cross-complaint for this case: Rape</b>  
                                        </p>
                                    </label>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" name="checkbox" id="checkbox" />
                                                </th>
                                                <th>Client Name</th>
                                                <th>Last Modified</th>
                                                <th>Modified By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td class="center">07/30/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Christian Buela</td>
                                                <td class="center">07/29/2013 9:26AM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i></a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/28/2013 8:06PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/27/2013 10:26PM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">07/26/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>home/createDocument/editPlaintiff" class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                    <a href="<?php echo base_url(); ?>home/createDocument/defendant" class="btn btn-group" id="CreateDocument"><i class='icon-remove icon-black'></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of viewing the cross-complaint records-->
                                    
                                    <!--Start of pagination for cross-complaint records-->
                                    <div class="row-fluid">
                                        <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 5 of 32 entries</div></div>
                                        <div class="span12 center">
                                            <div class="dataTables_paginate paging_bootstrap pagination">
                                                <ul>
                                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li class="next"><a href="#">Next → </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End of pagination for cross-complaint records-->
                                </div>
                                <!--End of list of added cross-complaint records-->
                                
                                <!--Start of list of added cross-defendant records-->
                                <div id="CrossDefendantData" style="padding-left:20px ;padding-right:20px; padding-top: 20px; display:none; margin-left:20px; height: 420px; border: 1px solid #cccccc;">
                                    
                                    <!--Start of searching, filtering, records per page and to all function-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div id="DataTables_Table_0_length" class="dataTables_length">
                                                <label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                                        <option value="10" selected="selected">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> records per page
                                                </label>
                                            </div>
                                        </div>
                                        <div class="span6">
                                            <div class="dataTables_filter, dataTables_length2" id="DataTables_Table_0_filter">
                                                <div style="margin-left: 30%">
                                                    <label>
                                                        &nbsp; Search: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                                                    </label>
                                                </div>
                                                <div style="margin-left: 78%">
                                                    <label>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                        <a href="<?php echo base_url(); ?>home/createDocument/createDefendant" class="btn btn-group"><i class="icon-plus icon-black"></i> </a>                                               
                                                    </label>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <!--End of searching, filtering, records per page and to all function-->
                                        
                                    <!--Start of viewing the cross-defendant records-->
                                    <label>
                                        <p>
                                            &nbsp;&nbsp;<b>List of Cross-Defendant for this case: Rape</b>  
                                        </p>
                                    </label>
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" name="checkbox" id="checkbox" />
                                                </th>
                                                <th>Defendant Name</th>
                                                <th>Cases Imposed</th>
                                                <th>Last Modified</th>
                                                <th>Modified By</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td class="center">MIA/Mastermind</td>
                                                <td class="center">07/30/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Christian Buela</td>
                                                <td class="center">Assassin/Hired Hitman</td>
                                                <td class="center">07/29/2013 9:26AM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td> <a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i></a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Confidential/Drug Lord</td>
                                                <td class="center">07/28/2013 8:06PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Child Abuse</td>
                                                <td class="center">07/27/2013 10:26PM</td>
                                                <td class="center">Tyrone Fernandez</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
                                                <td class="center">Vladimer Dagdag</td>
                                                <td class="center">Human Trafficking</td>
                                                <td class="center">07/26/2013 9:26PM</td>
                                                <td class="center">Christian Buela</td>
                                                <td><a href="<?php echo base_url(); ?>home/createDocument/createCivilCaseCoverSheet" class="btn btn-group" id="CreateDocument"><i class='icon-pencil icon-black'></i> </a>
                                                    <a href=<?php echo base_url(); ?>home/createDocument/editDefendant class="btn btn-group"><i class="icon-edit icon-black"></i> </a>                                               
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--End of viewing the Cross-Defendant records-->
                                        
                                    <!--Start of pagination for Cross-Defendant records-->
                                    <div class="row-fluid">
                                        <div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 5 of 32 entries</div></div>
                                        <div class="span12 center">
                                            <div class="dataTables_paginate paging_bootstrap pagination">
                                                <ul>
                                                    <li class="prev disabled"><a href="#">← Previous</a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li class="next"><a href="#">Next → </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End of pagination for Cross-Defendant records-->
                                </div>
                                <!--End of list of added Cross-Defendant records-->
                            </div>
                        </fieldset>
                    </form>
                 </div>
                <!--End of box content-->
                
                <!--Start of footer for Additional Summons 200 records-->
                    
                <div class="modal-footer">
                    <a class="btn btn-primary" href="home/createDocument/createCivilFeeWaiver">Save & Next</a>
                    <a class="btn" href="<?php echo base_url(); ?>home/createDocument/defendant">Back</a>
                </div>
                    
                <!--End of footer for Additional Summons 200 records-->
                
            </div>
        </div>
    </div>
    <!--End of whole box-->
    
    <!--Start of script for toggling additional parties-->
    <script>
            function togglePurDec(evt) {
                evt = (evt) ? evt : event;
                var target = (evt.target) ? evt.target : evt.srcElement;
                var block1 = document.getElementById("PlaintiffData");
                var block2 = document.getElementById("DefendantData");
                var block3 = document.getElementById("CrossComplainantData");
                var block4 = document.getElementById("CrossDefendantData");
                if (target.id == "Plaintiff") 
                {
                    block1.style.display = "block";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
                else if (target.id == "Defendant")
                {
                    block1.style.display = "none";
                    block2.style.display = "block";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
                else if (target.id == "CrossComplainant")
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "block";
                    block4.style.display = "none";   
                }
                else if (target.id == "CrossDefendant")
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "block";        
                }
                else
                {
                    block1.style.display = "none";
                    block2.style.display = "none";
                    block3.style.display = "none";
                    block4.style.display = "none";
                }
            }
        </script>
<!--End of script for toggling additional parties-->
