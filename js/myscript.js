function validateUser() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if(username == "" || password == ""){
    alert("Username and Password can't be null.");
  }else{

    $.ajax({
      type: "POST",
      data: {cmd:'user',us:username,ps:password},
      url: "process.php",
      success: function(data){
               //data will contain the vote count echoed by the controller i.e.  
               window.location.assign("dashboard/index.php")
              //then append the result where ever you want like
              //$("span#votes_number").html(data); //data will be containing the vote count which you have echoed from the controller

          }
      });
    
  }
}

function validateAdmin() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if(username == "" || password == ""){
    alert("Username and Password can't be null.");
  }else{

    $.ajax({
      type: "POST",
      data: {cmd:'admin',us:username,ps:password},
      url: "process.php",
      success: function(data){
               //data will contain the vote count echoed by the controller i.e.  
               window.location.assign("dashboard/index.php")
              //then append the result where ever you want like
              //$("span#votes_number").html(data); //data will be containing the vote count which you have echoed from the controller

          }
      });
    
  }
}

function logout() {
  alert("work");
    $.ajax({
      type: "POST",
      data: {cmd: 'logout'},
      url: "process.php",
      success: function(data){

               window.location.assign("index.php")

          }
      });
}