<div id='_content'>
<div class="row-fluid">
				<div class="span12 well">
					<div class="tabbable"> 
						<ul class="nav nav-tabs">
							<li class="active"><a href="#files" data-toggle="tab">Fichiers</a></li>
							<li><a href="#edit" data-toggle="tab">Edition</a></li>
							<li><a href="#tools" data-toggle="tab">Outils</a></li>
							<li class="pull-right"><div class="btn-group "><button class="btn btn-primary" type="button"><i class='icon-hdd'></i> Sauvegarder tout</button><button class="btn btn-primary" type="button"><i class='icon-refresh'></i> Actualiser</button> </div></li>
						</ul>
						<div class="tab-content">
							
							<div class="tab-pane active" id="files">
								<div class="row-fluid">
									<div class="span3 ">
										<div class="btn-group">
											<button class="btn" id="createnewdoc" onclick="createdoc('<?php echo site_url('ajax/budgetmanager_ajax/newdoc'); ?>')"><i class='icon-file'></i> Nouveau</button>
											<button class="btn" data-target="#uploadsavefile" data-toggle="modal"><i class='icon-folder-open'></i> Ouvrir un fichier</button>
											<button class="btn" data-target="#downloadsavefile" data-toggle="modal"><i class='icon-download-alt'></i> Télécharger la sauvegarde</button>
										</div>
									</div>
									<!-- Tools Bar 2-->
									<div class="span3">
										
									</div>
								</div>
							</div>
							
							
							<div class="tab-pane" id="edit">
								<div class="row-fluid">
									<div class="span3">
										<button data-target="#paramfiles" class="btn btn-primary" data-toggle="modal"><i class='icon-tasks'></i> Paramètres du fichier</button>
										<button class="btn btn-primary" data-target="#dotations" data-toggle="modal" ><i class='icon-list'></i> Dotations</button>
									</div>
								</div>  
								
							</div>
							<div class="tab-pane" id="tools">
								<div class="row-fluid">
									<div class="span12 form-inline well-small">
										
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"> </i>  Id / N°</span>
											<input class=" input-medium" id="id" type="text">
										</div>
										
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"> </i>  Date Cmd </span>
											<input class=" input-medium" id="datecmd" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i> Objet</span>
											<input class=" input-medium" id="objet" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Fournisseur</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend input-append">
											<span class="add-on"><i class="icon-tag"></i>  Montant TTC</span>
											<input class=" input-medium" id="inputIcon" type="text">
											<span class="add-on">€</span>
										</div>		
										
										
									</div>
								</div>
								<div class="row-fluid">
									<div class="span12 form-inline well-small">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Groupe</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Année Cmd</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Type</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Codification</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Date SF</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
									</div>
									
								</div>
								<div class="row-fluid">
									<div class="span12 form-inline well-small">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Num Engagt</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Marché</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Num Facture</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Date Facture</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
										<div class="input-prepend">
											<span class="add-on"><i class="icon-tag"></i>  Observations</span>
											<input class=" input-medium" id="inputIcon" type="text">
										</div>
									</div>
									
								</div>
								<div class="row-fluid">
									<div class="span12 well-small">
										<button class="btn btn-primary span4"><i class='icon-ok'> </i> Ajouter</button>
										<button class="btn btn-warning span4"><i class='icon-edit'> </i> Editer</button>
										<button class="btn btn-danger span4"><i class='icon-trash'> </i> Supprimer</button>
									</div>
								</div>
								
								
								
							</div>
							
						</div>
					</div>
				</div>
			</div>