<div id=content class=span10>

    <!--Start of page bread crumb-->
    <div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>home>Home</a> <span class=divider>/</span>
                    <a href="<?php echo base_url();?>home/updateDocument/createProofSummons">Update Document</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>home/updateDocument/createProofSummons">Proof of Summons (Lis Pendens)</a> <span class=divider>/</span>
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
                    <h2><i class="icon-list-alt"></i> Update Document for Tyrone Fernandez</h2>
                </div>
                <!--End of box header-->

                <!--Start of box content-->
                <div class="box-content" style="display: block;">
                    <form>
                        <fieldset>

                            <legend>
                                <h4 style="color: #4F5155">Update Document - Proof of Summons (Lis Pendens)</h4>
                            </legend>
                            
                            <label>
                                &nbsp; Case Number: &nbsp; <input type="text" aria-controls="DataTables_Table_0">
                            </label>
                            
                            <ol>
                                <li>
                                    <p>
                                        I am over 18 years of age and not a party to this action.
                                        I am a resident of or employed in the county where the mailing took place.
                                    </p>
                                </li>
                                <li>
                                    <label>
                                        My residence or business address is:<br><textarea style="width:400px"></textarea>
                                    </label>
                                </li>
                                <li>
                                    <p>
                                        On <i>(date).</i>&nbsp;
                                        <input style="height:15px; width:125px;"class="input-xlarge focused" id="focusedInput" type="date" value="">
                                        &nbsp; I mailed from (city and state):&nbsp;
                                        <input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                        &nbsp; the following <b>(documents)</b>&nbsp;<i>(specify):</i>&nbsp;<textarea  style="width:400px;"></textarea><br>
                                        <input type="checkbox" id="inlineCheckbox1" value="option1" >The documents are listed in the <i>Attachment to
                                            Proof of Service by First-Class Mail—Civil (Documents Served)</i>(form POS-030(D)).

                                    </p>
                                </li>
                                <li>
                                    <p>
                                        I served the documents by enclosing them in an envelope and (check one):
                                    </p>    
                                    <ol style="list-style:lower-alpha">
                                        <li>
                                            <p>
                                                <input type="checkbox" id="inlineCheckbox1" value="option1" ><b>depositing</b> the sealed envelope with the United States Postal Service with the postage fully prepaid.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <input type="checkbox" id="inlineCheckbox1" value="option1" ><b>placing</b> the envelope for collection and mailing following our 
                                                ordinary business practices. I am readily familiar with this business practice for collecting and processing 
                                                correspondence for mailing. On the same day that correspondence is placed for collection and mailing, 
                                                it is deposited in the ordinary course of business with the United States Postal Service in a sealed
                                                envelope with postage fully prepaid.

                                            </p>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <p>
                                        The envelope was addressed and mailed as follows:     
                                    </p>
                                    <ol style="list-style:lower-alpha">
                                        <li>
                                            <p>
                                                Name of person served:&nbsp;<input style="width:200px;" class="input-xlarge focused" id="focusedInput" type="text" value="">
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Address of person served&nbsp;<textarea  style="width:250px;"></textarea>
                                            </p>
                                        </li>
                                    </ol>

                                    <p>
                                        <input type="checkbox" id="inlineCheckbox1" value="option1" >The name and address of each person to whom I
                                        mailed the documents is listed in the <i>Attachment to Proof of Service by First-Class Mail—Civil (Persons Served)</i> (POS-030(P)).

                                    </p>

                                </li>
                                <li>
                                    <p>
                                        I declare under penalty of perjury under the laws of the State of California that the foregoing is true and correct.
                                    </p>
                                </li>    
                            </ol>
                            
                        </fieldset>
                    </form>
                </div>
                <!--End of box content-->

                <!--Start of footer for Proof of Summons records-->
                <div class="modal-footer">
                    <a class="btn btn-primary" href="home/updateDocument/createAdditionalPartiesLisPendens">Save & Next</a>
                    <a class="btn" href="<?php echo base_url(); ?>home">Back</a>
                </div>
                <!--End of footer for Proof of Summons records-->

            </div>
        </div>
    </div>
    <!--End of whole box-->


