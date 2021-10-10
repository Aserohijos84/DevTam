<?php
session_start();
 ?>
<html>
    <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    </head>
    <body style="background-color: rgb(245, 245, 245);">
        <div style="width: 100%; height: 125px; position: relative; top: 0; left: 0%; background-color: rgb(67, 67, 126);">
            <h1 style="bottom: 0; margin-left: 15px; position: relative; font-size: xxx-large; color: white;">
              Shared with me
            </h1>
        </div>
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#upload" style="width: auto; margin: 25px; padding: 10px; font-weight: bolder;">
          + Add New File
        </button>
        <div class="card" style="width: auto; margin: 25px; padding: 10px;">
          <h5>Test name</h5>
          <button style="position:absolute; right: 10px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#configFile"><img src="gear.png"  width="20px" height="20px"></button>
          <button style="position:absolute; right: 65px;" type="button" class="btn btn-primary"><img src="download.png"  width="20px" height="20px"></button>
      </div>
        <!-- Modal -->
        <div class="modal fade" id="upload" tabindex="-1" aria-labelledby="uploadFile" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="uploadFile">Upload a file</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <form action="" method="post">
                          <label for="formFile" class="form-label">File</label>
                          <input class="form-control" type="file" id="formFile">
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Upload</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="configFile" tabindex="-1" aria-labelledby="conf" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="conf">Configure file</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <form action="" method="post">
                          <div class="form-floating mb-3">
                              <input type="text" class="form-control" id="floatingInput" placeholder="filename">
                              <label for="floatingInput">File Name</label>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save Changes</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

    </body>
</html>