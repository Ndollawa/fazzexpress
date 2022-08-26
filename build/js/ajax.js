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
  init_editor('.editor','queries/upload.php','');



$(document).ready(function(){

load_quoteTableData();
$('#pages-form').on('submit',function(event) {
  event.preventDefault();
var action ="update-sitepages";
var formData = $('#pages-form').serialize();
// alert(formData);
  $.ajax({
    url: 'queries/action.php',
    method: 'post',
    data:{action:action,formData:formData},
    success:function(data){
      if(data == 1){
        // alert(data);
        // alert('Successfully Sent..');
        var heading ="SUCCESSFULLY UPDATED";
                var text = "Record updated successfully";
                var icon = "success";
                init_sweetAlert(heading,text,position='top-right',icon,hideAfter=3500);
                document.location.reload();
              }else  if(data == 0){
                      var heading ="ALERT!!! AN ERROR OCCURED";
                var text = "Please fill all the entries Correctly";
                var icon = "error";
                init_sweetAlert(heading,text,position='top-right',icon,hideAfter=3500);
            }
    }
  });
});

         // $('.slimscroll').slimScroll({
         //                  start: 'top',
         //                  alwaysVisible: false
         //                });
$(document).on('click','.quoteResponseForm',function(){
// alert('clicked');
   var quote_id = $(this).data('quote_id');
    var action =  $(this).data('action');

 $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{action:action, quote_id:quote_id},
                success: function (data) {
                    // alert(data);
                    init_modalWindow("<h4 class='bold'>Reply Quotation</h4>","modal-lg",data);
tinymce.remove('.editor');
                    $('#ajax-response').modal();
                init_editor('.editor');

              }
           });




})

 $(document).on('click','.delete-quote', function(){
                      var id = $(this).data('quote_id');
                      var action =  $(this).data('action');
 var  url= 'queries/table-queries.php';
                    var callbackAction = 'load-quoteTableData';
                    var message = 'Quote has been deleted.'
    delete_btn(action,id,url,callbackAction,message);
     load_quoteTableData();
                      });


 $(document).on('click','.delete-faq', function(){
                      var id = $(this).data('faq_id');
                      var action =  $(this).data('action');
 var  url= 'queries/table-queries.php';
                    var callbackAction = 'load_faqTableData';
                    var message = 'Question has been deleted.'
    delete_btn(action,id,url,callbackAction,message);
     load_faqTableData();
                      });


 load_faqTableData();
$(document).on('click','.edit-faq', function(){
    var faq_id = $(this).data('faq_id');
    var action =  $(this).data('action');
            $.ajax({
                url: 'queries/table-queries.php',
                type: 'post',
                data:{action:action, faq_id:faq_id},
                success: function (data) {
                    // alert(data);
                    init_modalWindow("<h4 class='bold'>Update FAQ</h4>","modal-lg",data);
tinymce.remove('.editor');
                    $('#ajax-response').modal();
                init_editor('.editor');

              }
           });
  });

$(document).on('submit','#faq-form', function(e){
e.preventDefault();

  var answer = tinyMCE.activeEditor.getContent();
  var question = $('#faq-question').val();
 var action = 'add-Faq';
 if(question !== ""){
 $.ajax({
                url: 'queries/table-queries.php',
                type: 'post',
                data:{action:action,answer:answer,question:question},
                success: function(data) {
               // $('#Workspace-data').html(data);
               // alert(data);
                  $.toast({
                                            heading: 'All Done!',
                                            text: 'FAQ successfully Added...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
               $('#faq-form')[0].reset();
               load_faqTableData();
                }
              });}
});



$(document).on('submit','#faq-updateform', function(e){
e.preventDefault();
  var faq_id = $('#faq-update').data('faq_id');
  var answer = tinyMCE.activeEditor.getContent();
  var question = $('#faq-question').val();
 var action = 'update-Faq';
 if(question !== ""){
 $.ajax({
                url: 'queries/table-queries.php',
                type: 'post',
                data:{action:action,answer:answer,question:question,faq_id:faq_id},
                success: function(data) {
               // $('#Workspace-data').html(data);
               // alert(data);
                  $.toast({
                                            heading: 'All Done!',
                                            text: 'FAQ successfully Updated...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
               $('#ajax-response').modal('hide');
               load_faqTableData();
                }
              });}
});

$(document).on('click','.addFaq', function(){
    var faq_id = $(this).data('faq_id');
    var action =  'load-faqForm';
            $.ajax({
                url: 'queries/table-queries.php',
                type: 'post',
                data:{action:action, faq_id:faq_id},
                success: function (data) {
                    // alert(data);
                    init_modalWindow("<h4 class='bold'>Add FAQ</h4>","modal-lg",data);
tinymce.remove('.editor');
                    $('#ajax-response').modal();
             init_editor('.editor');

              }
           });
  });

$(document).on('submit', '#faqdisTable', function(event) {
  event.preventDefault();
 bulk_options = $('#bulk-options').val();
 selectid =  $('.checkboxes:checked').map(function(){
   return $(this).val();
  }).get();
  selectid=JSON.stringify(selectid);
  // alert(selectid);
 var action = 'faqBulkOperation';
 if(bulk_options !== "" && selectid !== ""){
  $.ajax({
    url: 'queries/table-queries.php',
    method: 'post',
    data:{action:action,bulk_options:bulk_options,selectid:selectid},
    success:function(data){
      // alert(data);
    load_faqTableData();
      $('#bulk-options').val('');
      $('#selectAll').prop('checked',false);
    }
  });
}
});
load_faqTableData();

function load_faqTableData() {
 var action = 'load-faqTableData';
 $.ajax({
  url: 'queries/table-queries.php',
  method: 'post',
  data:{action:action},
  success:function(data) {
    // alert(data);
    var selector = $('#faqTable');
   selector.DataTable().destroy();
   $('#faqTableData').html(data);
   init_Table(selector,message);
  }
 });
}

load_quoteTableData();
function load_quoteTableData() {
 var action = 'load-quoteTableData';
 $.ajax({
  url: 'queries/dashboard-queries.php',
  method: 'post',
  data:{action:action},
  success:function(data) {
    // alert(data);
    var selector = $('#datatables');
   selector.DataTable().destroy();
   $('#quoteRequestDisTable').html(data);
   init_Table(selector,message);
  }
 });
}


           $(document).on('click','#selectAll', function(){
                            if(this.checked){
                              $('.checkboxes').each(function(){
                            this.checked = true;
                              });
                            }else{
                              $('.checkboxes').each(function(){
                            this.checked = false;
                              });
                            }
                            });


$(document).on('click', '#create-todos',function() {
make_todosForm();
loadTodoList();
});
$(document).on('click', '#load-todos',function() {
make_todosFormpanel();
});

$(document).on('submit', '#todosdisTable', function(event) {
  event.preventDefault();
 bulk_options = $('#bulk-options').val();
 selectid =  $('.checkboxes:checked').map(function(){
   return $(this).val();
  }).get();
  selectid=JSON.stringify(selectid);
  // alert(selectid);
 var action = 'todoBulkOperation';
 if(bulk_options !== "" && selectid !== ""){
  $.ajax({
    url: 'queries/dashboard-queries.php',
    method: 'post',
    data:{action:action,bulk_options:bulk_options,selectid:selectid},
    success:function(data){
      // alert(data);
      loadtodo();
      loadTodoList();
      $('#bulk-options').val('');
      $('#selectAll').prop('checked',false);
    }
  });
}
});
$(document).on('click','.delete-quote', function(){
                      var id = $(this).data('quote_id');
                      var action =  $(this).data('action');
 var  url= 'queries/table-queries.php';
                    var callbackAction = 'load_quoteTableData';
                    var message = 'Quote Request deleted...';
    delete_btn(action,id,url,callbackAction,message);
     load_quoteTableData();
});

$(document).on('click','.delete-todo', function(){
                      var id = $(this).data('todo_id');
                      var action =  $(this).data('action');
 var  url= 'queries/dashboard-queries.php';
                    var callbackAction = ' loadtodo';
                    var message = 'Todo has been deleted.'
    delete_btn(action,id,url,callbackAction,message);
     loadTodoList();
});
 $(document).on('click','.edit-todo', function(){
    var todo_id = $(this).data('todo_id');
    var action =  $(this).data('action');
            $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{action:action, todo_id:todo_id},
                success: function (data) {
                    // alert(data);
                    $('.todo-edit').html(data);


              }
           });
  });
 $(document).on('click','#add-todo', function(event){
    event.preventDefault();
var todoname = $('#todo-title').val();
var action = 'create-todo';
if(todoname !== ""){
   $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{todoname:todoname,action:action},
                success: function (data) {
              $('#add-todo')[0].reset();
                loadtodo();
                loadTodoList();
        $.toast({
                                            heading: 'All Done!',
                                            text: 'Todo Created..',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
              }
           });
 }
});


 $(document).on('submit','#edit-todo', function(event){
    event.preventDefault();
var todoname = $('#newtodo-title').val();
var action = 'update-todo';
var todo_id = $('#update-todoid').val();
// alert(todo_id);
if(todoname !== ""){
   $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{todoname:todoname,action:action,todo_id:todo_id},
                success: function (data) {
              $('#edit-todo').remove();
                loadtodo();
                loadTodoList();
        $.toast({
                                            heading: 'All Done!',
                                            text: 'Todo Updated...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
              }
           });
 }
});
    loadTodoList();
function loadTodoList(){
    var action = 'loadTodoList';
     $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{action:action},
                success: function (data) {
              $('#sortable-todo').html(data);
              // alert(data);
              }});
}
// function make_todosFormpanel() {
//  var action = 'make-todosFormpanel';
//  $.ajax({
//   url: '../queries/workspace-queries.php',
//   method: 'post',
//   data:{action:action},
//   success:function(data) {
//     // alert(data);
//      selector = $('#my-todos');
//
//    $('#Workspace-data').html(data);
// init_Table(selector,message);
//       loadtodo();
//       loadTodoList();
//   }
//  });
// }

        $(document).on('click', '.todolist', function() {
            var todo_id = $(this).val();
           var action = 'change-todoStatus';
           var status;
           if(this.hasAttribute('checked')){
                status = "undone";
            }else{
            status = "done";
        }
        $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{status:status,action:action,todo_id:todo_id},
                success: function (data) {
              // alert(data);
                loadTodoList();
                make_todosFormpanel();
               }
           });

            // $(this).parents('li').children('.todo-title').toggleClass('line-through');

        });
loadtodo();
 $(document).on('click','#load-TodosPage', function(event){
make_todosFormpanel();
loadTodoList();
loadtodo();
});
function loadTodoList(){
    var action = 'loadTodoList';
     $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{action:action},
                success: function (data) {
              $('#sortable-todo').html(data);
              // alert(data);
              }});
}
function loadtodo(){
  var action = 'loadtodo';
     $.ajax({
                url: 'queries/dashboard-queries.php',
                type: 'post',
                data:{action:action},
                success: function (data) {
              // alert(data);
                  selector = $('#my-todos');

              $('.todosTable').html(data);
init_Table(selector,message);
              }
           });

}
function make_todosForm() {
 var action = 'make-todosForm';
 $.ajax({
  url: 'queries/dashboard-queries.php',
  method: 'post',
  data:{action:action},
  success:function(data) {
    // alert(data);
    init_modalWindow('<h4 class="bold">Todos</h4>',"",data);
       $('#ajax-response').modal({
        backdrop:'static',
        keyboard:false
      });
      loadtodo();
  }
 });
}

// function make_todosFormpanel() {
//  var action = 'make-todosFormpanel';
//  $.ajax({
//   url: 'queries/workspace-queries.php',
//   method: 'post',
//   data:{action:action},
//   success:function(data) {
//     // alert(data);
//      selector = $('#my-todos');
//
//    $('#Workspace-data').html(data);
// init_Table(selector,message);
//       loadtodo();
//       loadTodoList();
//   }
//  });
// }

$('#disTableform').on('submit', function(event) {
  event.preventDefault();
bulk_options = $('#bulk-options').val();
    selectid = $('input[name= "selectid[]"]:checked').map(function(){
  return $(this).val();
  }).get();
  selectid=JSON.stringify(selectid);
 var action = $('#table-apply-btn').data('action');
  var callback = $('#table-apply-btn').data('callback');
 if(bulk_options !== "" && selectid !== ""){
  $.ajax({
    url: 'queries/table-queries.php',
    method: 'post',
    data:{action:action,bulk_options:bulk_options,selectid:selectid},
    success:function(data){
      // alert(data);
     switch(callback){
      case 'all_users':
        get_allUserList();
      break;

       case 'all_branches':
        get_allBranchList();
      break;

       case 'all_parcels':
        get_allParcelList();
      break;

       case'all_shipments':
        get_allacceptedParcelList();
      break;
       case "load_faqTableData":
                  load_faqTableData();
                  break;
      default:
      break;
     }
      $('#bulk-options').val('');
      $('#selectAll').prop('checked',false);
    }
  });
}
})
	// alert("connected");
$(document).on('ifClicked','.deliveryoptions',function(){
	var deliveryoptions = $(this).val();
	// alert(deliveryoptions);
  var action = "load-deliveryoptions";
	if(deliveryoptions == 'Delivery'){
	var	deliveryaddress = $('#recipientaddress').val();
	if(deliveryaddress == ''){
		     $.toast({
            heading: 'Attention!!! ',
            text:'Please add a Recipient Address',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter:3500,
            stack: 6
          });

	}else{
		get_recipientAddress(action,deliveryoptions,deliveryaddress) ;
	}
	}else{
		var deliveryaddress = "";
		get_recipientAddress(action,deliveryoptions,deliveryaddress);
	}
	});
function get_recipientAddress(action,deliveryoptions,deliveryaddress) {

	var action = 'load-deliveryoptions';
	$.ajax({
		url:'queries/action.php',
		type:'POST',
		data:{action:action,deliveryoptions:deliveryoptions,deliveryaddress:deliveryaddress},
		success:function(data){
			// alert(data);
			$('#closestBranch').html(data);
		}
	})
}

    $('#parcelImageUpload').on('change', function(event){


                        // Read selected files
                        var totalfiles = document.getElementById('parcelImageUpload').files.length;
                        if(totalfiles>3){
                        $.toast({
              heading: 'File limit exceeded. ',
              text: 'You can only select 3 files..',
              position: 'top-right',
              loaderBg:'#ff6849',
              icon: 'info',
              hideAfter: 3500,
              stack: 6
            });

              }else{


              for (var index = 0; index < totalfiles; index++) {
        var file =document.getElementById('parcelImageUpload').files[index];
                var previewContainer = '#parcelImage-preview';
                  set_media_grid(totalfiles,file,previewContainer,index);
         // postData.append("parcelImage[]", document.getElementById('parcelImageUpload').files[index]);
        //  alert(file);
                 }
                                                 }

                                                    });
// $('#new-parcel').submit(function(e){
// 		e.preventDefault();
//     if($('#parcel-items tbody tr').length <= 0){
//       alert_toast("Please add atleast 1 parcel information.","error")
//       return false;
//     }
//     var formData =  new FormData($(this)[0]);
//     var action = 'add-newparccel';
//     // formData.append('action':action);
//     $.ajax({
// 			url:'queries/action.php',
// 			data:formData,
// 		    cache: false,
// 		    contentType: false,
// 		    processData: false,
// 		    method: 'POST',
// 		    type: 'POST',
// 			success:function(resp){
// 			// if(resp){
//       //       resp = JSON.parse(resp)
//       //       if(resp.status == 1){
//       //         alert_toast('Data successfully saved',"success");
//       //         end_load()
//       //         var nw = window.open('print_pdets.php?ids='+resp.ids,"_blank","height=700,width=900")
//       //       }
// 			// }
//         if(resp == 1){
//             alert_toast('Data successfully saved',"success");

//             $('#new-parcel')[0].reset();
//         }
// 			}
// 		})
// 	})


$(document).on('click','.delete-parcel', function(){
    var id = $(this).data('parcel_id');
    var action =  $(this).data('action');
 var  url= 'queries/table-queries.php';
                    var callbackAction = 'get_allParcelList';
                    var message = 'Parcel Entry has been deleted.'
    delete_btn(action,id,url,callbackAction,message);

    });

$(document).on('click','.delete-branch', function(){
    var id = $(this).data('branch_id');
    var action =  $(this).data('action');
    var  url= 'queries/table-queries.php';
                    var callbackAction = 'get_allBranchList';
                    var message = 'Company Branch has been deleted.';
    delete_btn(action,id,url,callbackAction,message);

    });
$(document).on('click','.delete-user', function(){
    var id = $(this).data('user_id');
    var action =  $(this).data('action');
    var  url= 'queries/table-queries.php';
                    var callbackAction = 'get_allUserList';
                    var message = 'Staff has been deleted.';
    delete_btn(action,id,url,callbackAction,message);

    });

$(document).on('click','.delete-service', function(){
    var id = $(this).data('service_id');
    var action =  $(this).data('action');
    var  url= 'queries/table-queries.php';
                    var callbackAction = 'get_allServiceList';
                    var message = 'Service has been deleted.';
    delete_btn(action,id,url,callbackAction,message);

    });


$(document).on('click','.delete-gallery', function(){
    var id = $(this).data('gallery_id');
    var action =  $(this).data('action');
    var  url= 'queries/table-queries.php';
                    var callbackAction = 'load_view_gallery';
                    var message = 'Gallery Image has been deleted.';
    delete_btn(action,id,url,callbackAction,message);

    });



$(document).on('click',".view-parcel",function(){
    var parcel_id = $(this).data('parcel_id');
    var action =  $(this).data('action');
    // alert(id);
  $.ajax({
  url: 'queries/action.php',
  method: 'post',
  data:{action:action,parcel_id:parcel_id},
  success:function(data) {
    // alert(data);
    init_modalWindow('<h5 class="bold">Parcel information</h5>',"modal-lg",data);
       $('#ajax-response').modal();
       // $('#ajax-response').modal('close');
}
    });

});
$(document).on('click','.csstatus',function(){
    var parcel_id = $(this).data('parcel_id');
    var action =  'updateshipmentStatus';
    // alert(parcel_id);
  $.ajax({
  url: 'queries/action.php',
  method: 'post',
  // dataType:'json',
  data:{action:action,parcel_id:parcel_id},
  success:function(data) {
      $('#ajax-response').modal('hide');
     $('#ajax-response2').modal('hide');
       $('#ajax-response2').remove();
    data = JSON.parse(data);
    init_modalWindow2('<h5 class="bold">Shipment Status update for:'+data[0]+'</h5>',"",data[1]);
       $('#ajax-response2').modal();
}
    });

});
$(document).on('click','.cpstatus',function(){
    var parcel_id = $(this).data('parcel_id');
    var action =  'updateparcelStatus';
    // alert(parcel_id);
  $.ajax({
  url: 'queries/action.php',
  method: 'post',
  // dataType:'json',
  data:{action:action,parcel_id:parcel_id},
  success:function(data) {
     $('#ajax-response2').modal('hide');
    data = JSON.parse(data);
    init_modalWindow2('<h5 class="bold">Parcel Status update for:'+data[0]+'</h5>',"",data[1]);
       $('#ajax-response2').modal();
}
    });

});

 $(document).on('submit','#ushipmentstatus',function(event){
  event.preventDefault();
    var parcel_id = $("#update-s-submit" ).data('parcel_id');
     var status = $('#s-status').val();
    var action =  'change-shipmentStatus';
    // alert(parcel_id);
  $.ajax({
  url: 'queries/action.php',
  method: 'post',
  // dataType:'json',
  data:{action:action,parcel_id:parcel_id,status:status},
  success:function(resp) {

    if(resp == 1){
        var heading = 'All Done!';
   var text = 'Shipment status successfully updated';
      $('#ajax-response').modal('hide');
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
    }
    setTimeout(function(){
        location.reload();
    },500);


}
    });
});
   $(document).on('submit','#uparcelstatus',function(event){
    event.preventDefault();
    var parcel_id = $("#update-p-submit" ).data('parcel_id');
    var action =  'change-parcelStatus';
     var status = $('#p-status').val();
    // alert(parcel_id);
  $.ajax({
  url: 'queries/action.php',
  method: 'post',
  // dataType:'json',
  data:{action:action,parcel_id:parcel_id,status:status},
  success:function(resp) {
    // alert(resp);
    if(resp == 1){
      // alert('inside');
   var heading = 'All Done!';
   var text = 'Parcel status successfully updated';
      $('#ajax-response').modal('hide');
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
}
setTimeout(function(){
        location.reload();
    },500);
}
    });

});

 $(document).on('submit','#addnew-user', function(event){
         var password = $('#password').val();
                        var password2 =$('#confirmpassword').val();
                         // alert(password); alert(password2);
if(password == password2){
var data = $(this).serialize();
// alert(data+" hmm");
var action = 'adduser-Submit';
   $.ajax({
                url: 'queries/action.php',
                type: 'post',
                data:{data:data,action:action},
                success: function(data) {
                  if(data == 'success'){
              $('#addnew-user')[0].reset();
        $.toast({
                                            heading: 'All Done!',
                                            text: 'Task Assigned...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: 3500,
                                            stack: 6
                                          });}else{
           $.toast({
                                            heading: 'Error!',
                                            text: 'Please fill the form Correctly...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'danger',
                                            hideAfter: 3500,
                                            stack: 6
                                          });
        }
              }
           });
}else{ event.preventDefault();
                heading ="Alert!!!";
                text = "PASSWORDS MIS-MATCH: Check your password!!!";
                icon = "error";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);}

});
 $(document).on('keyup','#username',function(event){
            var username = $('#username').val();
             var action ='checkUsername';
            $.ajax({
                url: 'queries/profile-queries.php',
                method: "POST",
                data:{username:username, action:action},
                success:function(data){
                  if(data == 0){
                    $.toast({
                                            heading: 'Congratulations!',
                                            text: 'Username not taken...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'success',
                                            hideAfter: none,
                                            stack: 1
                                          });
                  }else if(data == 1){
                  $.toast({
                                            heading: 'Username Already Exist!',
                                            text: 'Please choose a  different username...',
                                            position: 'top-right',
                                            loaderBg:'#ff6849',
                                            icon: 'error',
                                            hideAfter: none,
                                            stack: 1
                                          });}

                }
            });
        });


 getUserpic();
    function getUserpic(){
        var action = 'getuserpic';
         $.ajax({
            url:'queries/profile-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
              // alert(data);
            $('.profpic').remove();
            $('#user-profpic').prepend(data);
            }
        });
    }
 getUserpic2();
    function getUserpic2(){
        var action = 'getuserpic2';
         $.ajax({
            url:'queries/profile-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
              // alert(data);
            // $('.profpic').remove();
            $('.user-img2').html(data);
            }
        });
    }

      $('#gallery-uploader').on('change', function(event){

            var gallery = new FormData();
             totalfiles = document.getElementById('gallery-uploader').files.length;
                        for (var index = 0; index < totalfiles; index++) {
 var file = document.getElementById('gallery-uploader').files[index];
            gallery.append("gallery-file[]", document.getElementById('gallery-uploader').files[index]);
      }

           var action = 'upload_gallery';
            gallery.append("action", action);
            // alert(gallery.get('gallery'));
             if(gallery.get('gallery') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:gallery,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                 try{
                   data = JSON.parse(data);
                  // alert(data);
                  for (var i = 0; i < data[1].length; i++) {
                    // data[i]
                     if(data[0][i] == 'Error'){
                     $.toast({
                        heading: 'Sorry File was not uploaded ',
                        text: data[1][i],
                        position: 'top-right',
                        loaderBg:'#ff6849',
                        icon: 'error',
                        hideAfter:false,
                        stack: 6
                      });  }else{

                heading ="GALLERY FILE UPLOADED";
                text = "Upload successful...";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                 load_view_gallery();

                     }
                                  }
                      }catch (e){

                         console.log(e.message);          }


                  }
             });
}
        });

      $(document).on('click', '.view-gallerypager', function(){
       var pagenum =$(this).data('pagenum');
        var tpages =$(this).data('total_page');
          if(pagenum <= tpages){
          pagenum = parseInt(pagenum);
          load_view_gallery(pagenum);
          }
          });

  load_view_gallery();
function load_view_gallery(pagenum=null){
var action = "load-view-gallery";
    $.ajax({
            url:'queries/action.php',
            method:"POST",
            data:{action:action,pagenum:pagenum},
            success:function(data){
              // alert(data);
               $('.gallery-container').html(data);

                 $(".img-popup").lightGallery();
                      $(".blogThumb").lightGallery({
                          selector: ".gallery-selector",
                          hash: false
                      });
            }
        });
}
$('.report-date-selector').on('change',function(event){
    laod_shipment_report();
// alert("changed");
});

laod_shipment_report();

function laod_shipment_report(fromDate="",toDate="",status=""){
var fromDate = $('#fromDate').val();
var toDate = $('#toDate').val();
var status = $('#shipment-status').val();
// alert(fromDate+" "+toDate+" "+status);
var action = "load-shipment-report";
    $.ajax({
            url:'queries/table-queries.php',
            method:"POST",
            data:{action:action,fromDate:fromDate,toDate:toDate,status:status},
            success:function(data){
              // alert(data);
             selector = $('#datatables');
message =' SHIPMENT REPORT';

$('#shipment_reportDisTable').html(data);
init_Table(selector,message);
    }
                      });
            }


        $('#profpic').on('change', function(event){
            var profilePicture = new FormData();
            profilePicture.append("profpic", document.getElementById('profpic').files[0]);
           var action = 'upload_profpic';
            profilePicture.append("action", action);
            // alert(profilePicture.get('profpic'));
             if(profilePicture.get('profpic') != ""){
          $.ajax({
                url:'queries/profile-queries.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:profilePicture,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                 try{
                   data = JSON.parse(data);
                  // alert(data);
                  for (var i = 0; i < data[1].length; i++) {
                    // data[i]
                     if(data[0][i] == 'Error'){
                     $.toast({
                        heading: 'Sorry Profile picture was not uploaded ',
                        text: data[1][i],
                        position: 'top-right',
                        loaderBg:'#ff6849',
                        icon: 'error',
                        hideAfter:false,
                        stack: 6
                      });  }else{

                heading ="PROFILE PICTURE UPDATE";
                text = "User Picture successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                 getUserpic();
                getUserpic2();
                     }
                     init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                 getUserpic();
                getUserpic2();
                                  }
                      }catch (e){

                         console.log(e.message);          }
   setTimeout(function(){
        location.reload();
    },500);

update_last_activity();

                  }
             });
}
        });




    $('#favicon').on('change', function(event){
            var favicon = new FormData();
            favicon.append("favicon", document.getElementById('favicon').files[0]);
           var action = 'upload_favicon';
            favicon.append("action", action);
             if(favicon.get('favicon') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:favicon,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                    try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                            heading: 'Sorry Favicon was not uploaded ',
                            text: data[1][i],
                            position: 'top-right',
                            loaderBg:'#ff6849',
                            icon: 'error',
                            hideAfter:false,
                            stack: 6
                          });  }else{
                            getfavicon();
                heading ="Site FAVICON";
                text = "Favicon successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                          }
                              }catch (e){

                                 console.log(e.message);          }

  getfavicon();
  update_last_activity();

                  }
             });
}
        });
     $('#brand_name_logo').on('change', function(event){
            var brand_name_logo = new FormData();
            brand_name_logo.append("brand_name_logo", document.getElementById('brand_name_logo').files[0]);
           var action = 'upload_brand_name_logo';
            brand_name_logo.append("action", action);
            if(brand_name_logo.get('brand_name_logo') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:brand_name_logo,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                  try{
                     data = JSON.parse(data);
                    // alert(data);
                    for (var i = 0; i < data[1].length; i++) {
                      // data[i]
                       if(data[0][i] == 'Error'){
                       $.toast({
                          heading: 'Sorry Brandname Logo was not uploaded ',
                          text: data[1][i],
                          position: 'top-right',
                          loaderBg:'#ff6849',
                          icon: 'error',
                          hideAfter:false,
                          stack: 6
                        });  }else{
                           getbrandname_logo();
                heading ="Brand Name LOGO";
                text = "Image successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);

                       }
                                        }
                            }catch (e){

                            console.log(e.message);          }
                              getbrandname_logo();
                              update_last_activity();
                                 }
             });
}
        });

     $('#logo').on('change', function(event){
            var logo = new FormData();
            logo.append("logo", document.getElementById('logo').files[0]);
           var action = 'upload_logo';
            logo.append("action", action);
            if(logo.get('logo') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:logo,
                contentType: false,
                processData: false,
                success:function(data){
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Logo was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                    getlogo();
                heading ="All Done Site LOGO";
                text = "Logo successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }
                                                   update_last_activity();


             }
             });
}
        });

 $('#headerlogo').on('change', function(event){
            var headerlogo = new FormData();
            headerlogo.append("headerlogo", document.getElementById('headerlogo').files[0]);
           var action = 'upload_headerlogo';
            headerlogo.append("action", action);
            if(headerlogo.get('headerlogo') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:headerlogo,
                contentType: false,
                processData: false,
                success:function(data){
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Header Logo was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                    get_headerlogo();
                heading ="All Done Site LOGO";
                text = "Logo successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }
                                                   update_last_activity();
        get_headerlogo();

             }
             });
}
        });

 $('#footerlogo').on('change', function(event){
            var footerlogo = new FormData();
            footerlogo.append("footerlogo", document.getElementById('footerlogo').files[0]);
           var action = 'upload_footerlogo';
            footerlogo.append("action", action);
            if(footerlogo.get('footerlogo') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:footerlogo,
                contentType: false,
                processData: false,
                success:function(data){
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Footer Logo was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                    get_footerlogo();
                heading ="All Done Site LOGO";
                text = "Logo successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }
                                                   update_last_activity();
        get_footerlogo();

             }
             });
}
        });

$('#home_slider1').on('change', function(event){
            var home_slider1 = new FormData();
            home_slider1.append("home_slider1", document.getElementById('home_slider1').files[0]);
           var action = 'upload_home_slider1';
            home_slider1.append("action", action);
            if(home_slider1.get('home_slider1') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:home_slider1,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Home Slider1 was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                   get_home_slider1();
                heading ="All Done Slider Image";
                text = "Home Slider Image successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }

                                                   update_last_activity();
                       get_home_slider1();
             }
             });
}
        });

$('#home_slider3').on('change', function(event){

var selector = 'home_slider3';
var action = "upload_home_slider3";
 heading ="All Done Site LOGO";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#home_sliderthree');
var displayAction = "get_home_slider3";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

get_file($('#home_sliderthree'),'get_home_slider3');

$('#home_sidenav').on('change', function(event){

var selector = 'home_sidenav';
var action = "upload_home_sidenav";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#home_sidenavdis');
var displayAction = "get_home_sidenav";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

get_file($('#home_quote-imgdis'),'get_quote-img');

$('#home_quote-img').on('change', function(event){

var selector = 'home_quote-img';
var action = "upload_quote-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#home_quote-imgdis');
var displayAction = "get_home_quote-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

get_file($('#company-imgdis'),'get_company-img');
$('#company-img').on('change', function(event){

var selector = 'company-img';
var action = "upload_company-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#company-imgdis');
var displayAction = "get_company-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

get_file($('#about-imgdis'),'get_about-img');
$('#about-img').on('change', function(event){

var selector ='about-img';
var action = "upload_about-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#about-imgdis');
var displayAction = "get_about-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

get_file($('#location-imgdis'),'get_location-img');
$('#location-img').on('change', function(event){

var selector ='location-img';
var action = "upload_location-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#location-imgdis');
var displayAction = "get_location-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});



get_file($('#gallery-imgdis'),'get_gallery-img');
$('#gallery-img').on('change', function(event){

var selector ='gallery-img';
var action = "upload_gallery-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#gallery-imgdis');
var displayAction = "get_gallery-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});



get_file($('#corevalue-imgdis'),'get_corevalue-img');
$('#corevalue-img').on('change', function(event){

var selector ='corevalue-img';
var action = "upload_corevalue-img";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#corevalue-imgdis');
var displayAction = "get_corevalue-img";

uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});

// get_file($('#about-imgdis'),'get_about-img');
// $('#about-img').on('change', function(event){

// var selector ='about-img';
// var action = "upload_about-img";
//  heading ="All Done ";
// text = "File successfully uploaded/Changed.";
// icon = "success";
// var displayTarget = $('#about-imgdis');
// var displayAction = "get_about-img";

// uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
// });
get_file($('#home_sidenavdis'),'get_home_sidenav');

$('#home_sidenav').on('change', function(event){

var selector = 'home_sidenav';
var action = "upload_home_sidenav";
 heading ="All Done ";
text = "File successfully uploaded/Changed.";
icon = "success";
var displayTarget = $('#home_sidenavdis');
var displayAction = "get_home_sidenav";
uploadimg(selector,action,heading,text,icon,displayTarget,displayAction);
});


 $('#home_slider2').on('change', function(event){
            var home_slider2 = new FormData();
            home_slider2.append("home_slider2", document.getElementById('home_slider2').files[0]);
           var action = 'upload_home_slider2';
            home_slider2.append("action", action);
            if(home_slider2.get('home_slider2') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:home_slider2,
                contentType: false,
                processData: false,
                success:function(data){
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Home Slider2 was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else  if(data[0][i] != 'Error'){
                                    get_home_slider2();
                heading ="All Done Slider Image";
                text = "Home Slider2 successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }

update_last_activity();
                     get_home_slider2();
             }
             });
}
        });



$('#home_video').on('change', function(event){
            var home_video = new FormData();
            home_video.append("home_video", document.getElementById('home_video').files[0]);
           var action = 'upload_home_video';
            home_video.append("action", action);
            if(home_video.get('home_video') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:home_video,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Home video was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                   get_home_video();
                heading ="All Done Slider Image";
                text = "Home Video successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,deAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }
update_last_activity();

                       get_home_video();
             }
             });
}
        });

 $('#services_video').on('change', function(event){
            var services_video = new FormData();
            services_video.append("services_video", document.getElementById('services_video').files[0]);
           var action = 'upload_services_video';
            services_video.append("action", action);
            if(services_video.get('services_video') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:services_video,
                contentType: false,
                processData: false,
                success:function(data){
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry Home Slider2 was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else  if(data[0][i] != 'Error'){
                                    get_services_video();
                heading ="All Done Slider Image";
                text = "Services Video successfully uploaded/Changed.";
                icon = "success";
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }
update_last_activity();

                     get_services_video();
             }
             });
}
        });


      get_headerlogo();
    function get_headerlogo(){
        var action = 'getsiteheaderlogo';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
            $('#siteheaderlogo').html(data);
            }
        });
    }
      get_footerlogo();
    function get_footerlogo(){
        var action = 'getsitefooterlogo';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
            $('#sitefooterlogo').html(data);
            }
        });
    }


      get_home_slider1();
    function get_home_slider1(){
        var action = 'get_home_slider1';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
            $('#home_sliderone').html(data);
            }
        });
    }

      get_home_slider2();
    function get_home_slider2(){
        var action = 'get_home_slider2';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
                // alert(data);
            $('#home_slidertwo').html(data);
            }
        });
    }

      get_home_slider3();
    function get_home_slider3(){
        var action = 'get_home_slider3';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
            $('#home_sliderthree').html(data);
            }
        });
    }
    
 get_home_video();
    function get_home_video(){
        var action = 'get_home_video';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
            $('#home_videodisp').html(data);
            }
        });
    }

      get_services_video();
    function get_services_video(){
        var action = 'get_services_video';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
                // alert(data);
            $('#services_videodisp').html(data);
            }
        });
    }
     getfavicon();
    function getfavicon(){
        var action = 'getsitefavicon';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
            $('#sitefavicon').html(data);
            }
        });
    }
         getbrandname_logo();
    function getbrandname_logo(){
        var action = 'getsitebrandname_logo';
         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
            $('#sitebrandname_logo').html(data);

            }
        });
    }

        $(".img-popup").lightGallery();
        $(".post-thumb").lightGallery({
            selector: ".lightgallery",
            hash: false
        });
$(document).on('click','#selectAll', function(){
if(this.checked){
	$('.checkboxes').each(function(){
this.checked = true;
	});
}else{
	$('.checkboxes').each(function(){
this.checked = false;
	});
}});

$(document).on('click','#fixedMenu', function(){
  // alert('clicked');
if(this.hasAttribute('checked')){
 action = 'turnOff_fixedMenu';
}else{
  action = 'turnOn_fixedMenu';
}
  $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                data:{action:action},
                success:function(data){}

              });

});
$(document).on('click','#fixedFooter', function(){
if(this.hasAttribute('checked')){
 action = 'turnOff_fixedFooter';
}else{
  action = 'turnOn_fixedFooter';
}
  $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                data:{action:action},
                success:function(data){}

              });

});
get_deliveredParcelList();
get_acceptedParcelList();
get_shippedParcelList();
get_collectedParcelList();
get_readyParcelList();
get_unsuccessfulParcelList();
get_intransitParcelList();
get_outParcelList();
get_pickedupParcelList();


$(document).on('click','#slideRTL', function(){
if(this.hasAttribute('checked')){
 action = 'turnOff_slideRTL';
}else{
  action = 'turnOn_slideRTL';
}
  $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                data:{action:action},
                success:function(data){}

              });

});


get_allBranchList();
get_allParcelList();
get_allUserList();
get_allServiceList();
load_deliveryoptions();

});





function get_allBranchList() {
	var action = 'get_allBranchList';
	$.ajax({
		url:'queries/table-queries.php',
		method:'POST',
    // dataType:'json',
		data:{action:action},
		success:function(data){

selector = $('#datatables');
message =' BRANCH LIST';
selector.DataTable().destroy();
$('#all_branchDisTable').html(data);

init_Table(selector, message);

		}
	});

}


function get_allParcelList() {
	var action = 'get_allParcelList';
	$.ajax({
		url:'queries/table-queries.php',
		method:'POST',
		data:{action:action},
		success:function(data){
			// alert(data);
      //   console.log(data);
			        selector = $('#datatables');
message =' PARCEL LIST';
selector.DataTable().destroy();
$('#all_parcelDisTable').html(data);
init_Table(selector, message);

		}
	});

}


function get_allUserList() {
  var action = 'get_allUserList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='STAFF LIST';

$('#all_userDisTable').html(data);
init_Table(selector,message);

    }
  });

}


function get_allServiceList() {
  var action = 'get_allServiceList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='SERVICE LIST';

$('#all_serviceDisTable').html(data);
init_Table(selector,message);

    }
  });

}

function get_deliveredParcelList() {
  var action = 'get_allDeliveredParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='DELIVERED PARCEL LIST';
selector.DataTable().destroy();
$('#delivered_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });
}
function get_acceptedParcelList() {
	var action = 'get_allAcceptedParcelList';
	$.ajax({
		url:'queries/table-queries.php',
		method:'POST',
		data:{action:action},
		success:function(data){
			// alert(data);
			        selector = $('#datatables');
message ='ACCEPTED PARCEL LIST';
selector.DataTable().destroy();
$('#accepted_parcelDisTable').html(data);
init_Table(selector,message);

		}
	});

}

function get_shippedParcelList() {
	var action = 'get_allShippedParcelList';
	$.ajax({
		url:'queries/table-queries.php',
		method:'POST',
		data:{action:action},
		success:function(data){
			// alert(data);
			        selector = $('#datatables');
message ='SHIPPED PARCEL LIST';
selector.DataTable().destroy();
$('#shipped_parcelDisTable').html(data);
init_Table(selector,message);

		}
	});

}


function get_collectedParcelList() {
	var action = 'get_allCollectedParcelList';
	$.ajax({
		url:'queries/table-queries.php',
		method:'POST',
		data:{action:action},
		success:function(data){
			// alert(data);
			        selector = $('#datatables');
message ='COLLECTED PARCEL LIST';
selector.DataTable().destroy();
$('#collected_parcelDisTable').html(data);
init_Table(selector,message);

		}
	});

}
function get_readyParcelList() {
  var action = 'get_allReadyParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='READY FOR PICK UP PARCEL LIST';

$('#ready_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });

}


function get_unsuccessfulParcelList() {
  var action = 'get_allUnsuccessfulParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='UNSUCCESSFUL DELIVERY ATTEMPT PARCEL LIST';
selector.DataTable().destroy();
$('#unsuccessful_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });

}
function get_intransitParcelList() {
  var action = 'get_allInTransitParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='IN TRANSIT PARCEL LIST';
selector.DataTable().destroy();
$('#intransit_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });

}
function get_outParcelList() {
  var action = 'get_allOutParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='OUT FOR DELIVERY PARCEL LIST';
selector.DataTable().destroy();
$('#out_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });

}
function get_pickedupParcelList() {
  var action = 'get_allPickedupParcelList';
  $.ajax({
    url:'queries/table-queries.php',
    method:'POST',
    data:{action:action},
    success:function(data){
      // alert(data);
              selector = $('#datatables');
message ='PICKED UP PARCEL LIST';
selector.DataTable().destroy();
$('#pickedup_parcelDisTable').html(data);
init_Table(selector,message);

    }
  });

}


function load_deliveryoptions() {
var selector = $('.deliveryoptions');
 var action = 'load-deliveryoptions';
 if(selector.attr('checked')){
var deliveryoptions = selector.val();
	if(deliveryoptions == 'Delivery'){
		var deliveryaddress = $('#recipientaddress').val();
	}else{
		var deliveryaddress = "";
	}
	var action = 'load-deliveryoptions';
	$.ajax({
		url:'queries/action.php',
		type: 'POST',
		data:{action:action,deliveryoptions:deliveryoptions,deliveryaddress:deliveryaddress},
		success:function(data){
			// alert(data);
			$('#closestBranch').html(data);
		}
	})
}
}






function delete_btn(action,id,url,callbackAction,message=""){
    update_last_activity();
      Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.value) {
      // alert('true');
                          $.ajax({
                                  url: url,
                                  type: 'post',
                                  data:{action:action, id:id},
                                  success: function(data){
// alert(data);
                    switch(callbackAction){
                  case "get_allParcelList":
                  get_allParcelList();
                  break;
                  case "get_allBranchList":
                  get_allBranchList();
                  break;
                  case "get_allUserList":
                  get_allUserList();
                  break;
                    case "load_view_gallery":
                  load_view_gallery();
                  break;
                  case "get_allevent":
                  get_allevent();
                  break;

                    case "loadtodo":
                  loadtodo();
                  break;
                  case "loadtask":
                  loadtask();
                  break;

                  case "load_faqTableData":
                  load_faqTableData();
                  break;

                  case "load_quoteTableData":
                  load_quoteTableData();
                  break;

                default:
                break;
                 }

                                }
                             });
      Swal.fire("Deleted!", message, "success");
    }
  });
}
function init_editor(selector,uploader=null,path=null){
      var editor =    tinymce.init({
        selector:selector,
        theme:"silver",
  plugins:["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker ",
  "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
  "save table contexmenu directionality emoticons template imagetools paste textcolor"],
  content_css:"css/content.css",
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
  styleformats:[
  { title: 'Bold text', inline: 'b'},
  {title: 'Red text', inline: 'span', styles:{color: '#ff0000'}},
  {title: 'Red header', block: 'h1', styles:{color: '#ff0000'}},
  {title: 'Example 1', inline: 'span', classes: 'example1'},
  {title: 'Example 2', inline: 'span', classes: 'example2'},
  {title: 'Table styles'},
  {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}],
    images_upload_credentials: true,
    images_upload_url:uploader,
    images_upload_base_path: path,

                    });
      return editor;
}

function init_modalWindow(heading="",size="",content){
  var modal = '<div class="modal fade" id="ajax-response" tabindex="-1" role="dialog" aria-labelledby="ajax-responseTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered '+size+'"  role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">'+heading+'</h5><button type="button" id="modal-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body" style="word-wrap:break-word; word-break: break-all;">'+content+'</div></div></div></div>';
$('.modal-container').html(modal);
}
function init_modalWindow2(heading="",size="",content){
  var modal = '<div class="modal fade" id="ajax-response2" tabindex="-1" role="dialog" aria-labelledby="ajax-responseTitle2" aria-hidden="true"><div class="modal-dialog modal-dialog-centered '+size+'"  role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">'+heading+'</h5><button type="button" id="modal-close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body" style="word-wrap:break-word; word-break: break-all;">'+content+'</div></div></div></div>';
$('.modal-container').html(modal);
}
function set_media_grid(totalfiles,file,container_id,index) {
   var imageTypes = ['jpg','jpeg','png','pjpeg','gif','webp'];
                  var videoTypes = ['mp4','3gp','webm','mpeg','mpg','avi'];
                  var filedata;
   var extension = file.name.split('.').pop().toLowerCase();
       var fileType =  file.type;
                var srcdata;



         var reader = new FileReader();
          reader.readAsArrayBuffer(file);
          reader.onload = (function(index,e){
            var output ;
let filedata = e.target.result;
let mediafile = new Blob([new Uint8Array(filedata)],{type: file.type});
let fileurl = (window.URL || window.webkitURL).createObjectURL(mediafile);
// $('#previewhref'+index).attr('src', fileurl);
// $(.attr('src', fileurl);
    srcdata = ' <figure class="post-thumb"><a href="'+fileurl+'" class="gallery-selector"  ><img  style="width:150px;" class="img-responsive" src="'+fileurl+'" alt=""></a></figure>';

$(container_id).html(srcdata);
$(container_id).css({'width':'150px','height':'150px'});
  $(".img-popup").lightGallery();
        $(".img-gallery").lightGallery({
            selector: ".gallery-selector",
            hash: false
        });
}).bind(reader,index);
}


function init_Table(selector="",message=null){

// selector.DataTable();
   selector.DataTable({
    width: 'auto',
      dom: 'Bfrtip',
            buttons: [

                {extend: 'csv',
              messageTop: message,
            exportOptions:{
              columns:':visible',

            }},  {extend: 'excel',
              messageTop: message,
            exportOptions:{
              columns:':visible',

            }},  {extend: 'pdf',
              messageTop: message,
            exportOptions:{
              columns:':visible',

            }}, {extend: 'print',
              messageTop: message,
            exportOptions:{
              columns:':visible',
            }},
             {extend: 'colvis',
              messageTop: message,
            className: 'btn-primary btn-circle',
            collectionLayout: 'fixed two-column'
          },

          ]

   });
}

function uploadimg(selector,action,heading,text,icon,displayTarget,displayAction) {
        update_last_activity();
            var fileObj = new FormData();
            fileObj.append("file", document.getElementById(selector).files[0]);
           
            fileObj.append("action", action);
            if(fileObj.get('file') != ""){
          $.ajax({
                url:'settings/file-upload.php',
                method:"POST",
                enctype:"multipart/form-data",
                data:fileObj,
                contentType: false,
                processData: false,
                success:function(data){
                  // alert(data);
                try{
                       data = JSON.parse(data);
                      // alert(data);
                      for (var i = 0; i < data[1].length; i++) {
                        // data[i]
                         if(data[0][i] == 'Error'){
                         $.toast({
                                heading: 'Sorry File was not uploaded ',
                                text: data[1][i],
                                position: 'top-right',
                                loaderBg:'#ff6849',
                                icon: 'error',
                                hideAfter:false,
                                stack: 6
                              });  }else{
                                   get_file(displayTarget,displayAction);
                init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500);
                         }
                                              }
                                                }catch (e){

                                                   console.log(e.message);          }


                       get_file(displayTarget,displayAction);
             }
             });
} 
}

   function get_file(selector,action){

         $.ajax({
            url:'queries/settings-queries.php',
            method:"POST",
            data:{action:action},
            success:function(data){
               // alert(data);
           selector.html(data);
            }
        });
    }

  function init_sweetAlert(heading, text, position='top-right',icon,hideAfter=3500) {
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
                                 function update_last_activity(){
                                              var action = 'update_last_activity';
                                              $.ajax({
                                                  url:'../backend/update_last_activity.php',
                                                  method:'POST',
                                                  data:{action:action},
                                                  success:function(){

                                                  }
                                              });
                                          }