 <div class="row">
           <div class="col-md-12">
                        <a href="index.php?p=doctorPage"><button type="submit" class="btn btn-default btn-md" >Rudi Nyuma</button></a>
                        <button class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-print">
                                <a href="javascript:window.print()">Print Page</a>
                        </span>
                        </button>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h4 align="center">RUDISHA MAJIBU KWA MGONJWA</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                 <div class="regbody">
                                     <!--PREASKED QUESTION TO BE FILLED BY PATIENT FOR EACH CLINIC-->

                                        <form name="drfeedbk" method="POST" action="index.php?p=drfeedback" enctype="multipart/form-data" onsubmit="return process();">
                                            <div class="row">
                                                <div class="col-md-4">
                                                 <fieldset>
                                                      <legend>Jina la Mgonjwa:</legend>
                                                            <div class="form-group">
                                                                <input type="text" name="pname" class="form-control" />
                                                            </div>
                                                   </fieldset>
                                                 </div>
                                                <div class="col-md-12">
                                                 <fieldset>
                                                      <legend>Je atakuwa anasumbuliwa na nini:</legend>

                                                            <div class="form-group">
                                                                <textarea name="whatisprob" class="form-control" rows="4"></textarea>
                                                            </div>
                                                   </fieldset>
                                                 </div>

                                                <div class="col-md-12">
                                                 <fieldset>
                                                      <legend>Taarifa ya kwenda Maabara kupima:</legend>

                                                            <div class="form-group">
                                                                <textarea name="labreq" class="form-control" rows="4"></textarea>
                                                            </div>
                                                   </fieldset>
                                                 </div>

                                                <div class="col-md-12">
                                                 <fieldset>
                                                      <legend>Dawa gani atumie:</legend>

                                                            <div class="form-group">
                                                                <textarea name="medtouse" class="form-control" rows="4"></textarea>
                                                            </div>
                                                   </fieldset>
                                                 </div>

                                                <div class="col-md-12">
                                                 <fieldset>
                                                      <legend>Je kuna uhitaji wa kuja Hospitali:</legend>

                                                            <div class="form-group">
                                                                <textarea name="appointment" class="form-control" ></textarea>
                                                            </div>
                                                   </fieldset>
                                                 </div>
                                                <div class="col-md-4">
                                                 <fieldset>
                                                      <legend>Tarehe ya Kuja Hospitali:</legend>

                                                            <div class="form-group">
                                                                <input type="date" name="when" class="form-control" >
                                                            </div>
                                                   </fieldset>
                                                 </div>

                                                  <div class="col-md-10">
                                                        <div class="form-group">
                                                        <button type="submit" name="submit" class="btn btn-success btn-md">Wasilisha</button>
                                                        </div>
                                                  </div>
                                             </div>
                                            </form>
                                        <!--END PREASKED QUESTION TO BE FILLED BY PATIENT FOR EACH CLINIC-->
                                        </div>
                                </div>
                </div>
            </div>

</div> 