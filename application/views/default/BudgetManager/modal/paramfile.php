        <div class="modal hide fade bigmodal" id="paramfiles" role="dialog">
			
  			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
    			<h3>Paramètres du fichier</h3>
			</div>
  			<div class="modal-body">
    			<p>
					<div class="row-fluid">
                		<div class="control-group">
							<!-- <label class="control-label" for="inputIcon">Titre du document</label> !-->
							<div class="controls" id="_paramajax">
							<div class="span5 well">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-tag"></i>Année de gestion</span>
										<input class=" input-medium" id="anneemanagement" type="text" value="<?php if(isset($param['anneemanagement'])){	echo $param['anneemanagement'];  } ?>">
									</div>
								</div>
								<div class="span6 well">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-tag"></i>Cour d'appel </span>
										<input class=" input-medium" id="courapp" type="text" value="<?php if(isset($param['courapp'])){	echo $param['courapp'];  } ?>">
									</div>
                                    <div class="input-prepend">
										<span class="add-on"><i class="icon-tag"></i>Juridiction </span>
										<input class=" input-medium" id="juridiction" type="text" value="<?php if(isset($param['juridiction'])){	echo $param['juridiction'];  } ?>">
									</div>
                                    <div class="input-prepend">
										<span class="add-on"><i class=" icon-envelope"></i>Adresse </span>
										<input class=" input-large" id="adresse" type="text" value="<?php if(isset($param['adresse'])){	echo $param['adresse'];  } ?>">
									</div>
									<div class="input-prepend">
										<span class="add-on"><i class=" icon-envelope"></i>Code postal </span>
										<input class=" input-large" id="codeposte" type="text" value="<?php if(isset($param['codeposte'])){	echo $param['codeposte'];  } ?>">
									</div>
									<div class="input-prepend">
										<span class="add-on"><i class="icon-envelope"></i>Ville </span>
										<input class=" input-large" id="ville" type="text" value="<?php if(isset($param['ville'])){	echo $param['ville'];  } ?>">
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
					<p></p>
				</div>
				<div class="modal-footer">
					<a href="#" data-dismiss="modal" class="btn">Fermer</a>
					<a href="#" class="btn btn-primary" onclick="majparam('<?php echo site_url('ajax/budgetmanager_ajax/majparam') . ' #_paramajax'; ?>')">Sauvegarder</a>
				</div>
				
			</div>