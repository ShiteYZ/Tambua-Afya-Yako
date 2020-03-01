
                            <div class="row">
                                   <div class="col-md-12">                                      
                                              <form name="cform" method="POST" action="index.php?p=patientconsultation" enctype="multipart/form-data" onsubmit="return process();">
                                                      <div class="row">
                                                          <div class="col-md-6">
                                                              <fieldset>
                                                                  <legend>Chagua kliniki:</legend>
                                                                      <div class="form-group">
                                                                          <select class="form-control" value="clinic" name="clinic" id="clinic" onchange="loadDoctors()">
                                                                            <option value="">:Chagua Kliniki:</option>
                                                                            <option value="pediatric">watoto</option>
                                                                            <option value="heart">moyo</option>
                                                                            <option value="orthopedic">mifupa</option>
                                                                          </select>
                                                                        </div>
                                                               </fieldset>
                                                          </div>
                                                         </div>
                                                          <div class="row">
                                                          <div class="col-md-6">
                                                              <fieldset>
                                                                  <legend>Chagua dakitari:</legend>
                                                                      <div class="form-group">
                                                                           <div id="seldoctor">
                                                                                <select class="form-control" name="seldr" id="seldr">
                                                                                    <option value="">:Chagua Dakitari:</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                               </fieldset>
                                                          </div>

                                                        </div>
                                                
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <div class="row">
                                                            <div class="col-md-11">
                                                                <h4 align="center">ELEZA JINSI UNAVYOJISIKIA KWA UNDANI</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                         <div class="regbody">
                                                             <!--PREASKED QUESTION TO BE FILLED BY PATIENT FOR EACH CLINIC-->

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Unajisikiaje:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="howfeel" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                        
                                                                        <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Umeanza lini:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="date" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                        <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>je ni tatizo jipya au lilishatokea:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="neworold" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                        <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Umetumia dawa gani:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="prevmedication" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                         <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Je? Dawa ilileta matokeo gani:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="medresult" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                         <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Je? Una ugonjwa wowote wa kurithi:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="inheritagedisease" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                         <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Je? Una Alergy yoyote unayoifahamu:</legend>
                                                                                  
                                                                                    <div class="form-group">
                                                                                        <textarea name="alergy" class="form-control" rows="4"></textarea>
                                                                                    </div>
                                                                           </fieldset>
                                                                         </div>
                                                                         <div class="col-md-12">
                                                                         <fieldset>
                                                                              <legend>Vital Sign:</legend>
                                                                              <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                      <label>Jotoridi la Mwili</label>
                                                                                      <select class="form-control" name="temp" id="seltemp">
                                                                                        <option value="Lipo juu">Lipo juu</option>
                                                                                        <option value="Lipo kati">Lipo kati</option>
                                                                                        <option value="Lipo chini">Lipo chini</option>
                                                                                      </select>
                                                                                  </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                      <label>Mapigo ya Moyo</label>
                                                                                      <select class="form-control" name="pulse" id="selpulse">
                                                                                        <option value="Yapo juu">Yapo juu</option>
                                                                                        <option value="Yapo kati">Yapo kati</option>
                                                                                        <option value="Yapo chini">Yapo chini</option>
                                                                                      </select>
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                           </fieldset>
                                                                         </div>

                                                                          <div class="col-md-10">
                                                                                <div class="form-group">
                                                                                <button type="submit" name="submit" class="btn btn-success btn-md">Wasilisha</button>
                                                                                </div>
                                                                        </div>
                                                                          <div class="col-md-2 pull-right">
                                                                                <div class="form-group">
                                                                                <button type="reset" name="reset" class="btn btn-danger btn-md">Rekebisha</button>
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
            