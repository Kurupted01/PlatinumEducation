<div class="modal fade" id="contactUsFreeModal" tabindex="-1" role="dialog" aria-labelledby="contactUsFreeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="contactFreeSession" class="form-horizontal" role="form" method="POST" action="contact_free_session.php">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Contact Us for a Free Session</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="contactus_free_firstname" class="col-md-4 control-label">First Name:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_firstname" id="contactus_free_firstname" value="" maxlength="20" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_free_surname" class="col-md-4 control-label">Surname:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_surname" id="contactus_free_surname" value="" maxlength="20"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_free_phone" class="col-md-4 control-label">Home Telephone:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_phone" id="contactus_free_phone" value="" maxlength="8"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_free_work" class="col-md-4 control-label">Work Telephone:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_work" id="contactus_free_work" value="" maxlength="8"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_free_mob" class="col-md-4 control-label">Mobile:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_mob" id="contactus_free_mob" value="" maxlength="10"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_free_email" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_free_email" id="contactus_free_email" value="" maxlength="50"/>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label for="recapcha" class="col-md-4 control-label">Enter text in the image:</label>
                        <div class="col-md-6" id="recapcha">
                            <?php
                            //require_once('recaptchalib.php');
                            //$publickey = "6LfJUfkSAAAAAESL52-2iHe-pC-S54yhme5wfqi0"; // you got this from the signup page
                            //echo recaptcha_get_html($publickey);
                            ?>
                        </div>
                    </div>-->
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
