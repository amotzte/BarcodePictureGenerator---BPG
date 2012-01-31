var xmlHttp;

var TimoutID;

var strSessionID;

var IsChrome; // chrome requires special treatment

function GetXmlObject()
{
	try
	{  
		// Firefox, Opera 8.0+, Safari  
		xmlHttp = new XMLHttpRequest();
	}
	catch (e)
	{  
		// Internet Explorer  
		try
		{    
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{    
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");      
		}
	}

	return xmlHttp;
}

function stateChanged() 
{ 
	if (xmlHttp.readyState == 4)
	{ 	
		// Empty response means we are finished.
		if( xmlHttp.responseText == "" )
		{
			document.getElementById('txtProgress').innerHTML = "";
			clearTimeout(TimoutID);
			TimoutID = setTimeout( 'Update()', 1000); // Firefox seems to need this.
			return;
		}

		var Xml = xmlHttp.responseXML;

		var PercentComplete		= Xml.getElementsByTagName('PercentComplete')[0].firstChild.nodeValue;
		var RemainingTime		= Xml.getElementsByTagName('RemainingTime')[0].firstChild.nodeValue;
		var TransferSpeed		= Xml.getElementsByTagName('TransferSpeed')[0].firstChild.nodeValue;
		var TotalBytes			= Xml.getElementsByTagName('TotalBytes')[0].firstChild.nodeValue;
		var UploadedBytes		= Xml.getElementsByTagName('UploadedBytes')[0].firstChild.nodeValue;

		var strFormat = "<table><tr><td colspan=2><table style=\"width: 300; border: 1pt black solid\"><tr><td>" +
						"<table bgcolor=blue width=\"" + PercentComplete + "%\"><tr><td></td></tr></table>" +
						"</td></tr></table></td></tr><tr style=\"font:family: arial; font-size: 10pt;\">";

		strFormat += "<td>" +
			RemainingTime + " left (at " + 
			TransferSpeed + ")</td><td align=right>" + 
			UploadedBytes + "/" + 
			TotalBytes + "(" + 
			PercentComplete + "%) </td></tr></table>";



		document.getElementById('txtProgress').innerHTML = strFormat;
		
		// schedule next update in 1 sec.
		clearTimeout(TimoutID);
		TimoutID = setTimeout( 'Update()', 1000);		
	}
}


function OnStop() 
{ 	
	if( navigator.appName == "Microsoft Internet Explorer" )
	{
		document.execCommand('Stop');
	}
	else
	{
		window.stop();
	}

	document.getElementById('txtProgress').innerHTML = "Stopped";

	clearTimeout(TimoutID);
}


function ShowProgress( strPID )
{
	xmlHttp = GetXmlObject();
	if( xmlHttp == null )
	{
		alert( 'Your browser does not support AJAX!');
		return;
	} 
	
	xmlHttp.onreadystatechange = stateChanged;

	// Chrome and Safari require false instead of true in xmlHttp.Open
	IsChrome = navigator.userAgent.indexOf('Chrome') >= 0 || navigator.userAgent.indexOf('Safari') >= 0;

	strSessionID = strPID
	
	Update();
}


function Update()
{
	// Chrome and Safari require false instead of true in xmlHttp.Open

	xmlHttp.open('GET','progress_ajax_update.asp?pid=' + strSessionID, !IsChrome );
	xmlHttp.onreadystatechange = stateChanged;
	xmlHttp.send(null);
}