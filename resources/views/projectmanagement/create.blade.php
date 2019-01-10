@extends('layouts.app')
  
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{ route('projectmanagement.store') }}" method="POST">
<div class="panel-group" id="accordion"> <!-- accordion 1 -->
   <div class="panel panel-primary">
        <div class="panel-heading"> <!-- panel-heading -->
            <h4 class="panel-title"> <!-- title 1 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionOne">
             PROJECT PLANNING
            </a>
           </h4>
        </div>
        <!-- panel body -->
        <div id="accordionOne" class="panel-collapse collapse in">
          <div class="panel-body">
             <div class = "col-sm-12">

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="project_lead">Project Leader:</label>
                          <input type="text" class="form-control" id="project_lead"  name="project_lead">
                      </div>

                      <div class= "col-sm-4">
                          <label for="reference">Reference:</label>
                          <input type="text" class="form-control" id="reference" name="reference">
                      </div>

                      <!-- <div class= "col-sm-4">
                          <label for="tender_amount">Tender Amount :</label>
                          <input type="text" class="form-control" id="tender_amount"  name="tender_amount">
                      </div> -->
                   </div>


                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="tender_no">Tender No:</label>
                          <input type="text" class="form-control" id="tender_no" name="tender_no">
                      </div>

                      <div class= "col-sm-4">
                          <label for="tender_date">Tender Date:</label>
                          <input type="date" class="form-control" id="tender_date" name="tender_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="tender_amount">Tender Amount:</label>
                          <input type="text" class="form-control" id="tender_amount"  name="tender_amount">
                      </div>
                   </div>

                    <div class ="row">
                      <div class= "col-sm-4">
                          <label for="order_no">Order No:</label>
                          <input type="text" class="form-control" id="order_no" name="order_no" required>
                      </div>

                      <div class= "col-sm-4">
                          <label for="order_date">Oreder Date:</label>
                          <input type="date" class="form-control" id="order_date" name="order_date" required>
                      </div>

                      <div class= "col-sm-4">
                          <label for="order_amount">Oreder Amount:</label>
                          <input type="text" class="form-control" id="order_amount" name="order_amount" required>
                      </div>
                   </div>

                    <div class ="row">
                      <div class= "col-sm-4">
                          <label for="start_plnd_dt">Start Planned Date:</label>
                          <input type="date" class="form-control" id="start_plnd_dt" name="start_plnd_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="start_actual_dt">Start Actual Date:</label>
                          <input type="date" class="form-control" id="start_actual_dt"  name="start_actual_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="gap_assessment">Gap Assessment Date:</label>
                          <input type="date" class="form-control" id="gap_assessment"  name="gap_assessment">
                      </div>
                   </div>
              </div>
           </div>
        </div>
   </div>
   <div class="panel panel-success">  <!-- accordion 2 -->
          <div class="panel-heading"> 
          <h4 class="panel-title"> <!-- title 2 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionTwo">
               DOCUMENTATION
            </a>
          </h4>
          </div>
         <!-- panel body -->
        <div id="accordionTwo" class="panel-collapse collapse">
          <div class="panel-body">
              <div class = "col-sm-12">
                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="qm_planned_date">QM Planned Date:</label>
                          <input type="date" class="form-control" id="qm_planned_date" name="qm_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="qm_actual_date">QM Actual Date:</label>
                          <input type="date" class="form-control" id="qm_actual_date" name="qm_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="qm_comment">QM Comment:</label>
                          <input type="text" class="form-control" id="qm_comment" name="qm_comment">
                      </div>
                   </div>

                    <div class ="row">
                      <div class= "col-sm-4">
                          <label for="pm_planned_date">PM Planned Date:</label>
                          <input type="date" class="form-control" id="pm_planned_date" name="pm_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="pm_actual_date">PM Actual Date:</label>
                          <input type="date" class="form-control" id="pm_actual_date" name="pm_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="pm_comment">PM Comment:</label>
                          <input type="text" class="form-control" id="pm_comment" name="pm_comment">
                      </div>
                   </div>

                    <div class ="row">
                      <div class= "col-sm-4">
                          <label for="sop_planned_date">SOP Planned Date:</label>
                          <input type="date" class="form-control" id="sop_planned_date" name="sop_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="sop_actual_date">SOP Actual Date:</label>
                          <input type="date" class="form-control" id="sop_actual_date" name="sop_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="sop_comment">SOP Comment:</label>
                          <input type="text" class="form-control" id="sop_comment"  name="sop_comment">
                      </div>
                   </div>

                    <div class ="row">
                      <div class= "col-sm-4">
                          <label for="formo_planned_date">Formation Planned Date:</label>
                          <input type="date" class="form-control" id="formo_planned_date" name="formo_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="formo_actual_date">Formation Actual Date:</label>
                          <input type="date" class="form-control" id="formo_actual_date" name="formo_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="formo_comment">Formation Comment:</label>
                          <input type="text" class="form-control" id="formo_comment" name="formo_comment">
                      </div>
                   </div>
              </div>
          </div>
        </div>   
    </div>
    <div class="panel panel-info">  <!-- accordion 3 -->
        <div class="panel-heading">
          <h4 class="panel-title"> <!-- title 3 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionThree">
              IMPLEMENTATION
            </a>
          </h4>
        </div>  
        <div id="accordionThree" class="panel-collapse collapse">
          <!-- panel body -->
          <div class="panel-body">
              <div class = "col-sm-12">
                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="traning_planned_date">Training Planned Date:</label>
                          <input type="date" class="form-control" id="traning_planned_date" name="traning_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="traning_actual_date">Training Actual Date:</label>
                          <input type="date" class="form-control" id="traning_actual_date" name="traning_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="traning_comment">Training Comment:</label>
                          <input type="text" class="form-control" id="traning_comment" name="traning_comment">
                      </div>
                   </div>

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="implementation_planned_date">Implementation Planned Date:</label>
                          <input type="date" class="form-control" id="implementation_planned_date" name="implementation_planned_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="implementation_actual_date">Implementation Actual Date:</label>
                          <input type="date" class="form-control" id="implementation_actual_date" name="implementation_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="implementation_comment">Implementation Comment:</label>
                          <input type="text" class="form-control" id="implementation_comment" name="implementation_comment">
                      </div>
                   </div>  
              </div>
          </div>
        </div> 
   </div>   
   <div class="panel panel-warning">  <!-- accordion 4 -->
        <div class="panel-heading">
          <h4 class="panel-title"> <!-- title 4 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionFour">
              AUDIT
            </a>
          </h4>
        </div>  
        <div id="accordionFour" class="panel-collapse collapse">
          <!-- panel body -->
          <div class="panel-body">
              <div class = "col-sm-12">
                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="int_audit_plnd_date">Internal Audit Planned Date:</label>
                          <input type="date" class="form-control" id="int_audit_plnd_date" name="int_audit_plnd_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="int_audit_actual_date">Internal Audit Actual Date:</label>
                          <input type="date" class="form-control" id="int_audit_actual_date" name="int_audit_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="int_audit_comment">Internal Audit Comment:</label>
                          <input type="text" class="form-control" id="int_audit_comment" name="int_audit_comment">
                      </div>
                   </div>

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="adequacy_audit_plnd_date">Adequacy Audit Planned Date:</label>
                          <input type="date" class="form-control" id="adequacy_audit_plnd_date" name="adequacy_audit_plnd_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="adequacy_audit_actual_date">Adequacy Audit Actual Date:</label>
                          <input type="date" class="form-control" id="adequacy_audit_actual_date" name="adequacy_audit_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="adequacy_audit_comment">Adequacy Audit Comment:</label>
                          <input type="text" class="form-control" id="adequacy_audit_comment" name="adequacy_audit_comment">
                      </div>
                   </div>  

                        <div class ="row">
                      <div class= "col-sm-4">
                          <label for="application_plnd_dt">Application Planned Date:</label>
                          <input type="date" class="form-control" id="application_plnd_dt" name="application_plnd_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="application_actual_dt">Application Actual Date:</label>
                          <input type="date" class="form-control" id="application_actual_dt" name="application_actual_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="application_comment">Application Comment:</label>
                          <input type="text" class="form-control" id="application_comment" name="application_comment">
                      </div>
                   </div>  
              </div>
          </div>
        </div> 
  </div> 
  <div class="panel panel-danger">  <!-- accordion 5 -->
        <div class="panel-heading">
          <h4 class="panel-title"> <!-- title 5 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionFive">
              ASSESSMENT
            </a>
          </h4>
        </div>  
        <div id="accordionFive" class="panel-collapse collapse">
          <!-- panel body -->
          <div class="panel-body">
              <div class = "col-sm-12">
                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="pre_assmnt_plnd_date">Pre Assesment Planned Date:</label>
                          <input type="date" class="form-control" id="pre_assmnt_plnd_date" name="pre_assmnt_plnd_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="pre_assmt_actual_date">Pre Assesment Actual Date:</label>
                          <input type="date" class="form-control" id="pre_assmt_actual_date" name="pre_assmt_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="pre_assmt_comment">Pre Assesment Comment:</label>
                          <input type="text" class="form-control" id="pre_assmt_comment" name="pre_assmt_comment">
                      </div>
                   </div>

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="final_assmt__plnd_date">Final Assesment Planned Date:</label>
                          <input type="date" class="form-control" id="final_assmt__plnd_date" name="final_assmt__plnd_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="final_assmt_actual_date">Final Assesment Actual Date:</label>
                          <input type="date" class="form-control" id="final_assmt_actual_date" name="final_assmt_actual_date">
                      </div>

                      <div class= "col-sm-4">
                          <label for="final_assmt_comment">Final Assesment Comment:</label>
                          <input type="text" class="form-control" id="final_assmt_comment" name="final_assmt_comment">
                      </div>
                   </div>  
              </div>
          </div>
        </div> 
  </div>    
  <div class="panel panel-default">  <!-- accordion 5 -->
        <div class="panel-heading">
          <h4 class="panel-title"> <!-- title 5 -->
            <a data-toggle="collapse" data-parent="#accordion" href="#accordionSix">
              FINANCE
            </a>
          </h4>
        </div>  
        <div id="accordionSix" class="panel-collapse collapse">
          <!-- panel body -->
          <div class="panel-body">
              <div class = "col-sm-12">
                 <div class ="row">
                      <div class= "col-sm-4">
                          <label for="adv_plnd_dt">Advance Planned Date:</label>
                          <input type="date" class="form-control" id="adv_plnd_dt" name="adv_plnd_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="adv_act_dt">Advance Actual Date:</label>
                          <input type="date" class="form-control" id="adv_act_dt" name="adv_act_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="adv_remark">Advance Remark:</label>
                          <input type="text" class="form-control" id="adv_remark" name="adv_remark">
                      </div>
                   </div>

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="first_instal_plnd_dt">1st Installment Planned Date:</label>
                          <input type="date" class="form-control" id="first_instal_plnd_dt" name="first_instal_plnd_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="first_instal_act_dt">1st Install Actual Date:</label>
                          <input type="date" class="form-control" id="first_instal_act_dt" name="first_instal_act_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="first_instal_remark">1st Install Remark:</label>
                          <input type="text" class="form-control" id="first_instal_remark" name="first_instal_remark">
                      </div>
                   </div>  

                   <div class ="row">
                      <div class= "col-sm-4">
                          <label for="sec_instal_pl_dt">2nd Installment Planned Date:</label>
                          <input type="date" class="form-control" id="sec_instal_pl_dt" name="sec_instal_pl_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="sec_instal_act_dt">2nd Install Actual Date:</label>
                          <input type="date" class="form-control" id="sec_instal_act_dt" name="sec_instal_act_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="sec_instal_remark">2nd Install Remark:</label>
                          <input type="text" class="form-control" id="sec_instal_remark" name="sec_instal_remark">
                      </div>
                   </div>  

                  <div class ="row">
                      <div class= "col-sm-4">
                          <label for="third_instal_pl_dt">3rd Installment Planned Date:</label>
                          <input type="date" class="form-control" id="third_instal_pl_dt" name="third_instal_pl_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="third_instal_act_dt">3rd Install Actual Date:</label>
                          <input type="date" class="form-control" id="third_instal_act_dt" name="third_instal_act_dt">
                      </div>

                      <div class= "col-sm-4">
                          <label for="third_instal_remark">3rd Install Remark:</label>
                          <input type="text" class="form-control" id="third_instal_remark" name="third_instal_remark">
                      </div>
                   </div>  
              </div>
          </div>
        </div> 
  </div>   
</div>
</form>
</body>
</html>
 @endsection

