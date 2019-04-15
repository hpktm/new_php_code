<link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap.min.js"></script>
<script src="jquery.min.js"></script>
<script src="script.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Email Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="run.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-info">To:</label><br>
                                <input type="email" name="to" id="username" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Subject:</label><br>
                                <input type="text" name="subject" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Body:</label><br>
                                <textarea name="body" id="body" required class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md float-right" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
