<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kitchen recipes</title>

    
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-10" style="padding: 3rem;">
            <h1>Kitchen recipes </h1>
        </div>
    </div>
	
	<div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add </button>
            </div>
        </div>
    </div>
	
	<div class="row">
        <div class="col-md-12">
            <h3>Users:</h3>

            <div class="records_content"></div>
        </div>
    </div>

</div>

<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add </h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" id="first_name" placeholder="Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Country </label>
                    <input type="text" id="last_name" placeholder="Country" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add </button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
	
		
	
