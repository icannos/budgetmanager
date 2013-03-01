<div class="modal hide fade" id="uploadsavefile" role="dialog">
	
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h3>Ouvrir un fichier</h3>
	</div>
	<div class="modal-body">
		<p>
			<div class="row-fluid">
				<div class="control-group">
					<!-- <label class="control-label" for="inputIcon">Titre du document</label> !-->
					<div class="controls">
						<?php if(isset($alert_modal_param)){	echo $alert_modal_param;  } ?>
						<div class="span12 well">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-append">
									<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Sélectionner un fichier</span><span class="fileupload-exists">Changer</span><input type="file" id="inputfile_save"/></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Supprimer</a>
								</div>
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
			<p></p>
		</div>
		<div class="modal-footer">
			<div id="_download_ajax" class="pull-left"></div>
			<a href="#" data-dismiss="modal" class="btn">Fermer</a>
			<a href="#" class="btn btn-primary" onclick="readfilesave('<?php echo site_url('ajax/budgetmanager_ajax/uploadsave'); ?>');">Charger ce fichier</a>
		</div>
		
	</div>	