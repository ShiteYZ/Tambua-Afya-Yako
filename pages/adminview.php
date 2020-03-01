<!--ADMIN PAGE DASHBOARD-->
<div class="row">
  <div class="col-md-12">
      <nav class="navbar navbar-default">
      <ul class="pager">
          <li><a href="index.php?p=adminPage">Weka Taarifa</a></li>
          <li><a href="index.php?p=adminpdf">Weka PDF za magonjwa</a></li>
          <li><a href="index.php?p=adminreg">Sajili Dakitari/Mshauri</a></li>
      </ul>
      </nav>
  </div>
  <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                    <button class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-print">
                                <a href="javascript:window.print()">Print Page</a>
                        </span>
                    </button>
                </div>
                <div class="col-md-3">
                <div class="search">
                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
                    <input type="text" name="search" placeholder="andika jina la mwisho" />
                </div>
                </div>
              </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h4 align="center">ORODHA YA MADAKITARI</h4>
                                    </div>
                                </div>
                            </div>
                     <div class="regbody">
                            <div class="panel-body">
                                 <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>JINA KAMILI</th>
                                        <th>JINSIA</th>
                                        <th>UMRI</th>
                                        <th>MAKAZI</th>
                                        <th>TAALUMA</th>
                                        <th>BARUA PEPE</th>
                                    </thead>
                                    <?php
                                    $sql="select * from doctor";
                                    $result=mysqli_query($connect, $sql);
                                    ?>
                                    <?php
                                    while($data=mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                     <tbody>
                                        <tr>
                                            <td><?php print $data["did"]; ?></td>
                                            <td><?php print $data["fname"]." ".$data["mname"]." ".$data["lname"]; ?></td>
                                            <td><?php print $data["gender"]; ?></td>
                                            <td><?php print $data["age"]; ?></td>
                                            <td><?php print $data["location"]; ?></td>
                                            <td><?php print $data["specialization"]; ?></td>
                                            <td><?php print $data["email"]; ?></td>
                                            <td><button type="button" class="btn btn-success">Rekebisha</button></td>
                                            <td><button type="button" class="btn btn-danger">Ondoa</button></td>
                                         </tr>
                                     </tbody>
                                     <?php
                                    }
                                    ?>
                               </table>
                     </div>
                    </div>
                    </div>
  </div>
</div>