function register() {
         var user = document.getElementById('user');
            if(user.value){
            	localStorage.user = user.value;
            	window.location = "student.php";
            }else{
            	alert("Put you name first!");
            }
    }