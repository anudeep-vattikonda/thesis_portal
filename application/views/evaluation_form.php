<?php

	include_once('header.php');
?>
   <?php
    $conn = mysqli_connect('localhost','root','','thesis_trail');
    if(isset($_POST['upload'])){
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
    ?>

   <!--  evaluation form goes here -->
   <div class="col-sm-10">
       <form  action="<?php echo base_url().'index.php/thesis_portal/evaluation_form';?>" method="post" name="eval_form" id="eval_form">
   
            <h3 class="text-gray-900 mb-4 text-center"><strong>Please fill the Evaluation Form (Only One submission allowed)</strong></h3>
            <br>

            <div class="card container" style="border: 1px solid rgba(0, 0, 0, .125); height: 350px;">
                <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Originality and Novelty of the Thesis</div>
                <hr>
                <label for="3a" class="my-1 mr-2">Does it open a new field of research?</label>
                <!-- <br> -->
                <select class="custom-select my-1 mr-sm-2" style="float: left;" id="3a">
                  <option selected>Choose...</option>
                  <option value="1">Yes</option>
                  <option value="2">No</option>
                </select>
                <br>
                <label for="3b">Does it give new interpreation to facts already known?</label>
                <br>
                <input type="text" class="form-control" id="3b" placeholder="Please fill Yes/No">
                <br>
                <label for="3c">Does it make a marked advance on the results of previous investigations?</label>
                <br>
                <input type="text" class="form-control" id="3c" placeholder="Please fill Yes/No">
                <br>
                <label for="3d">Does the thesis show evidence of being a scholarly work of merit carried out independently by the candidate?</label>
                <br>
                <input type="text" class="form-control" id="3d" placeholder="Please fill Yes/No">
            </div>
            <br>
            <br>
            <hr>
            <div class="card text-center container" style="border: 1px solid rgba(0, 0, 0, .125); height: 700px; ">
                <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">General Features of the Thesis</div>
                <hr>
                <label for="4a">Is the thesis logically organised?</label>
                <br>
                <input type="text" class="form-control" id="4a" placeholder="Please fill Yes/No">
                <label for="4b">Do the introduction and literature survey logically lead to the thesis objectives?</label>
                <br>
                <input type="text" class="form-control" id="4b" placeholder="Please fill Yes/No">
                <label for="4c">Does the literature survey comprehensively represent the state-of-the-art?</label>
                <br>
                <input type="text" class="form-control" id="4c" placeholder="Please fill Yes/No">
                <label for="4d">Are the experimental/field survey and/or numerical/theoretical methodologies adequate with respect to thesis objectives?</label>
                <br>
                <input type="text" class="form-control" id="4d" placeholder="Please fill Yes/No">
                <label for="4e">Have the results been analyzed in sufficient detail?</label>
                <br>
                <input type="text" class="form-control" id="4e" placeholder="Please fill Yes/No">
                <label for="4f">Do the results and analysis justify the conclusions?</label>
                <br>
                <input type="text" class="form-control" id="4f" placeholder="Please fill Yes/No">
                <hr>
                <label for="4g">Strong Point of the Thesis?</label>
                <br>
                <textarea type="text" class="form-control" id="4g" placeholder="" rows="3"></textarea> 
                <label for="4h">Weak Point of the Thesis?</label>
                <br>
                <textarea type="text" class="form-control" id="4h" placeholder="" rows="3"></textarea> 
            </div>
            <hr>
            <div class="card text-center container " style="border: 1px solid rgba(0, 0, 0, .125); height: 150px;">
                <label for="5a">Presentation of thesis in terms of Language, Grammar, Captions of Tables & Figures, Use of Symbols etc?</label>
                <textarea type="text" class="form-control" id="5a" placeholder="" rows="3"></textarea>
            </div>
            <hr>
            <div class="card text-center container" style="border: 1px solid rgba(0, 0, 0, .125); ">
              <div class="card-header" style="font-family: 'Source Sans Pro', sans-serif; font-size: 30px; background: rgba(0,0,0,.08)">Specific Recommendations (Select One Option) </div>
              <hr>
              <div class="container" align="left">
                  <h4>1.<strong>The thesis is satisfactory and recommended for the award of the PhD degree</strong></h4>
                  <h4>2.<strong>The thesis is recommended for award of Ph.D. degree subject to answering the queries specifically mentioned in the report at the time of viva-voce by the candidate</strong></h4>
                  <h4>3.<strong>The thesis is recommended for award of Ph.D. degree subject to revision of thesis as per suggestion made in the report to satisfaction of guide and Viva-Voce board</strong></h4>
                  <h4>4.<strong>The candidate is required to revise the thesis as per suggestions made and the revised thesis be sent to me for re-evaluation along with statement of corrections incorporated in the thesis</strong></h4>
                  <h4>5.<strong>The thesis is not acceptable for award of Ph.D. degree. Reasons are attached with this</strong></h4>
                  <br>
                  <input type="text" class="form-control" id="recommendation" placeholder="Please select an Option">
                  <br>
              </div><!-- 
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select> -->
                <!-- <div class="form-check">
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
                </div> -->
              <!-- </div> -->
              <br>
          </div>
          <br>

          <input id="submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" style="width:100px; margin: auto;">
        </form>

        <div class="container">
            <h4>Please upload extra feedback, if any</h4>
            <form action="evaluation_form" method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <br>
                <button class="btn btn-primary" type="submit" name="upload" style="width: 100px;"> Upload</button>
            </form>
        </div>
        <br>
        <br>

   </div>
    <?php

	include_once('footer.php');
?>
