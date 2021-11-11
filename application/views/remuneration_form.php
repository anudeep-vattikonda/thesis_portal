<?php

	include_once('header.php');
?>
   <!-- <?php
    $conn = mysqli_connect('localhost','root','','thesis_trail');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "uploaded_files/".$fileName;
        
        $query = "INSERT INTO extra_feedback(student_id, examiner_id, feedback) VALUES ('".$user['student_admission_number']."','".$user['examiner_id']."','".$fileName."')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "File not uploaded, try again!";
        }
        
    }
    ?> -->

   <!--  evaluation form goes here -->
   <div class="col-sm-10">
       <form  action="<?php echo base_url().'index.php/thesis_portal/evaluation_form';?>" method="post" name="frm" id="frm">
   
            <h3 class="text-gray-900 mb-4 text-center"><strong>REMUNERATION BILL FOR PH.D. THESIS EVALUATION</strong></h3>
            <br>

            <div class="card text-center container" style="border: 1px solid rgba(0, 0, 0, .125); height: 550px;">
                <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Details of Examiner</div>
                <hr>
                <label for="3a">Name of Examiner</label>
                <br>
                <input type="text" class="form-control" id="3a" placeholder="">
                <label for="3b">Address of Examiner</label>
                <br>
                <input type="text" class="form-control" id="3b" placeholder="">
                <label for="3c">Email id</label>
                <br>
                <input type="text" class="form-control" id="3c" placeholder="">
                <label for="3d">Ph.D Thesis/ Dissertation of - Mr/Ms.</label>
                <br>
                <input type="text" class="form-control" id="3d" placeholder="">
                <label for="3a">Title of Thesis</label>
                <br>
                <input type="text" class="form-control" id="3a" placeholder="">
                <label for="3a">Amount for Examined Thesis/Dissertation (Ph.D Thesis Evaluation)</label>
                <br>
                <input type="text" class="form-control" id="3a" placeholder="">
                <label for="3a">Miscellaneous expenses of Postage, Packing etc. (Attach Receipt)</label>
                <br>
                <input type="text" class="form-control" id="3a" placeholder="">
            </div>
            <br>
            <br>
            <hr>
            <div class="card text-center container" style="border: 1px solid rgba(0, 0, 0, .125); height: 700px; ">
                <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Particulars of Bank Account (Essentially required for wire transfer)</div>
                <hr>
                <label for="4a">Name & Address of Beneficiary </label>
                <br>
                <input type="text" class="form-control" id="4a" placeholder="">
                <label for="4b">Beneficiary Name </label>
                <br>
                <input type="text" class="form-control" id="4b" placeholder="">
                <label for="4c">PAN Card Number</label>
                <br>
                <input type="text" class="form-control" id="4c" placeholder="">
                <label for="4d">Bank Name & Branch Address </label>
                <br>
                <input type="text" class="form-control" id="4d" placeholder="">
                <label for="4e">Account No. </label>
                <br>
                <input type="text" class="form-control" id="4e" placeholder="">
                <label for="4f">Swift Code / BIC /IFSC</label>
                <br>
                <input type="text" class="form-control" id="4f" placeholder="">
                <label for="4h">IBAN</label>
                <br>
                <input type="text" class="form-control" id="4h" placeholder="">
                <br>
                <label for="4h">ABA(Routing) No</label>
                <br>
                <input type="text" class="form-control" id="4j" placeholder="">
                <label for="4h">Account Type</label>
                <br>
                <input type="text" class="form-control" id="4k" placeholder="">
                <label for="4h">Other than above information</label>
                <br>
                <input type="text" class="form-control" id="4l" placeholder="">
            </div>
            <hr>
            <!--
            <div class="card text-center " style="border: 1px solid rgba(0, 0, 0, .125); height: 100px;">
                <label for="5a">Presentation of thesis in terms of Language, Grammar, Captions of Tables & Figures, Use of Symbols etc?</label>
                <input type="text" class="form-control" id="5a" placeholder="">
            </div>
            <hr>
            <fieldset class="card text-center " style="border: 1px solid rgba(0, 0, 0, .125); ">
              <legend >Specific Recommendations (Please check one option)</legend>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">The thesis is satisfactory and recommended for the award of the PhD degree</option>
                    <option value="2">The thesis is recommended for award of Ph.D. degree subject to answering the queries specifically mentioned in the report at the time of viva-voce by the candidate </option>
                    <option value="3">The thesis is recommended for award of Ph.D. degree subject to revision of thesis as per suggestion made in the report to satisfaction of guide and Viva-Voce board</option>
                    <option value="4">The candidate is required to revise the thesis as per suggestions made and the revised thesis be sent to me for re-evaluation along with statement of corrections incorporated in the thesis</option>
                    <option value="5">The thesis is not acceptable for award of Ph.D. degree. Reasons are attached with this.</option>
                  </select>
                 <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    The thesis is satisfactory and recommended for the award of the PhD degree
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    The thesis is recommended for award of Ph.D. degree subject to answering the queries specifically mentioned in the report at the time of viva-voce by the candidate 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                  <label class="form-check-label" for="gridRadios3">
                    The thesis is recommended for award of Ph.D. degree subject to revision of thesis as per suggestion made in the report to satisfaction of guide and Viva-Voce board
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                  <label class="form-check-label" for="gridRadios3">
                    The candidate is required to revise the thesis as per suggestions made and the revised thesis be sent to me for re-evaluation along with statement of corrections incorporated in the thesis
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" >
                  <label class="form-check-label" for="gridRadios3">
                    The thesis is not acceptable for award of Ph.D. degree. Reasons are attached with this.
                  </label>
                </div>
              </div> -->
  
          </fieldset>
            <input id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" style="width: 100px; margin: auto;">
          <br>

        <!-- </form>


        <h4>Please upload extra feedback, if any</h4>
        <form action="evaluation_form" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <br>
            <button class="btn btn-primary" type="submit" name="submit"> Upload</button>
        </form> -->

   </div>
    <?php

	include_once('footer.php');
?>
