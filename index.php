<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arweave Check a Multiple URL</title>
    <script src="https://unpkg.com/arweave/bundles/web.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="background-color:#e8e8e8;">
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
    <a class="navbar-brand" href="#">ARWEAVE</a>
</nav>
<div class="container" style="background-color:white;padding-top:10px;padding-bottom:5px;">

<h1 style="text-align: center; margin: 30px;">Check a Multiple URL</h1>
<p><center>----- Copy and paste your link line by line ------</center></p>

<textarea id="input" placeholder="Max 20 url" style="width:100%;height:300px"></textarea>
<input id="go" class="btn btn-primary" type="submit" value="Add to Table" />


	
	<button class="btn btn-success" id="submitbutton">Check URL</button>
	
		
<p></p>

<table class="table table-bordered">
  <thead>
    <tr height="auto">
      <th scope="col" width="40">#</th>
      <th scope="col">URL</th>
      <th scope="col" width="150">RESULT</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td id="link1"></td>
      <td id="message"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td id="link2"></td>
      <td id="message2"></td>
    </tr>
	<tr>
      <th scope="row">3</th>
      <td id="link3"></td>
      <td id="message3"></td>
    </tr>
	<tr>
      <th scope="row">4</th>
      <td id="link4"></td>
      <td id="message4"></td>
    </tr>
	<tr>
      <th scope="row">5</th>
      <td id="link5"></td>
      <td id="message5"></td>
    </tr>
	<tr>
      <th scope="row">6</th>
      <td id="link6"></td>
      <td id="message6"></td>
    </tr>
	<tr>
      <th scope="row">7</th>
      <td id="link7"></td>
      <td id="message7"></td>
    </tr>
	<tr>
      <th scope="row">8</th>
      <td id="link8"></td>
      <td id="message8"></td>
    </tr>
	<tr>
      <th scope="row">9</th>
      <td id="link9"></td>
      <td id="message9"></td>
    </tr>
	<tr>
      <th scope="row">10</th>
      <td id="link10"></td>
      <td id="message10"></td>
    </tr>
	<tr>
      <th scope="row">11</th>
      <td id="link11"></td>
      <td id="message11"></td>
    </tr>
	<tr>
      <th scope="row">12</th>
      <td id="link12"></td>
      <td id="message12"></td>
    </tr>
	<tr>
      <th scope="row">13</th>
      <td id="link13"></td>
      <td id="message13"></td>
    </tr>
	<tr>
      <th scope="row">14</th>
      <td id="link14"></td>
      <td id="message14"></td>
    </tr>
	<tr>
      <th scope="row">15</th>
      <td id="link15"></td>
      <td id="message15"></td>
    </tr>
	<tr>
      <th scope="row">16</th>
      <td id="link16"></td>
      <td id="message16"></td>
    </tr>
	<tr>
      <th scope="row">17</th>
      <td id="link17"></td>
      <td id="message17"></td>
    </tr>
	<tr>
      <th scope="row">18</th>
      <td id="link18"></td>
      <td id="message18"></td>
    </tr>
	<tr>
      <th scope="row">19</th>
      <td id="link19"></td>
      <td id="message19"></td>
    </tr>
	<tr>
      <th scope="row">20</th>
      <td id="link20"></td>
      <td id="message20"></td>
    </tr>

  </tbody>
</table>
	
<p style="text-align:center;">Powered by Arweave - Re-created by Aliceasuna94</p>	
</div>



<script>

$("#go").click(function() {
  var lines = $("#input")
    .val()
    .split(/\n/);
  var output = [];
  var outputText = [];
  for (var i = 0; i < lines.length; i++) {
    // only push this line if it contains a non whitespace character.
    if (/\S/.test(lines[i])) {
      outputText.push('"' + $.trim(lines[i]) + '"');
      output.push($.trim(lines[i]));
    }
  }
  let [aa,bb,cc,dd,ee,ff,gg,hh,ii,jj,kk,ll,mm,nn,oo,pp,qq,rr,ss,uu] = output;
  console.log(output);
  
  //fungsirecord
  
  if(aa == null){
	  document.getElementById("link1").innerText="";
  }else{
	  document.getElementById("link1").innerText=aa.substr(0,50)+" ...";
  }
  
  if(bb == null){
	  document.getElementById("link2").innerText="";
  }else{
	  document.getElementById("link2").innerText=bb.substr(0,50)+" ...";
  }
  
  if(cc == null){
	  document.getElementById("link3").innerText="";
  }else{
	  document.getElementById("link3").innerText=cc.substr(0,50)+" ...";
  }
  
  if(dd == null){
	  document.getElementById("link4").innerText="";
  }else{
	  document.getElementById("link4").innerText=dd.substr(0,50)+" ...";
  }
  
  if(ee == null){
	  document.getElementById("link5").innerText="";
  }else{
	  document.getElementById("link5").innerText=ee.substr(0,50)+" ...";
  }
  
  if(ff == null){
	  document.getElementById("link6").innerText="";
  }else{
	  document.getElementById("link6").innerText=ff.substr(0,50)+" ...";
  }
  
  if(gg == null){
	  document.getElementById("link7").innerText="";
  }else{
	  document.getElementById("link7").innerText=gg.substr(0,50)+" ...";
  }
  
  if(hh == null){
	  document.getElementById("link8").innerText="";
  }else{
	  document.getElementById("link8").innerText=hh.substr(0,50)+" ...";
  }
  
  if(ii == null){
	  document.getElementById("link9").innerText="";
  }else{
	  document.getElementById("link9").innerText=ii.substr(0,50)+" ...";
  }
  
  if(jj == null){
	  document.getElementById("link10").innerText="";
  }else{
	  document.getElementById("link10").innerText=jj.substr(0,50)+" ...";
  }
  
  if(kk == null){
	  document.getElementById("link11").innerText="";
  }else{
	  document.getElementById("link11").innerText=kk.substr(0,50)+" ...";
  }
  
  if(ll == null){
	  document.getElementById("link12").innerText="";
  }else{
	  document.getElementById("link12").innerText=ll.substr(0,50)+" ...";
  }
  
  if(mm == null){
	  document.getElementById("link13").innerText="";
  }else{
	  document.getElementById("link13").innerText=mm.substr(0,50)+" ...";
  }
  
  if(nn == null){
	  document.getElementById("link14").innerText="";
  }else{
	  document.getElementById("link14").innerText=nn.substr(0,50)+" ...";
  }
  
  if(oo == null){
	  document.getElementById("link15").innerText="";
  }else{
	  document.getElementById("link15").innerText=oo.substr(0,50)+" ...";
  }
  
  if(pp == null){
	  document.getElementById("link16").innerText="";
  }else{
	  document.getElementById("link16").innerText=pp.substr(0,50)+" ...";
  }
  
  if(qq == null){
	  document.getElementById("link17").innerText="";
  }else{
	  document.getElementById("link17").innerText=qq.substr(0,50)+" ...";
  }
  
  if(rr == null){
	  document.getElementById("link18").innerText="";
  }else{
	  document.getElementById("link18").innerText=rr.substr(0,50)+" ...";
  }
  
  if(ss == null){
	  document.getElementById("link19").innerText="";
  }else{
	  document.getElementById("link19").innerText=ss.substr(0,50)+" ...";
  }
  
  if(uu == null){
	  document.getElementById("link20").innerText="";
  }else{
	  document.getElementById("link20").innerText=uu.substr(0,50)+" ...";
  }

	
	
//Memanggil Arweave
  const instance=Arweave.init( {
	host:"arweave.net",port:443,logging:!0,protocol:"https"
}
);

// Fungsi 1

async function checkurl(a) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:a
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {

		if(aa == null){
			
		}else{
			var a=aa;
		const t=await checkurl(a);
			document.getElementById("message").innerText=t?"Archived":"Not Archived"
		}

}
);

//Fungsi 2

async function checkurl(b) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:b
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
		if(bb == null){
			
		}else{
			var b=bb;
		const t=await checkurl(bb);
			document.getElementById("message2").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 3

async function checkurl(c) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:c
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(cc == null){
			
		}else{
			var c=cc;
		const t=await checkurl(cc);
			document.getElementById("message3").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 4

async function checkurl(d) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:d
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(dd == null){
			
		}else{
			var d=dd;
		const t=await checkurl(dd);
			document.getElementById("message4").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 5

async function checkurl(e) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:e
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(ee == null){
			
		}else{
			var e=ee;
		const t=await checkurl(ee);
			document.getElementById("message5").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 6

async function checkurl(f) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:f
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(ff == null){
			
		}else{
			var f=ff;
		const t=await checkurl(ff);
			document.getElementById("message6").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 7

async function checkurl(g) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:g
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(gg == null){
			
		}else{
			var g=gg;
		const t=await checkurl(gg);
			document.getElementById("message7").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 8

async function checkurl(h) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:h
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(hh == null){
			
		}else{
			var h=hh;
		const t=await checkurl(hh);
			document.getElementById("message8").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 9

async function checkurl(i) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:i
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(ii == null){
			
		}else{
			var i=ii;
		const t=await checkurl(ii);
			document.getElementById("message9").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 10

async function checkurl(j) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:j
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(jj == null){
			
		}else{
			var j=jj;
		const t=await checkurl(jj);
			document.getElementById("message10").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 11

async function checkurl(k) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:k
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(kk == null){
			
		}else{
			var k=kk;
		const t=await checkurl(kk);
			document.getElementById("message11").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 12

async function checkurl(l) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:l
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(ll == null){
			
		}else{
			var l=ll;
		const t=await checkurl(ll);
			document.getElementById("message12").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 13

async function checkurl(m) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:m
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(mm == null){
			
		}else{
			var m=mm;
		const t=await checkurl(mm);
			document.getElementById("message13").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 14

async function checkurl(n) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:n
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(nn == null){
			
		}else{
			var n=nn;
		const t=await checkurl(nn);
			document.getElementById("message14").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 15

async function checkurl(o) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:o
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(oo == null){
			
		}else{
			var o=oo;
		const t=await checkurl(oo);
			document.getElementById("message15").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 16

async function checkurl(p) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:p
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(pp == null){
			
		}else{
			var p=pp;
		const t=await checkurl(pp);
			document.getElementById("message16").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 17

async function checkurl(q) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:q
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(qq == null){
			
		}else{
			var q=qq;
		const t=await checkurl(qq);
			document.getElementById("message17").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 18

async function checkurl(r) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:r
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(rr == null){
			
		}else{
			var r=rr;
		const t=await checkurl(rr);
			document.getElementById("message18").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 19

async function checkurl(s) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:s
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(ss == null){
			
		}else{
			var s=ss;
		const t=await checkurl(ss);
			document.getElementById("message19").innerText=t?"Archived":"Not Archived"
		}
}
);

//Fungsi 20

async function checkurl(u) {
	return(await instance.arql( {
		op:"equals",expr1:"page:url",expr2:u
	}
	)).length>0
}

document.getElementById("submitbutton").addEventListener("click",async()=> {
	
	if(uu == null){
			
		}else{
			var u=uu;
		const t=await checkurl(uu);
			document.getElementById("message20").innerText=t?"Archived":"Not Archived"
		}
}
);

document.getElementById("go").disabled = true;
	document.getElementById("input").disabled = true;

});

</script>
 
</body>
</html>