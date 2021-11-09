<?php  include("header.php");?> //includes header file
 <head>
  <script>
  function validation()
  {
      var p=document.getElementById("p").value;
      var e=document.getElementById("e").value;
      var patt=/^[a-zA-Z0-9\.\_\-]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3}$/;
       if(e=="" && p=="")
       {
          alert("Please fill the email and password");
          return false;
       }
       else if(!patt.test(e))
      {
          alert("Emaill is not correct");
          return false;
       }
          else
             {
                return true;
              }
      }
      </script>
  </head>   