        <div class="modal hide fade bigmodal" id="downloadsavefile" role="dialog">
			
  			<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal">&times;</button>
    			<h3>Téléchargement du fichier</h3>
			</div>
  			<div class="modal-body">
    			<p>
					<div class="row-fluid">
                		<div class="control-group">
							<!-- <label class="control-label" for="inputIcon">Titre du document</label> !-->
							<div class="controls">
							<?php if(isset($alert_modal_param)){	echo $alert_modal_param;  } ?>
								<div class="span12 well">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-tag"></i> Nom du ficher</span>
										<input class=" input-large" id="namesave" type="text" value="<?php if(isset($param['titlefile'])){	echo $param['titlefile'];  } ?>">
									</div>
									<div class="btn-group">
											<button class="btn" onclick="$('#namesave').val($('#namesave').val() + $('#docname').val());"> Utiliser le titre du document</button>
											<button class="btn" onclick="$('#namesave').val($('#namesave').val() + now().getFullYear());"> Ajouter l'année</button>
											<button class="btn"  onclick="$('#namesave').val($('#namesave').val() +  $('#anneemanagement').val());"> Ajouter l'année de gestion</button>
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
					<a href="#" class="btn btn-primary" onclick="downloadfile('<?php echo site_url('ajax/budgetmanager_ajax/generate_save'); ?>')">Générer le fichier</a>
				</div>
				
			</div>