<?php //echo "<pre> EDIT "; print_r($updateuser); echo "</pre>"; die(' PREE DATA '); ?>
<div class="container">
    <br />
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <header class="card-header">
                    <h4 class="card-title mt-2" align="center">Sign up</h4>
                </header>
                <article class="card-body"> <!-- multipart/form-data('uploads/do_upload') -->
                    <form method="post" action="<?php base_url(); ?>../../welcome/updateUser" id="signup_form" enctype="multipart/form-data"> 
                    <?php //echo form_open_multipart('welcome/addUser'); ?>    
                        <input type="hidden" name="id" value="<?php echo $updateuser->id; ?>">
                        <div class="form-row">
                            <div class="col form-group">
                                <label> First name </label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="" value="<?php echo $updateuser->first_name; ?>">
                                <span id="err_fname"></span>
                            </div>
                            <div class="col form-group">
                                <label> Last name</label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="" value="<?php echo $updateuser->last_name; ?>">
                                <span id="err_lname"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <label> Age </label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="" value="<?php echo $updateuser->age; ?>">
                                <span id="err_age"></span>
                            </div>
                        </div>


                        <div class="form-row">
                            <label> Gender &nbsp; &nbsp; </label><br />
                            <div class="form-group">
                                <label class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="gender" value="male" > <!--  : 'Male' ? 'Female'  -->
                                  <span class="form-check-label"> Male </span>
                                </label>
                                <label class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="gender" value="female" >
                                  <span class="form-check-label"> Female</span>
                                </label><br />
                                <span id="err_gender"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label> Hobbies : </label>
                                
                                <input type="checkbox" name="chek[]" value="cricker" /> Cricker
                                <input type="checkbox" name="chek[]" value="reading" /> Book Reading
                                <input type="checkbox" name="chek[]" value="valley_ball" /> Valley Ball
                                <input type="checkbox" name="chek[]" value="football" /> Football
                                <span id="err_hobbies"></span>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="address" id="address" rows="3"><?php echo $updateuser->address; ?></textarea>
                            <span id="err_address"></span>
                        </div>
                        <!-- form-row.// -->
                        <!-- Select Photo -->
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="customFile">Upload Photo</label>
                                <span id="err_photo"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" name="signup" id="signup" class="btn btn-primary btn-block"> Register </button>
                        </div>
                    <!-- </form> -->
                    <?php echo form_close(); ?> 
                </article>
            </div>
        </div>

    </div>

</div>
