var arraydata = [];
function getmenus() {
    $("#spinsavemenu").show()
	arraydata = [];
    var cont = 0;
    $("#menu-to-edit li").each(function(index) {
        var dept = 0;
        for (var i = 0; i < $("#menu-to-edit li").length; i++) {

            var n = $(this).attr("class").indexOf("menu-item-depth-" + i);
            if (n != -1) {
                dept = i;
            }
        };
        var textoiner = $(this).find(".item-edit").text();
	  var id = this.id.split("-");
        var textoexplotado = textoiner.split("|"); 
        var padre = 0;  
        if (!!textoexplotado[textoexplotado.length-2] && textoexplotado[textoexplotado.length-2]!= id[2]) {  
            padre = textoexplotado[textoexplotado.length-2]
        }
        arraydata.push({
            depth : dept,
            id : id[2],
            parent : padre,
            sort : cont
        })
        cont++;
    });
 actualizarmenu();
}

				function addcustommenu() {
					$("#spincustomu").show();
					 
					var dataString =  $('#nav-menu-meta').serialize(); 
			
					$.ajax({
						data: dataString,
						url : addcustommenur,
						type : 'POST',
						success : function(response) {
							$("#spincustomu").hide();
							// window.location = "";

						}
					});
				}

 
				function actualizarmenu() {

					$.ajax({
						dataType : "json",
						data : {
							arraydata : arraydata,
							menuname : $("#menu-name").val(),
							idmenu : $("#idmenu").val()
						},

						url : generatemenucontrolr,
						type : 'POST',
						success : function(response) {	
							alert('SUCCESS');					 
							// console.log("aqu llega")
							// $("#spinsavemenu").hide();
						}
					});
				}

				function deleteitem(id) {
					$.ajax({
						dataType : "json",
						data : {

							id : id
						},

						url :deleteitemmenur,
						type : 'POST',
						success : function(response) {

						}
					});
				}

				function deletemenu() {

					var r = confirm("Do you want to delete this menu ?");
					if (r == true) {
						$.ajax({
							dataType : "json",

							data : {

								id : $("#idmenu").val()
							},

							url : deletemenugr,
							type : 'POST',
							success : function(response) {

								if (!!response.error) {
									alert(response.resp)
								}

							}
						});

					} else {
						return false;
					}

				}

				function createnewmenu() {

					if (!!$("#menu-name").val()) {
						$.ajax({
							dataType : "json",

							data : {
								menuname : $("#menu-name").val(),
							},

							url :createnewmenur,
							type : 'POST',
							success : function(response) {

								window.location = menuwr+"?menu=" + response.resp

							}
						});
					} else {
						alert("Enter menu name!")
						$("#menu-name").focus();
						return false;
					}

				}
