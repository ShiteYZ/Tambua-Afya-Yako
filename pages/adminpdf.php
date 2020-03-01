<!--ADMIN PAGE DASHBOARD-->
<div class="row">
  <div class="col-md-3">
      <nav class="navbar navbar-default">
      <ul class="nav nav-pills nav-stacked">
          <li><a href="index.php?p=adminPage">Weka Taarifa</a></li>
          <li class="active"><a href="index.php?p=adminpdf">Weka PDF za magonjwa</a></li>
          <li><a href="index.php?p=adminreg">Sajili Dakitari/Mshauri</a></li>
          <li><a href="index.php?p=adminview">Tazama Orodha ya Madakitari</a></li>
      </ul>
      </nav>
  </div>
  <div class="col-md-9">
      <div class="panel panel-primary">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 align="center">WEKA PDF ZA MAGONJWA</h4>
                                     </div>
                                </div>
                            </div>
                        <div class="panel-body">
                            <form name="sform" method="POST" action="index.php?p=pdfupload" enctype="multipart/form-data" onsubmit="return process();">
                                <div class="row">	
                                    <div class="col-md-12">
                                        <div class="form-group">
                                          <label for="sel1">Chagua aina ya ugonjwa:</label>
                                          <select class="form-control" name="category" id="selpdf">
                                            <option value="communicable">ugonjwa unaoambukizwa</option>
                                            <option value="noncommunicable">ugonjwa usio wa wakuambukizwa</option>
                                          </select>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Jina la ugonjwa</label>
                                        <input type="text" name="title" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Kichwa cha ugonjwa</label>
                                        <input type="text" name="heading" class="form-control" required>
                                        </div>
                                    </div>
                                    

                                     <div class="col-md-12">
                                        <div class="form-group">
                                        <label>DALILI</label>
                                        <input type="file" name="symptoms" class="form-control" required>
                                        </div>
                                     </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                        <label>VISABABISHI</label>
                                        <input type="file" name="causes" class="form-control" required>
                                        </div>
                                      </div>
                                      <div class="col-md-12">
                                        <div class="form-group">
                                        <label>ATHARI</label>
                                        <input type="file" name="effects" class="form-control" required>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                        <label>KINGA</label>
                                        <input type="file" name="prevention" class="form-control" required>
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                        <label>TIBA</label>
                                        <input type="file" name="treatment" class="form-control" required>
                                        </div>
                                      </div>


                                      <div class="col-md-8">
                                            <div class="form-group">
                                            <button type="submit" name="btn-upload" class="btn btn-success btn-md">Wasilisha</button>
                                            </div>
                                      </div>

                                      <div class="col-md-2">
                                            <div class="form-group">

                                            <button type="reset" name="reset" class="btn btn-danger btn-md">Rekebisha</button>
                                            </div>
                                      </div>

                                </div>
                        </form> 
                    </div>
                    </div>
                    </div>
  </div>
</div>
                