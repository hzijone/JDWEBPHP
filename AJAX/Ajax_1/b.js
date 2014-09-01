

function getValueIE(xmlHttp) 
	{ 
	 if (xmlHttp.readyState==4  && xmlHttp.status==200)
				 {
					  
					xmlDoc=xmlHttp.responseXML; 
					nodes=xmlDoc.documentElement.childNodes;
					InputVoltage.innerHTML = nodes.item(13).text;
				 }
		  
		
	} 
	
	
	
function getValue(xmlHttp)
{
	 if (xmlHttp.readyState==4  && xmlHttp.status==200)
		 {			  
			xmlDoc=xmlHttp.responseXML; 			
		   InputVoltage.innerHTML = xmlDoc.documentElement.children[3].innerHTML;
		 }
		  
	
}