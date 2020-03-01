
                        <a href="index.php?p=patientPage"><button type="submit" class="btn btn-default btn-md" >Rudi Nyuma</button></a>
                        <button class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-print">
                                <a href="javascript:window.print()">Print Page</a>
                        </span>
                        </button>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h4 align="center">MAJIBU YAKO</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                     <!--PREASKED QUESTION TO BE FILLED BY PATIENT FOR EACH CLINIC-->

                                        <form name="sform" method="POST" action="index.php?p=data" enctype="multipart/form-data" onsubmit="return process();">
                                                            <?php
                                                            $sql="select * from consultationfeedback";
                                                            $result=mysqli_query($connect,$sql);
                                                            ?>
                                                            <?php
                                                                 while($data=mysqli_fetch_assoc($result))
                                                                 {
                                                                     ?>
                                                                     
                                                                     <fieldset>
                                                                         <legend>Tatizo linalokusumbua ni?:</legend>
                                                                     </fieldset>
                                                                         <div class="newshome-artice-container">
                                                                             <div class="panel panel-info">
                                                                               <div class="panel-body">
                                                                                 <div class="row">
                                                                                   <div class="col-md-12">
                                                                                       <h4><strong><?php echo $data["problem"];?></strong></h4>
                                                                                     </div>
                                                                                   </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     <fieldset>
                                                                         <legend>Taarifa kwenda maabara?:</legend>
                                                                         <div class="newshome-artice-container">
                                                                             <div class="panel panel-info">
                                                                             <div class="panel-body">
                                                                                 <div class="row">
                                                                                   <div class="col-md-12">
                                                                                       <h4><strong><?php echo $data["laboratory"];?></strong></h4>
                                                                                     </div>
                                                                                   </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </fieldset>
                                                                     <fieldset>
                                                                         <legend>Tatizo kuhusu dawa ya kutumia?:</legend>
                                                                         <div class="newshome-artice-container">
                                                                             <div class="panel panel-info">
                                                                             <div class="panel-body">
                                                                                 <div class="row">
                                                                                   <div class="col-md-12">
                                                                                       <h4><strong><?php echo $data["pharmacy"];?></strong></h4>
                                                                                     </div>
                                                                                   </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </fieldset>
                                                                     <fieldset>
                                                                         <legend>Tatizo kwenda hospitali?:</legend>
                                                                         <div class="newshome-artice-container">
                                                                             <div class="panel panel-info">
                                                                             <div class="panel-body">
                                                                                 <div class="row">
                                                                                   <div class="col-md-12">
                                                                                       <h4><strong><?php echo $data["appointment"];?></strong></h4>
                                                                                     </div>
                                                                                   </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </fieldset>
                                                                     <fieldset>
                                                                         <legend>Tarehe ya kwenda hospitali?:</legend>
                                                                         <div class="newshome-artice-container">
                                                                             <div class="panel panel-info">
                                                                             <div class="panel-body">
                                                                                 <div class="row">
                                                                                   <div class="col-md-12">
                                                                                       <h4><strong><?php echo $data["appointmentdate"];?></strong></h4>
                                                                                     </div>
                                                                                   </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </fieldset>
                                                                     
                                                                    <?php
                                                                 }
                                                            ?>

                                            </form>
                                        <!--END PREASKED QUESTION TO BE FILLED BY PATIENT FOR EACH CLINIC-->
                                </div>
                </div>
