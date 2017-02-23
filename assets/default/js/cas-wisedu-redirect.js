function countDown(secs,surl){   
 //alert(surl);   
 	tiao.innerText=secs;   
 	if(--secs>0){   
     	setTimeout("countDown("+secs+",'"+surl+"')",1000);   
    }   
 	else{
     	location.href=surl;   
    }    
}  