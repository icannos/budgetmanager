			<div class="row-fluid">
				<div class="span12">
					<div class="row-fluid">
						<div class="control-group">
							<!-- <label class="control-label" for="inputIcon">Titre du document</label> !-->
							<div class="controls form-inline">
								<div class="input-prepend input-append" id="_titledoc_ajax">
									<span class="add-on"><i class="icon-tag"></i>Titre du document</span>
									<input class="span12" id="docname" type="text" value="<?php if(isset($param['title'])){	echo $param['title'];  } ?> ">
									<button class="btn btn-primary" type="button" onclick="majtitle('<?php echo site_url('ajax/budgetmanager_ajax/majtitle') . ' #_titledoc_ajax'; ?>');"><i class='icon-hdd'></i> Enregistrer</button>
								</div>
								
								</div>
						</div>
					</div>
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Date cmd</th>
								<th>Objet</th>
								<th>Fournisseur</th>
								<th>TTC</th>
								<th>Groupe</th>
								<th>Année cmd</th>
								<th>Type</th>
								<th>Codification</th>
								<th>Date SF</th>
								<th>N° Engagt</th>
								<th>Marché</th>
								<th>N° Facture</th>
								<th>Date Facture</th>
								<th>Observations</th>
								
							</tr>
						</thead>
						<tbody>


						</tbody>
					</table>
					
				</div>
				
			</div>
			
			</div> 