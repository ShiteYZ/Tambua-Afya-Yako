<!--REGISTER PAGE-->                
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12">
                            <h4 align="center">FOMU YA USAJILI</h4>
                             </div>
                        </div>
                    </div>
				<div class="regbody">
				<div class="panel-body">
					<form name="sform" method="POST" action="index.php?p=pregistration" onsubmit="return validate()" enctype="multipart/form-data" onsubmit="return process();">
						<div class="row">	
							 <div class="col-md-4">
								<div class="form-group">
								<label>Jina la Kwanza</label>
								<input type="text" name="fname" class="form-control" placeholder="Andika Jina la Kwanza" required>
								</div>
				            </div>
								
				            <div class="col-md-4">
								<div class="form-group">
								<label>Jina la Kati</label>
								<input type="text" name="mname" class="form-control" placeholder="Andika Jina la Kati">
								</div>
				            </div>
								
				            <div class="col-md-4">
								<div class="form-group">
								<label>Jina la Mwisho</label>
								<input type="text" name="lname" class="form-control" placeholder="Andika jina la Mwisho" required>
								</div>
				            </div>
				            <div class="col-md-4">
								<div class="form-group">
								<label>Jinsia</label>
								<input type="radio" name="gender" value="male" required>Kiume
                                <br /><input type="radio" name="gender" value="female" required>Kike
								</div>
							 </div>
								
							 <div class="col-md-4">
								<div class="form-group">
								<label>Umri</label>
								<input type="number" name="age" class="form-control" placeholder="Andika Miaka yako" required>
								</div>
				             </div>
							 <div class="col-md-4">
								<div class="form-group">
								<label>Kazi yako</label>
								<input type="text" name="occupation" class="form-control" placeholder="Unafanya kazi gani" required>
								</div>
                              </div>
                             <div class="col-md-4">
								<div class="form-group">
								<label>Mahali unapoishi</label>
								<input type="text" name="location" class="form-control" placeholder="Jaza mahali unapoishi" required>
								</div>
                              </div>
							  <div class="col-md-4">
								<div class="form-group">
								<label>Namba ya Simu</label>
								<input type="text" name="contact" class="form-control" placeholder="Andika namba ya Simu" required>
								</div>
							  </div>
								
							  <div class="col-md-4"> 
								<div class="form-group">
								<label>Jina la Mtumiaji</label>
								<input type="text" name="username" class="form-control" placeholder="Jina utakalotumia kuingia" required>
								</div>
							  </div>
                              <div class="col-md-4"> 
								<div class="form-group">
								<label>Barua Pepe</label>
								<input type="text" name="email" class="form-control" placeholder="Andika Barua Pepe" required>
								</div>
							  </div>
                              <div class="col-md-4"> 
								<div class="form-group">
								<label>Weka picha</label>
								<input type="file" name="image" class="form-control" />
								</div>
							  </div>
                              <div class="col-md-4"> 
								<div class="form-group">
								<label>Nenosiri</label>
								<input type="password" name="password" class="form-control" placeholder="Andika nenosiri" required>
								</div>
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
            </div>
         </div>
        </div>
        </div>
    </div>
</div> 
            
 <!--END REGISTER PAGE-->