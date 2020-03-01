<?php
    // AJAX TO PROCESS DOCTOR SELECTIONS
    if(isset($_GET["colid"])){
		$colid = @$_GET["colid"];
		if($colid == "pediatric"){
		   ?><select class="form-control" name="seldr" id="seldr">
					<option value="yusuph">YUSUPH SHITENGE</option>
					<option value="danny">DANIEL PALLANGYO</option>
                </select>
            <?php
		}
        elseif($colid == "heart"){
			?><select class="form-control" name="seldr" id="seldr">
					<option value="salome">SALOME NKONOKI</option>
					<option value="josiah">JOSIAH DAUDI</option>
                </select>
            <?php
        }elseif($colid == "orthopedic"){
			?><select class="form-control" name="seldr" id="seldr">
					<option value="happy">HAPPY MSAFIRI</option>
					<option value="kipala">MANDEKO KIPALA</option>
                </select>
            <?php
		}
    }
        else{
			?><select class="form-control" name="seldr" id="seldr">
                        <option>:Chagua Dakitari2:</option>
                  </select>
            <?php
		}
    
    // END OF AJAX PROCESSING
?>