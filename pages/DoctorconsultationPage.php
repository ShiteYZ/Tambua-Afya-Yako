

    <div class="row">
                   
                <div class="col-md-4">
                        <br /><div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 align="center">MGONJWA</h4>
                                     </div>
                                </div>
                            </div>
                        <div class="panel-body">

                            <table  width="250px" >

                                <div class="well">
                                    <div class="custom">

                                        <!-- PRINT HISTORY CHAT SUMMARY- once click head it should open communication between-->
                                            <?php
                                                $did=$_SESSION["username"];
                                                $sql="select pid from consultation where did= '".$did."'";
                                                $result=mysqli_query($connect, $sql);
                                            ?>

                                            <?php
                                            while($data=mysqli_fetch_assoc($result))
                                            {
                                            ?>
                                            <br>
                                            <div>
                                                <img src="img/new.gif" alt width="33" height="24" style="font-size:13.3333px;" />
                                                <span style="font-size:12pt;"><a href="index.php?p=#"><?php print $data["pid"]; ?></a></span>
                                            </div>
                                            <br>

                                            <?php
                                            }
                                            ?>
                                    </div>


                                </div>		
				            </table>
                            
                        </div> 
                    </div>
               </div>
        
              <div class="col-md-8">
                  <?php
                    $did=$_SESSION["username"];
                    $sql="select pid from consultation where did= '".$did."'";
                    $result=mysqli_query($connect, $sql);
                    ?>
                        
                    <?php
                        while($data=mysqli_fetch_assoc($result))
                     {
                     ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h4 align="center">MALALAMIKO KUTOKA KWA MGONJWA</h4>
                                     </div>
                                </div>
                            </div>
                        <div class="panel-body">

                           
                <div class="carousel">
                        <h4><?php print $data["pid"]; ?></h4>
                        <button class="accordion">ANAJISIKIAJE</button>
                        <div class="panel" id="pnl">
                                <?php print $data["howfeel"]; ?>
                        </div>

                        <button class="accordion">TANGU LINI</button>
                        <div class="panel" id="pnl">
                            <?php print $data["date"]; ?> 
                        </div>
                        <button class="accordion">TATIZO NI JIPYA AU LILISHATOKEA</button>
                        <div class="panel" id="pnl">
                            <?php print $data["neworOld"]; ?> 
                        </div>
                        <button class="accordion">DAWA ALIYOTUMIA</button>
                        <div class="panel" id="pnl">
                           <?php print $data["previousmedication"]; ?> 
                        </div>

                        <button class="accordion">MATOKEO YA DAWA ALIYOTUMIA</button>
                        <div class="panel" id="pnl">
                           <?php print $data["medicationresult"]; ?>  
                        </div>

                        <button class="accordion">JE? ANAUGONJWA WOWOTE WA KURITHI</button>
                        <div class="panel" id="pnl">
                           <?php print $data["inheritagedisease"]; ?>
                        </div>
                    
                        <button class="accordion">JE? ANA ALERGY YOYOTE</button>
                        <div class="panel" id="pnl">
                           <?php print $data["alergy"]; ?>
                        </div>
                    
                        <button class="accordion">VITAL SIGN</button>
                        <div class="panel" id="pnl">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Joto la mwili</th>
                                    <th>Mapigo ya Moyo</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="success">
                                    <td><?php print $data["temp"]; ?></td>
                                    <td><?php print $data["pulse"]; ?></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            var acc = document.getElementsByClassName("accordion");
                            var i;
                            for (i = 0; i < acc.length; i++) {
                                acc[i].onclick = function(){
                                    this.classList.toggle("active");
                                    this.nextElementSibling.classList.toggle("show");
                                }
                            }
                        </script>
                        <a href="index.php?p=doctorfeedback"><button type="submit" class="btn btn-success btn-md" >Rudisha Majibu</button></a>
                     </div> 
                    <?php
                         }
                      ?> 
                            
                        </div> 
                    </div>
              </div>
     </div> 