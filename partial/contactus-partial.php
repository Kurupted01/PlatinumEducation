<div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="contactUsSession" class="form-horizontal" role="form" action="contact.php" method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Contact Us</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="contactus_firstname" class="col-md-4 control-label">First Name:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_firstname" id="contactus_firstname" value="" maxlength="20" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_surname" class="col-md-4 control-label">Surname:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_surname" id="contactus_surname" value="" maxlength="20"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_-phone" class="col-md-4 control-label">Home Telephone:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_phone" id="contactus_phone" value="" maxlength="8"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_work" class="col-md-4 control-label">Work Telephone:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_work" id="contactus_work" value="" maxlength="8"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_mob" class="col-md-4 control-label">Mobile:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="contactus_mob" id="contactus_mob" value="" maxlength="10"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_email" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="contactus_email" id="contactus_email" value="" maxlength="50"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_grade" class="col-md-4 control-label">Current school grade:</label>
                        <div class="col-md-6">
                            <select name="contactus_grade" id="contactus_grade" class="form-control">
                                <option value="Year 12">Year 12 (HSC)</option>
                                <option value="Year 11">Year 11 (Preliminary)</option>
                                <option value="Year 10">Year 10</option>
                                <option value="Year 9">Year 9</option>
                                <option value="Year 8">Year 8</option>
                                <option value="Year 7">Year 7</option>
                                <option value="Year 6">Year 6</option>
                                <option value="Year 5">Year 5</option>
                                <option value="Year 4">Year 4</option>
                                <option value="year 3">Year 3</option>
                                <option value="Year 2">Year 2</option>
                                <option value="Year 1">Year 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_tutor" class="col-md-4 control-label">Tutoring for subject(s):</label>
                        <div class="col-md-8">
                            <div id="contactus_tutor">
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Physics" name="contactus_subjCheckbox[]" id="contactus_physics"> Physics
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Chemistry" name="contactus_subjCheckbox[]" id="contactus_chemistry"> Chemistry
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Mathematics" name="contactus_subjCheckbox[]" id="contactus_maths"> Maths
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Ext 1" name="contactus_subjCheckbox[]" id="contactus_ext1"> Maths Ext 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Ext 2" name="contactus_subjCheckbox[]" id="contactus_ext2"> Maths Ext 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="English" name="contactus_subjCheckbox[]" id="contactus_english"> English
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="General Ability" id="contactus_gen" name="contactus_subjCheckbox[]"> General Ability
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Reading/Writing" id="contactus_read" name="contactus_subjCheckbox[]"> Reading/Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_type" class="col-md-4 control-label">Type of tutoring:</label>
                        <div class="col-md-6">
                            <select name="contactus_type" id="contactus_type" class="form-control">
                                <option value="Individual">Individual</option>
                                <option value="Classes">Classes</option>
                                <option value="Both individual &amp; classes">Both individual &amp; classes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_dayOfWeek" class="col-md-4 control-label">Best day(s) to call you:</label>
                        <div class="col-md-8">
                            <div id="contactus_dayOfWeek">
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Monday" name="contactus_dayOfWeekCheckbox[]" id="monday"> Mon
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Tuesday" name="contactus_dayOfWeekCheckbox[]" id="tuesday"> Tue
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Wednesday" name="contactus_dayOfWeekCheckbox[]" id="wednesday"> Wed
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Thursday" name="contactus_dayOfWeekCheckbox[]" id="thursday"> Thu
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Friday" name="contactus_dayOfWeekCheckbox[]" id="friday"> Fri
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Saturday" name="contactus_dayOfWeekCheckbox[]" id="saturday"> Sat
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Sunday" name="contactus_dayOfWeekCheckbox[]" id="sunday"> Sun
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_timeOfday" class="col-md-4 control-label">Best time to call you:</label>
                        <div class="col-md-8">
                            <div id="contactus_timeOfDay">
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Morning" name="contactus_timeOfDayCheckbox[]" id="morning"> Morning
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Afternoon" name="contactus_timeOfDayCheckbox[]" id="afternoon"> Afternoon
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Evening" name="contactus_timeOfDayCheckbox[]" id="evening"> Evening
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactus_hearAbout" class="col-md-4 control-label">How did you hear about us:</label>
                        <div class="col-md-8">
                            <div id="contactus_hearAbout">
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Newspaper" name="contactus_hearAboutCheckbox[]" id="newspaper"> Newspaper
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Yellowpages" name="contactus_hearAboutCheckbox[]" id="yellowpages"> Yellowpages
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Internet" name="contactus_hearAboutCheckbox[]" id="internet"> Internet
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="A friend" name="contactus_hearAboutCheckbox[]" id="aFriend"> A friend
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="A relative" name="contactus_hearAboutCheckbox[]" id="aRelative"> A relative
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Pamphlet" name="contactus_hearAboutCheckbox[]" id="pamphlet"> Pamphlet
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Radio" name="contactus_hearAboutCheckbox[]" id="radio"> Radio
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="Television" name="contactus_hearAboutCheckbox[]" id="television"> Television
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
