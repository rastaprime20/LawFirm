<div id=content class=span10>
<div class=row-fluid>
        <div class=span12>
            <ul class=breadcrumb>
                <li>
                    <a href=<?php echo base_url(); ?>user>Accounts</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transfer>Transfer</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transfertTo>Transfer To</a> <span class=divider>/</span>
                    <a href=<?php echo base_url(); ?>user/transferToAtty>Transfer To</a> <span class=divider>/</span>
                </li>
            </ul>
        </div>
    </div>
<div class="row-fluid">
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header well" data-original-title>
                <h2><i class="icon-list-alt"></i>Accounts</h2>
            </div>
            <div class="box-content"style="display: block;">
                 <legend><h4>Silam, Joanna</h4></legend>
                
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            
                            <th>Case Number</th>
                            <th>Case Title</th>
                            <th>Plaintiff</th>
                            <th>Defendant</th>
                            <th>History</th>
                            <th>Remark(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> LC100380 </td>
                            <td class="center">Assasination</td>
                            <td class="center">Obama, Juan</td>
                            <td class="center">Vladimer Dagdag</td>
                            <td class="center">transfered from Atty. Tyrone Fernandez</td>
                            <td class="center">MIA</td>
                        </tr>
                        <tr>
                            <td> ABL111380 </td>
                            <td class="center">Drug Dealer</td>
                            <td class="center">Arroyo, Mercy</td>
                            <td class="center">Vladimer Dagdag</td>
                            <td class="center">n/a</td>
                            <td class="center">n/a</td>
                        </tr>
                       <tr>
                            <td> BTC230141 </td>
                            <td class="center">Gun Dealer</td>
                            <td class="center">Stravoye, Kyre</td>
                            <td class="center">Vladimer Dagdag</td>
                            <td class="center">n/a</td>
                            <td class="center">n/a</td>
                        </tr>
                    </tbody>
                </table>
                
                
            </div>
            <div class="modal-footer">
            
                <a href="<?php echo base_url() ?>user/transfertTo" class="btn" data-dismiss="modal">Undo Changes</a>
            </div>
        </div>
    </div>
</div>