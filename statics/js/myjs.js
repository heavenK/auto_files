function qiehuan(cname,sr,index,num){
	for(var i=1; i<=num;i++){
		if(i == index){
			var id = document.getElementById(sr+index);
			id.className = cname+'1';
			var id_2 = document.getElementById(sr+index+'_'+index);
			id_2.style.display="";
		}else{
			var id = document.getElementById(sr+i);
			id.className = cname+'2';
			var id_2 = document.getElementById(sr+i+'_'+i);
			id_2.style.display="none";
		}
	}
}

function ctcqh(cname,sr,index){
	if(1==index){
			document.getElementById('ctc').className='ct1_qie';
		}else{
			document.getElementById('ctc').className='ct1_qie2';
		}
	for(var i=1; i<=2;i++){
		if(i == index){
			var id = document.getElementById(sr+index);
			id.className = cname+'1';
			var id_2 = document.getElementById(sr+index+'_'+index);
			id_2.style.display="";
		}else{
			var id = document.getElementById(sr+i);
			id.className = cname+'2';
			var id_2 = document.getElementById(sr+i+'_'+i);
			id_2.style.display="none";
		}
		
	}
}