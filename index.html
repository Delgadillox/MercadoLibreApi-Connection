<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mercado Libre Api</title>
	<script type="text/javascript" src="helpHttp.js"></script>
</head>
<body>
	<button onclick="conseguirCredenciales()">Probar API</button>
	<button onclick="refreshToken()">Refrezcar TOKEN</button>
	<textarea id="credenciales_txt"></textarea>

	<button onclick="Informacion()">Información MIA</button>
	<textarea id="info_txt"></textarea>
	
	<button onclick="CrearUsuario_Prueba()">Crear Usuario Prueba</button>
	<textarea id="usuario_txt"></textarea>

	<button onclick="ValidarArticulo()">Subir articulo a VALIDAR</button>

	<button onclick="SubirArticulo()">Subir articulo a ML</button>

	<button onclick="AgregarDescripcion()">Agregar descripción</button>
</body>
</html>

<script type="text/javascript">
	let setCookie = (name, value, days) => {
  let expires = "";
  if (days) {
    let date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
 	 }
	  document.cookie = name + "=" + (value || "") + expires + "; path=/";
	};

	let getCookie = name => {
	  let nameEQ = name + "=";
	  let ca = document.cookie.split(";");
	  for (var i = 0; i < ca.length; i++) {
	    let c = ca[i];
	    while (c.charAt(0) === " ") c = c.substring(1, c.length);
	    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
	  }
	  return null;
	};


	let api = helpHttp();
	
	let appid = "1863607844057181";

	var token =  "APP_USR-6283344160371361-111118-2db2777956cc2a45809baff82d129935-538573222";

	var code = "TG-622265f8f723dc001ad0efc5-1017851665";

	var url = "";


	function conseguirCredenciales()
	{
		url = "https://api.mercadolibre.com/oauth/token";
		let data = {
				grant_type:'authorization_code',
  			client_id:'1863607844057181',
  			client_secret:'LhPweabLObJHBpZl8JRvrG8gaA07zlFY',
  			code:'TG-622278696d6a7e001acbe1c3-1017851665',
  			redirect_uri:'https://www.pigmentolaguna.com/'
		};

  		let options = {
  			body:data,
  			headers:{
  			"content-type":"application/x-www-form-urlencoded"}
  		};
  		api.post(url, options).then((res) => {
  			console.log(res);
  			// setCookie("access_token", res.access_token, 30);
  			// setCookie("refresh_token", res.refresh_token, 30);
  			credenciales_txt.innerText = JSON.stringify(res);
  		});
	}

	function refreshToken() {
		url="https://api.mercadolibre.com/oauth/token";
		let data = {
				grant_type:'refresh_token',
  			client_id:'6283344160371361',
  			client_secret:'YwgtkhoekEqKsvO6sPgJAwLJ0Y2OLQcf',
  			refresh_token: 'TG-6222788bbc0cd6001c601d4b-1017851665'
		};
		let options = {
  			body:data,
  			headers:{
  			"content-type":"application/x-www-form-urlencoded"}
  		};
  		api.post(url, options).then((res) => {
  			console.log(res);
  			credenciales_txt.innerText = JSON.stringify(res);
  		});
	}

	function Informacion()
	{
		url = "https://api.mercadolibre.com/users/me";
		let options = {
			headers:{
				"Authorization" : `Bearer ${token}`
			}
		}
		api.get(url, options).then((res) => {
			console.log(res);
			info_txt.innerText = JSON.stringify(res);
		});
	}

	function CrearUsuario_Prueba()
	{
		url = "https://api.mercadolibre.com/users/test_user";
		let data = {
			site_id:'MLM'
		};
		let options = {
			body:data,
			headers:{
				"Authorization" : `Bearer ${token}`,
				"Content-type" : "application/json"
			}
		}
		api.post(url, options).then((res) => {
			console.log(res);
			usuario_txt.innerText = JSON.stringify(res);
		});
	}

	function ValidarArticulo()
	{
		url = "https://api.mercadolibre.com/items/validate";
		let data = {
			listing_type_id:"bronze",
		    pictures:[ { "source":"http://farm2.staticflickr.com/1056/628680053_3b7c315548_b.jpg" }, 
		    { "source":"https://1.bp.blogspot.com/-Qni8FLuEZ2Q/YHXxNFbPXII/AAAAAAAASOM/G4w3LGwqWfIbGASzJcvChB8x_EhKERlJACLcBGAsYHQ/s16000/proceso-industrial-fabricacion-de-pinturas-pinturas-comerciales-envasadas.jpg" } ],
		    title:"Item de Prueba - Por favor, NO OFERTAR",
		    available_quantity:2,
		    buying_mode:"buy_it_now",
		    currency_id:"MXN",
		    condition:"new",
		    category_id:"MLM189880",
		    site_id:"MLM",
		    price:1000,
		    channels: ["marketplace","mshops"],
		    shipping: {
			mode: "me2",
			local_pick_up: true,
			free_shipping: false,
			free_methods: []
			}

		};
		let options = {
			body:data,
			headers: {
				"Authorization" : `Bearer ${token}`,
				"Content-type" : "application/json"
			}
		};
		api.post(url, options).then((res)=>{
			console.log(res);
		});
	}

	function SubirArticulo()
	{
		url = "https://api.mercadolibre.com/items";
		let data = {
			listing_type_id:"bronze",
		    pictures:[ { "source":"http://farm2.staticflickr.com/1056/628680053_3b7c315548_b.jpg" }, 
		    { "source":"https://1.bp.blogspot.com/-Qni8FLuEZ2Q/YHXxNFbPXII/AAAAAAAASOM/G4w3LGwqWfIbGASzJcvChB8x_EhKERlJACLcBGAsYHQ/s16000/proceso-industrial-fabricacion-de-pinturas-pinturas-comerciales-envasadas.jpg" } ],
		    title:"Item de Prueba - Por favor, NO OFERTAR",
		    available_quantity:2,
		    buying_mode:"buy_it_now",
		    currency_id:"MXN",
		    condition:"new",
		    category_id:"MLM189880",
		    site_id:"MLM",
		    price:1000,
		    channels: ["marketplace","mshops"],
		    shipping: {
			mode: "me2",
			local_pick_up: true,
			free_shipping: false,
			free_methods: []
			}
		}
		let options = {
			body:data,
			headers: {
			"Authorization" : `Bearer ${token}`,
			"Content-type" : "application/json"
			}
		}
		api.post(url, options).then((res) => {
			console.log(res);
		});
	}

	function AgregarDescripcion()
	{
		let ItemID = "MLM1339508307";
		url=`https://api.mercadolibre.com/items/${ItemID}/description`;
		let data = {
			plain_text : "Esto es una descripcion de prueba \n Hola, probando renglones"
		};
		let options = {
			body:data,
			headers: {
				"Authorization" : `Bearer ${token}`,
				"Content-type" : "application/json"
			}
		};
		api.post(url,options).then((res)=>{
			console.log(res);
		});
	}


	
</script>

