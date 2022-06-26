
		// function product(){
		// 	var wgt = document.getElementById("weight").value;
		// 	var rem = document.getElementById("remark").value;

		// 	switch(rem){
		// 		case "nzuri":
		// 			document.getElementById("result").value = wgt*14000;
		// 			break;
		// 		case "wastani":
		// 			document.getElementById("result").value = wgt*13000;
		// 			break;
		// 		case "hafifu":
		// 			document.getElementById("result").value = wgt*12000;
		// 			break;
		// 		case "mpeta":
		// 			document.getElementById("result").value = wgt*7000;
		// 			break;
		// 		case "organic":
		// 			document.getElementById("result").value = wgt*14000;
		// 		default:
		// 			document.getElementById("result") = window.alert('please fill the open space');
		// 	}
		// }
		function total(){
			var wgt = document.getElementById("weight").value;
			var rem = document.getElementById("remark").value;
			var prd = document.getElementById("goods").value;

			if(prd == "karafuu"){
				switch(rem){
					case "nzuri":
						document.getElementById("result").value = wgt*14000;
						break;
					case "wastani":
						document.getElementById("result").value = wgt*13000;
						break;
					case "hafifu":
						document.getElementById("result").value = wgt*12000;
						break;
					case "mpeta":
						document.getElementById("result").value = wgt*7000;
						break;
					case "organic":
						document.getElementById("result").value = wgt*14000;
					default:
						document.getElementById("result") = window.alert('please fill the open space');
				}

			} else if (prd=="makonyo") {
				switch (rem) {
					case "nzuri":
						document.getElementById("result").value = wgt*1500;
						break;
					case "hafifu":
						document.getElementById("result").value = wgt*1000;
						break;
					default:
						document.getElementById("result") = window.alert('please fill the open space');
						break;
				}
			}
			
		}

	
		// function payment() {
		// 	var pay = document.getElementById('goods').value;
		// 	var div = document.createElement("div").outerHTML = "<div>moja</div>";
		// 	switch(pay){
		// 		case 'karafuu':
		// 		document.getElementById('table').innerHTML = document.getElementById('aa').outerHTML;
		// 		break;
		// 		case 'makonyo':
		// 		document.getElementById('table').innerHTML = console.log(div.outerHTML);
		// 		break;
		// 		case 'mafuta':
		// 		document.getElementById('table').innerHTML = document.getElementById('mf').outerHTML;
		// 		break;
		// 		default:
		// 		document.getElementById('table').innerHTML = "Please choose the kind of product";
		// 		break;

		// 	}
		// }
		function cal() {
			const wgt = document.getElementById('weight');
			const res = document.getElementById('result');
			res.value  = 1200 * wgt;
		}

		// function pay() {
		// 	var malipo = document.getElementById('malipoid').value;
		// 	if (malipo == "eazy_pesa") {
		// 		document.getElementById('acc_number').disabled = true;
		// 		document.getElementById('bank_name').disabled = true;
		// 		document.getElementById('p_number').disabled = false;
		// 	}else if(malipo == "bank"){
		// 		document.getElementById('p_number').disabled = true;
		// 		document.getElementById('acc_number').disabled = false;
		// 		document.getElementById('bank_name').disabled = false;
		// 	}
		// 	else if (malipo=="cash") {
		// 		document.getElementById('acc_number').disabled = true;
		// 		document.getElementById('bank_name').disabled = true;
		// 		document.getElementById('p_number').disabled = true;
		// 	}
		// 	else {
		// 		document.getElementById('acc_number').disabled = false;
		// 		document.getElementById('bank_name').disabled = false;
		// 	}
		// }