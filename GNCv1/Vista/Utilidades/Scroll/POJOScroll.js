function POJOScroll(idelemento,clase){

	this.timerAnimacion="";
	this.direccionseleccionada=-1;
	this.corriendoAnimacion=false;
	this.indiceconjunto=-1;
	//this.totalhijos=0;
	//this.hijoWidth=0;
	//this.base=0;
	//this.hijosContenedorItems=new Array();
	this.itemsPorGrupo=0;
	//this.indiceTags=-1;
	this.conjuntos= "";
	this.contenedoritems="";
	//this.inicializar(idelemento);
	
	
	this.conjuntos= new Array();
	this.contenedoritems=document.getElementById(idelemento);
	this.base=this.contenedoritems.clientWidth-(this.contenedoritems.clientWidth*0.185);
	//var respuestaTagsContenedorItems=contenedoritems.getElementsByTagName('div');
	this.respuestaTagsContenedorItems=this.contenedoritems.childNodes;
	this.indiceTags=0;
	this.hijosContenedorItems=new Array();
	for(var i=0;i<this.respuestaTagsContenedorItems.length;i++){		
		if(this.respuestaTagsContenedorItems[i].className==clase){
			this.hijosContenedorItems[this.indiceTags]=this.respuestaTagsContenedorItems[i];
			this.indiceTags++;
		}
	}		
	
	this.totalhijos=this.contenedoritems.childNodes.length;

	this.hijoWidth=this.hijosContenedorItems[0].clientWidth;	
	//alert("msj: "+contenedoritems.style.content);
	this.itemsPorGrupo=(this.base/this.hijoWidth);
	if(this.itemsPorGrupo%1>0){
		this.itemsPorGrupo=(this.itemsPorGrupo-(this.itemsPorGrupo%1))+1;
	}
	
	this.totalgrupos=((this.indiceTags)/(this.itemsPorGrupo));
	
	if(this.totalgrupos%1>0){
		this.totalgrupos=(this.totalgrupos-(this.totalgrupos%1))+1;
	}
	
	var j=0;	
	var limite=this.itemsPorGrupo;
	for(var i=0;i<this.totalgrupos;i++){
		var conjunto=Array();		
		//var indicenvoconjunto=0;
		for (j2=0;j2<limite;j2++){		
				conjunto[j2]=this.hijosContenedorItems[j];				
				if(j<this.indiceTags-1){
					j++;
				}else{
					j=0;
				}
		}		
		this.conjuntos[i]=(conjunto);
	}
	
	//alert(this.conjuntos.length);
	
	this.indiceconjunto=0;
	//Ps aqui para que se acomoden los items del primer conjunto	
	
	this.aparecerNuevoConjunto();
	//var self=this;
}


POJOScroll.prototype.correr= function(direccion){	
	if(direccion==0){//Izquierda
		this.contenedoritems.setAttribute("class","animacionCorrerIzquierda");					
		this.direccionseleccionada=0;
		this.corriendoAnimacion=true;
		
		if(this.indiceconjunto==0){
			this.indiceconjunto=this.conjuntos.length-1;
		}else{
			this.indiceconjunto--;
		}		
		var selfme=this;
		this.timerAnimacion=setTimeout(function(){selfme.aparecerNuevoConjunto()},2000);		
		
	}else{//Derecha
		this.contenedoritems.setAttribute("class","animacionCorrerDerecha");							
		this.direccionseleccionada=1;
		this.corriendoAnimacion=true;		
		
		
		if(this.indiceconjunto==(this.conjuntos.length-1)){
			this.indiceconjunto=0;
		}else{
			this.indiceconjunto++;
		}	
		var selfme=this;
		this.timerAnimacion=setTimeout(function(){selfme.aparecerNuevoConjunto()},2000);		
	}
}

POJOScroll.prototype.getTimerAnimacion= function(){		
	return this.timerAnimacion;
}

POJOScroll.prototype.getContenedorItems= function(){		
	return this.contenedoritems;
}

POJOScroll.prototype.getIndiceConjunto= function(){		
	return this.indiceconjunto;
}


POJOScroll.prototype.aparecerNuevoConjunto= function(){	
	//alert("::: "+este.getTimerAnimacion()+",..."+este.getContenedorItems()+",..."+este.getIndiceConjunto());
	clearTimeout(this.timerAnimacion);
	//alert(this.contenedoritems);
	this.contenedoritems.innerHTML='';	
	for(var ii=0;ii<this.itemsPorGrupo;ii++){
		this.contenedoritems.appendChild(this.conjuntos[this.indiceconjunto][ii]);
	}	
	this.contenedoritems.setAttribute("class","animacionMostrarDesvanecido");
	this.timerAnimacion=setInterval(function(){
		window.clearInterval(this.timerAnimacion);
		this.corriendoAnimacion=false;
	},500);
}