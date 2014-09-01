 
//微软IE具体哪个版本的
var XMLDOM = ["MSXML4.DOMDocument", "MSXML3.DOMDocument", "MSXML2.DOMDocument", "MSXML.DOMDocument", "Microsoft.XmlDom"];
function GetMsXml()
{
	var mGetData = null;
	for(var i=0; i < XMLDOM.length; i++)
	{
		try
		{
			mGetData  = new ActiveXObject(XMLDOM[i]);
			mGetData.async = true;
			break;
		}
		catch(objException)
		{
			mGetData = null;
		}
	}
	return mGetData;
}



//定时读取数据库是根据settimeout去读取的
var xmlHttp
function showUser()
 { 
 xmlHttp=GetXmlHttpObject()
 if (xmlHttp==null)
  {
  alert ("Browser does not support HTTP Request")
  return
  } 
 var url="responsexml.php"
 xmlHttp.onreadystatechange=stateChanged 
 xmlHttp.open("GET",url,true)
 xmlHttp.send(null)
 setTimeout("showUser()",4000);

 }

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
 {
  xmlDoc=xmlHttp.responseXML;

//以下两者方法均可。
  /*  InputVoltage.innerHTML = xmlDoc.documentElement.firstChild.innerHTML;
   InputVoltage.innerHTML = xmlDoc.documentElement.childNodes[0].innerHTML; */
   
   InputVoltage.textContent = xmlDoc.documentElement.children[3].innerHTML;
   OutputVoltage.innerHTML = xmlDoc.documentElement.children[7].innerHTML;
 }
}

function GetXmlHttpObject()
 { 
 var objXMLHttp=null
 if (window.XMLHttpRequest)
  {
  objXMLHttp=new XMLHttpRequest()
  }
 else if (window.ActiveXObject)
  {
  objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
  }
 return objXMLHttp
 }