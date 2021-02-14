<!Doctype html>
<html>
    <head>
    <title>New Form</title>       
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Submit Form</h2>
        
                <form class="form-horizontal" role="form" method="postss" action="form_process.php">
                <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-5">
                        <input type="text" id="name" class="form-control" placeholder="Full Name" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Email</label>
                    <div class="col-sm-5">
                        <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject" class="control-label col-sm-2">Subject</label>
                    <div class="col-sm-5">
                        <input type="text" id="subject" class="form-control" placeholder="Subject" name="subject" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="control-label col-sm-2">Gender</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="gender" required name="gender">
                            <option value="">Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>                    
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="control-label col-sm-2">Skills</label>
                    <div class="col-sm-5">
                        <lable class="checkbox-inline"><input type="checkbox" name="skill1">HTML</lable>
                        <lable class="checkbox-inline"><input type="checkbox" name="skill2">CSS</lable>
                        <lable class="checkbox-inline"><input type="checkbox" name="skill3">PHP</lable>
                        <lable class="checkbox-inline"><input type="checkbox" name="skill4">Javascript</lable>
                    </div>
                </div>

                <div class="form-group">
                    <label for="countries" class="control-label col-sm-2">Country</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="countries" name="country" required>
                            <option value="">Select your country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>                                    
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="comments" class="control-label col-sm-2">Comments</label>
                    <div class="col-sm-5">
                        <textarea class="form-control my-fixed" name="comments" rows="8" name="comments" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-5 col-sm-offset-2 ">
                        <input type="submit" class="btn btn-default btn-block" name="submit_form" value="submit form">
                    </div>
                </div>
                
                </form>
            </div>
        </div>

    <script src="bootstrap/js/jquery.js"></script>    
    <script src="bootstrap/js/bootstrap.js"></script>
    <body>
</html> 