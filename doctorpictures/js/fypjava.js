var req;
function initRequest(){
	if(window.XMLHttpRequest){
		req= new XMLHttpRequest();
	}else if(window.ActiveXObject){
		req= new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function requestStatus(){
	if(req.readyState==4){
		if(req.status==200){
			document.getElementById("seldoctor").innerHTML=req.responseText;
		}else{
			console.log(req.status);
		}
	}else{
		console.log(req.readyState);
	}
}
function loadDoctors(){
	initRequest();
	req.onreadystatechange=requestStatus;
	var coll=document.getElementById("clinic");
    var no = coll.options[coll.selectedIndex].value;
	var url="loadDoctors.php?colid="+no;
	req.open('GET', url, true);
	req.send(null);
	//alert(req);
}

function validate()                                    
{ 
    var phoneno = /^\d{10}$/;
    var name = document.forms["sform"]["fname"];
    var name1 = document.forms["sform"]["mname"];
    var name2 = document.forms["sform"]["lname"];
    var email = document.forms["sform"]["email"];    
    var phone = document.forms["sform"]["contact"];    
    var password = document.forms["sform"]["password"];    
   
    if (!name.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    } 
    if (!name1.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    }
    if (!name2.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value.match(phoneno))                          
    { 
        window.alert("Please enter valid telephone number.");
        phone.focus(); 
        return false; 
    } 
    if (password.value.length < 5)                        
    { 
        window.alert("ingiza password izidi tarakimu 6"); 
        password.focus(); 
        return false; 
    } 
    
   
    return true; 
}
function validate2()                                    
{ 
    var phoneno = /^\d{10}$/;
    var name = document.forms["sform2"]["fname"];
    var name1 = document.forms["sform2"]["mname"];
    var name2 = document.forms["sform2"]["lname"];
    var email = document.forms["sform2"]["email"];    
    var phone = document.forms["sform2"]["phone"];    
    var password = document.forms["sform2"]["password"];    
   
    if (!name.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    } 
    if (!name1.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    }
    if (!name2.value.match(/^[a-zA-Z]+$/))                                  
    { 
        window.alert("Only alphabets are allowed."); 
        name.focus(); 
        return false; 
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value.match(phoneno))                          
    { 
        window.alert("Please enter valid telephone number.");
        phone.focus(); 
        return false; 
    } 
    if (password.value.length < 5)                        
    { 
        window.alert("ingiza password izidi tarakimu 6"); 
        password.focus(); 
        return false; 
    } 
    
   
    return true; 
}