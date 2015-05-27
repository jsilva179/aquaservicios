
<div class="contact" style="background-color: #eee">
	 <div class="container">
		 <h2>CONTÁCTENOS</h3>
		 <div class="map">
		 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1844082.3789335568!2d-99.8141693!3d25.480910100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629584a2a5b05d%3A0x701df442c36cbbc6!2sNuevo+Leon%2C+Mexico!5e0!3m2!1sen!2sus!4v1431831525865" width="600" height="450" frameborder="0" style="border:0"></iframe>
		 </div>
		  <form  method="post" onsubmit="return false;">
			 <div class="col-md-6 contact-left">
					<input type="text" placeholder="Nombre" id="nombre" required/>
					<input type="text" placeholder="E-mail" id="email" required/>
					<input type="text" placeholder="Teléfono" id="telefono" required/>
			 </div>
			 <div class="col-md-6 contact-right">
				 <textarea placeholder="Mensaje" id="mensaje" requiered></textarea>
				 <input type="submit" value="Enviar" id="send"  />
			 </div>
			 <div class="clearfix"></div> 
		 </form>		 
	 </div>
</div>
<!-- news-letter -->
<div class="news-letter">
		<div class="container">
			<div class="news-letter-grid">
				<div class="news-letter-grid-left">
					<h3>¿Desea contactarnos?</h3>
					<p>Ingrese su correo electrónico y nos pondremos en contacto con usted lo más pronto posible.</p>
				</div>
				<div class="news-letter-grid-right">
					<form>
						<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<input type="submit" value=" " />
					</form>
				</div>
				<div class="clearfix"> </div>
		   </div>
	  </div>
</div>

<script >
	$(document).ready(function () {
		$(".active").removeClass();
		$("#idContacts").addClass("active");
	});

	$("#send").click(function() {
        EnviaMail();
    });


function EnviaMail(){

	$.ajax({
            type: "POST", // Tipo post 
            url: "/Contacts/Mail/?name=yorchcasual17@gmail.com",
            data: {

            	name:$("#nombre").val() ,
            	mail:$("#email").val() ,
            	phone:$("#telefono").val() ,
            	message:$("#mensaje").val() 

            }, // el note que acabas de crear
            dataType: 'json', // Tipo json
            success: function(data)
            {
                alert("ok");
            },
            error: function(data)
            {
                alert("Ocurrió un error inesperado al guardar la nota " + textStatus);
            }
        });
}


</script>