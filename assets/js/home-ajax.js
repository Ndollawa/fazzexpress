 var postData = new FormData();
   var post_type="";
  var chatform_data = new FormData();
   var chat_type="";
   var response="";
   var file_type="";
   var filetype="";
var selector;
var message;
var bulk_options;
var selectid = new Array();
$(document).ready(function(){
// alert("bdhjgvsvhud");


$('#requestForm').on('submit',function(event) {
	event.preventDefault();

	var name  = $('#user_name').val();
	var website  = $('#user_website').val();
	var email  = $('#user_email').val();
	var message  = $('#user_message').val();
  var heading = $('#user_heading').val();
	var action ="request-submit";
// 	postData.append("name",name);
// 	postData.append("email",email);
// 	postData.append("website",website);
// 	postData.append("message",message);
// 	postData.append("action",action);
//   for (let [key, value] of postData.entries()) {
//   console.log(`${key}: ${value}`);
// }
// 
	$.ajax({
		url: '../action.php',
		method: 'post',
		data:{action:action,name:name,email:email,message:message,website:website},
		success:function(data){
      $("#requestForm")[0].reset();
			if(data == 1){
        // alert('Successfully Sent..');
 				var heading ="SUCCESSFULLY SENT";
                var text = "You request Has been submited and Received";
                var icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500); 
            }
		}
	});
});

$('#askfaq-form').on('submit',function(e){
e.preventDefault();
  var question = $('#faq-question').val();
 var action = 'add-Faq';
 if(question !== ""){
 $.ajax({
                url: '../admin/queries/table-queries.php',
                type: 'post',
                data:{action:action,question:question},
                success: function(data) {
               // $('#Workspace-data').html(data);
               // alert(data);
                  $.toast({
                                            heading: 'All Done!',
                                            text: 'Qusetion successfully submitted...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
               $('#askfaq-form')[0].reset();
               load_faqTableData();
                }
              });}
});

$('#quoteForm').on('submit',function(event) {
  event.preventDefault();
  var formData = $('#quoteForm').serialize();
  var action = "requestQuote-submit";
// alert(formData);
  $.ajax({
    url: '../action.php',
    method: 'post',
    data:{action:action,formData:formData},
    success:function(data){
      // alert(data);
      $("#quoteForm")[0].reset();
      if(data == 1){
        // alert('Successfully Sent..');
        var heading ="SUCCESSFULLY SENT";
                var text = "You request Has been submited and Received";
                var icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500); 
            }else  if(data == 0){

        // alert('Error..');
                      var heading ="ALERT!!! AN ERROR OCCURED";
                var text = "Please fill all the entries Correctly";
                var icon = "error";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500); 
            }
    }
  });
});

$('#trackparcel').on('submit',function(event) {
  event.preventDefault();
  var formData = $('#trackparcel').serialize();
  var action = "trackparcel";
// alert(formData);
  $.ajax({
    url: '../track.php',
    method: 'post',
    data:{action:action,formData:formData},
    success:function(data){
      // alert(data);
      $("#trackparcel")[0].reset();
      if(data != 0){
          init_modalWindow('<h5 class="bold">Parcel Shipment Information</h5>',"modal-lg",data);
       $('#ajax-response').modal();
            }else  if(data == 0){

        // alert('Error..');
                      var heading ="ALERT!!! TRANSACTION DOESN'T EXIST";
                var text = "Please check the Track ID and fill in Correctly";
                var icon = "error";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500); 
            }
    }
  });
});


});

               



function init_modalWindow(heading="",size="",content){
  var modal = '<div class="modal fade" id="ajax-response" tabindex="-1" role="dialog" aria-labelledby="ajax-responseTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered '+size+'"  role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">'+heading+'</h5><button type="button" id="modal-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body" style="word-wrap:break-word; word-break: break-all;">'+content+'</div></div></div></div>';
$('.modal-container').html(modal);
}
               
  function init_sweetAlert(heading,text,position='top-right',icon,hideAfter=3500) {
      $.toast({
                                            heading:heading,
                                            text: text,
                                            position: position,
                                            loaderBg:'#ff6849',
                                            icon: icon,
                                            hideAfter: hideAfter,
                                            stack: 6
                                          });
    // body...
  }