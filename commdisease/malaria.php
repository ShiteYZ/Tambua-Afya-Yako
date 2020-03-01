<!-- DISEASE PDF PAGE-->
    <div class="row">
       <div class="col-md-3">
            <br><br>
          <div class="habari">MAGONJWA YANAYOAMBUKIZWA</div>
          <div class="magonjwa">
               <ul>
            <li><a href="index.php?p=malaria">MARALIA</a></li>
            <li><a href="index.php?p=kipindupindu">KIPINDUPINDU</a></li>
            <li><a href="index.php?p=ukimwi">UKIMWI</a></li>
           </ul>
           </div>
        </div>
         <div class="col-md-9">
            <div class="mainbdy">

                <?php
                    $var = 'malaria';
                    $sql = "select * from diseasepdf where title= '".$var."'";
                    $result=mysqli_query($connect, $sql);
                    ?>
                        
                    <?php
                        while($data=mysqli_fetch_assoc($result))
                     {
                     ?>
                
                <div class="carousel">
                        <h2>UGONJWA WA MALARIA</h2>
                        <button class="accordion">DALILI</button>
                        <div class="panel" id="pnl">
                           <embed src="uploads/<?php print $data["symptoms"]; ?>" type="application/pdf" width="100%" height="500px"> 
                           </embed> 
                        </div>

                        <button class="accordion">VISABABISHI</button>
                        <div class="panel" id="pnl">
                           <embed src="uploads/<?php print $data["causes"]; ?>" type="application/pdf" width="100%" height="500px"> 
                           </embed> 
                        </div>

                        <button class="accordion">ATHARI</button>
                        <div class="panel" id="pnl">
                           <embed src="uploads/<?php print $data["effects"]; ?>" type="application/pdf" width="100%" height="500px"> 
                           </embed> 
                        </div>

                        <button class="accordion">NAMNA YA KUJIKINGA</button>
                        <div class="panel" id="pnl">
                           <embed src="uploads/<?php print $data["prevention"]; ?>" type="application/pdf" width="100%" height="500px"> 
                           </embed>  
                        </div>

                        <button class="accordion">TIBA</button>
                        <div class="panel" id="pnl">
                           <embed src="uploads/<?php print $data["treatment"]; ?>" type="application/pdf" width="100%" height="500px"> 
                           </embed>  
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
                     </div>   
                    
                     <?php
                         }
                      ?>    
                    
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
                     <div class="habari">HATUA ZA KUFUATA ILI KUPATA USHAURI WA KIAFYA</div>
                    </div>
            </div>

<!-- END HOME PAGE-->