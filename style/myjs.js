 function validateform(){
         var x = document.forms['categoryform']['title'].value;
         var y = document.forms['categoryform']['description'].value;
         var z = document.forms['categoryform']['date'].value;
         var w = document.forms['categoryform']['category'].value;
         if (x=="") {
          	alert('Title Must Be Filled Out !');
          	return false;
          }
          if (y=="") {
          	alert('Description Must Be Filled Out !');
          	return false;
          }
           if (y.length<10) {
          	alert('Description Atleast 100 character !');
          	return false;
          }

       $('#search').click(function(){
        $('#search').hide();


       });

 }


 