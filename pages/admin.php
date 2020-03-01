<!--ADMIN PAGE DASHBOARD-->
<div class="row">
  <div class="col-md-3">
      <nav class="navbar navbar-default">
      <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="index.php?p=adminPage">Weka Taarifa</a></li>
          <li><a href="index.php?p=adminpdf">Weka PDF za magonjwa</a></li>
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
                                    <h4 align="center">WEKA TAARIFA</h4>
                                     </div>
                                </div>
                            </div>
                        <div class="panel-body">
                            <form name="sform" method="POST" action="index.php?p=uploadnews" enctype="multipart/form-data" onsubmit="return process();">
                                <div class="row">	
                                     <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Kichwa cha habari</label>
                                        <input type="text" name="title" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Tarehe</label>
                                        <input type="date" name="date" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label>Habari kamili</label>
                                            <textarea name="description" class="form-control" rows="15"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>Admin ID</label>
                                        <input type="text" name="aid" class="form-control" >
                                        </div>
                                    </div>
                            
                                      <div class="col-md-8">
                                            <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-success btn-md">Wasilisha</button>
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