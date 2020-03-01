<!-- HOME PAGE-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="habari">HABARI - AFYA YA UMMA</div>
                                <!-- PRINT NEWS -->
                                <?php
                                    $sql="select title from news";
                                    $result=mysqli_query($connect, $sql);
                                ?>
                        
                                <?php
                                while($data=mysqli_fetch_assoc($result))
                                {
                                ?>
                                <br>
                                <div>
                                    <img src="img/new.gif" alt width="33" height="24" style="font-size:13.3333px;" />
                                    <span style="font-size:12pt;"><a href="index.php?p=news"><?php print $data["title"]; ?></a></span>
                                </div>
                                <br>

                                <?php
                                }
                                ?>
                    </div>
                    <div class="col-md-6">
                        <div class="mainbdy">
                            <div class="sec1">
                                <p>Magonjwa ni adui wa Afya, Afya yako Maisha yako. Pata Elimu, Jali Afya yako, na Leta Maendeleo</p>
                            </div>
                            <div class="carousel">
                                    <div id="vyuoni" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="vyuoni" data-slide-to="0" class="active"></li>
                                            <li data-target="vyuoni" data-slide-to="1"></li>
                                            <li data-target="vyuoni" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="img/maralia2.jpg" alt="" width="100%" height="">
                                            </div>
                                            <div class="item">
                                                <img src="img/headache2.jpg" alt="" width="100%" height="">
                                            </div>
                                            <div class="item">
                                                <img src="img/headache3.jpg" alt="" width="100%">
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="vyuoni" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" arial-hidden="true"></span>
                                            <span class="sr-only">previous</span>
                                        </a>
                                        <a class="right carousel-control" href="vyuoni" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" arial-hidden="true"></span>
                                            <span class="sr-only">next</span>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="habari">PATA ELIMU KUHUSU MAGONJWA</div><br />
                            <br />
                            <div class="habari">
                                <a href="index.php?p=communicabledisease">MAGONJWA YANAYOAMBUKIZWA</a>
                            </div> <br /><br /> 
                             <div class="habari">
                                <a href="index.php?p=noncommunicabledisease">MAGONJWA YASIYO YA KUAMBUKIZWA</a>
                            </div> 
                        
                    </div>
                </div>
            <hr style="border-color: blue"; /><hr />
            <div class="row">
                  <div class="col-md-12">
                      <div class="onlineconsheader">PATA USHAURI MTANDAONI</div>
                      <div class="onlineconsheader2">
                         Je ? Wataka msaada kutoka kwa wataalamu wa afya, kutana nao sasa.
                      </div>
                  </div>
                    <div class="col-md-4">
                          <div class="panel panel-primary">
                               <div class="panel-heading">
                                  <h2 align="center">INGIA</h2>
                                  <h6 align="center">Mgonjwa</h6>
                               </div>
                               <div class="logpanel">
                               <div class="panel-body">
                                  <form name="myform" method="POST" action="index.php?p=patientlogin" >
                                     <div class="form-group">
                                        <input type="text" class="form-control"  name="username" placeholder="Weka Jina" required>
                                     </div>
                                     <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Weka nenosiri" required >
                                     </div>
                                     <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg">Ingia</button>
                                        </div>
                                     </div>

                                  </form>
                               </div>
                               </div>
                            </div>                   
                    </div>
                    <div class="col-md-8">
                     <div class="habari"></div>
                  <img src="img/user.png" alt="health-life" width="100%" height="335px">
                    </div>
            </div>
<!-- END HOME PAGE-->