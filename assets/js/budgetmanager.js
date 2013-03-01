function createdoc(url)
{
	$('#_content').load('http://www.mediaforma.com/sdz/jquery/ajax-loader.gif');
	$('#_content').load(url);
	$('input').val('');
	
	$.pnotify({
		title: 'Fichier:',
		text: 'Un nouveau fichier a été créé.',
		type: 'info'
	});
}
function majparam(url)
{
	$('#_paramajax').load('http://www.mediaforma.com/sdz/jquery/ajax-loader.gif');
	$('#_paramajax').load(url, { anneemanagement: $('#anneemanagement').val(), courapp: $('#courapp').val(), juridiction: $('#juridiction').val(), adresse: $('#adresse').val(), codeposte: $('#codeposte').val(), 
		ville: $('#ville').val()	
	});
	
	$.pnotify({
		title: 'Paramètres:',
		text: 'Les options / paramètres du fichier ont été mis àjour.',
		type: 'info'
	});
}
function majtitle(url)
{
	$('#_titledoc_ajax').load('http://www.mediaforma.com/sdz/jquery/ajax-loader.gif');
	$('#_titledoc_ajax').load(url, { docname: $('#docname').val() });
	
	$.pnotify({
		title: 'Nom du ficher:',
		text: 'Le nom du document a été mis à jour.',
		type: 'info'
	});
}
function downloadfile(url)
{
	$('#_download_ajax').load(url, { namesave: $('#namesave').val() });
	
	$.pnotify({
		title: 'Sauvegarde:',
		text: 'Le fichier de sauvegarde a été généré, vous pouvez maintenant le télécharger.',
		type: 'info'
	});
}
function now()
{
	date = new Date();
	return date;
}
function sendfile_save(data, urll)
{
	$.ajax({
		type: 'POST',
		url: urll,
		timeout: 3000,
		data:{datadoc: data},
		success: function(data) {
			if(data == 'no')
			{
				$.pnotify({
					title: 'Chargement des données:',
					text: 'Erreur, les données sont invalides, le fichier semble corrompu. ',
					type: 'error'
				});
				
			}
			else
			{	
				$('#uploadsavefile').modal('hide');
				$('#_content_ajax_budgetmanager').empty();
				$('#_content_ajax_budgetmanager').append(data);
				
				$.pnotify({
					title: 'Chargement des données:',
					text: 'Le fichier a été charger correctement ! ',
					type: 'success'
				});
				
			}
			
			
		},
		error: function() {
			$.pnotify({
				title: 'Chargement des données:',
				text: 'Erreur, veuillez ressayer. ',
				type: 'error'
			}); }
	});	
	
}
function readfilesave(url)
{
	var InputFile = document.querySelector('#inputfile_save');
	var extensions = ['bmgr'];
	
	var reader = new FileReader();
	
	var file = InputFile.files[0];
	
	FileType = file.name.split('.');
	FileType = FileType[FileType.length - 1].toLowerCase();
	
	reader.onload = function() {
		
		sendfile_save(reader.result, url);
	};
	
	if(extensions.indexOf(FileType) != -1) {
		
		reader.readAsText(file);
		
	}
	else
	{
		$.pnotify({
			title: 'Fichier:',
			text: 'Vous devez choisir un fichier de type "bmgr" (Budget Manager) ',
			type: 'error'
		});
	}
	
	
}