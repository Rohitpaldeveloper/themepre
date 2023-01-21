/* Show login form on button click */
 
jQuery('.loginBtn').click(function(){
  jQuery('.login').show();
  jQuery('.signUp').hide();
  /* border bottom on button click */
  jQuery('.loginBtn').css({'border-bottom' : '2px solid #ff4141'});
  /* remove border after click */
  jQuery('.signUpBtn').css({'border-style' : 'none'});
});
 
 
/* Show sign Up form on button click */
 
jQuery('.signUpBtn').click(function(){
  jQuery('.login').hide();
  jQuery('.signUp').show();
  /* border bottom on button click */
  jQuery('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});
   /* remove border after click */
   jQuery('.loginBtn').css({'border-style' : 'none'});
});
// Button Enable

function checkform() {
  var f = document.forms["myForm"].elements;
  var cansubmit = true;
  for (var i = 0; i < f.length; i++) {
    if (f[i].value.length == 0) {
      cansubmit = false;
    }
  }
  if (cansubmit) {
    document.getElementById('submitbutton').disabled = !cansubmit;
  }
};
function disabledbutton() {
  document.getElementById('myForm').submit()
  document.getElementById('submitbutton').disabled = true;
}
// $('#submitbutton').click(function(event) {
//   if(!event.detail || event.detail == 1){ return true; }
//   else { return false; }
// });


// Error Validation

function isEmpty(){
  var i = document.querySelector(".rgform-error");
  var str = document.forms['myForm'].userName.value;
  var phoneno = document.forms['myForm'].phoneno.value;
  var email = document.forms['myForm'].email.value;
  var address = document.forms['myForm'].address.value;
  var university = document.forms['myForm'].university.value;
  var qualification = document.forms['myForm'].qualification.value;
  var counselor = document.forms['myForm'].counselor.value;
  var course = document.forms['myForm'].course.value;
  var mentor = document.forms['myForm'].mentor.value;
  // Check For Name Empty
  if (str == "") {
    alert("Name must be filled out");
    return false;
  }
  // Check For Phone Number Empty
  else if(phoneno == "") {
    alert("Number Can't Empty");
    return false;
  } 
  // Check For Email Empty
  else if (email == "") {
    alert("Email Can't Empty");
    return false;
  }
  // Check For Address Empty
  else if (address == "") {
    alert("Address Can't Empty");
    return false;
  }
  // Check For University Empty
  else if (university == "") {
    alert("College Name Can't Empty");
    return false;
  }
  // Check For Qualification Empty
  else if (qualification == "") {
    alert("Qualification Can't Empty");
    return false;
  }
  // Check For Counselor Empty
  else if (counselor == "") {
    alert("Counselor Can't Empty");
    return false;
  }
  // Check For Course Empty
  else if (course == "") {
    alert("Course Can't Empty");
    return false;
  }
  // Check For Mentor Empty
  else if (mentor == "") {
    alert("Mentor Can't Empty");
    return false;
  }
} 