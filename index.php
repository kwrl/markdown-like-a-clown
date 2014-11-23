<html>
<head>
<title>kwrl</title>
<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.0/sandstone/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
</head>
<body>
<div class="modal col-md-8" id="uploader">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title">Upload files</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="wrapper">
    <div class="col-md-6 col-sm-12">
        <div id="editor"></div>
    </div>
    <div class="col-md-6 col-sm-12" id="viewer_section">
        <div class="row">
            <button class="col-md-4 compile btn btn-success">Compile</button>
            <button type="file" class="col-md-4 upload btn btn-warning">Upload</button>
            <button class="col-md-4 reset btn btn-danger">Reset</button>
        </div>
        <div class="row">
            <object class="col-md-12" type="application/pdf" id="viewer"></object>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
