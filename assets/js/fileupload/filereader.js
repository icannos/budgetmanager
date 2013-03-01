function readfile(InputFile, extensions)
{
	  var reader = new FileReader();
	  
		var file = InputFile.files[0];
		
		alert(file.name);
		
	   FileType = file.name.split('.');
       FileType = FileType[FileType.length - 1].toLowerCase();
	   
	   reader.onload = function() {
			
			return reader.result;
		};
        
        if(extensions.indexOf(FileType) != -1) {
            
              reader.readAsText(file);
			  alert(reader.result);
            
        }
}