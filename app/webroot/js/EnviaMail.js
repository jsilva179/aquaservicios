function EnviaMail()
{
	

	$.ajax({
    type: 'POST',
    url: "/Controller/ContactsController.php",
    async: false,
    data: {
      valor: "EnviaMail",
      rdm: Math.random()
    },
    dataType: 'JSON',
    success: function (data) {
      
    },
    error: function (data) {
      alert("error1: " + data);
    }



  });//fin ajax

}