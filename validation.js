
let phno=document.getElementById("ph_no");
let paswrd=document.getElementById("passwrd");
let email=document.getElementById("email");



//Password validation 
document.getElementById("passwrd").addEventListener("input",()=>{
    var alpha=/[a-z]/g;
    var alpha2=/[A-Z]/g;
    let num=/[0-9]/g;
    let paswrd=document.getElementById("passwrd");
    let msg=document.getElementById("msg");

     if(paswrd.value.length==""){
       paswrd.style.border="2px solid white";
       msg.innerHTML="";
       msg.style.display="none";
       paswrd.style.display="block";
     }
     else{
       if(paswrd.value.length<8){
       msg.style.color="red";
       msg.style.display="block";
       paswrd.style.border="2px solid red";
       msg.innerHTML="password should be of atleast 8 charectors";
       }

       if(paswrd.value.length>16){
       msg.style.color="red";
       msg.style.display="block";
       paswrd.style.border="2px solid red";
       msg.innerHTML="password should be less than 16 charectors";
       }
       if(!paswrd.value.match(alpha)){
           msg.style.color="red";
           msg.style.display="block";
           paswrd.style.border="2px solid red";
           msg.innerHTML="Password should contain lowercase letters";
       }
        if(!paswrd.value.match(alpha2)){
           msg.style.color="red";
           msg.style.display="block";
           paswrd.style.border="2px solid red";
           msg.innerHTML="Password should contain Uppercase letters";
       }
        if(!paswrd.value.match(num)){
           msg.style.color="red";
           msg.style.display="block";
           msg.innerHTML="Password should contain numbers";
       }
       if(!paswrd.value.match(/[^A-Za-z0-9-'']/i)){
          msg.style.color="red";
          msg.style.display="block";
          paswrd.style.border="2px solid red";
          msg.innerHTML="Password should contain special charectors";
       }
       if(paswrd.value.match(alpha) && paswrd.value.match(alpha2) && paswrd.value.match(num) && paswrd.value.match(/[^A-Za-z0-9-'']/i) && paswrd.value.length>=8){
           msg.innerHTML="";
           paswrd.style.border="2px solid lightgreen";
           msg.style.color="lightgreen";
           msg.style.fontSize="15px";
           msg.style.display="none"; 
       
       }
       
     }       
})
    
     //Email validation
      document.getElementById("email").addEventListener("input",()=>{
      let email=document.getElementById("email");
      if(email.Value.length==""){
        email.style.color="1px solid white";
      }
      else{
            email.style.border="1px solid lightgreen";
         }
     })


//Phone number validation
document.getElementById("ph_no").addEventListener("input",()=>{
    let phno=document.getElementById("ph_no");
    let ph_error=document.getElementById("ph_error");
       if(phno.value.length==10){
        phno.style.border="2px solid lightgreen";
        ph_error.innerHTML="Phone number is valid";
        ph_error.style.display="none";
       }
       else{
        phno.style.border="2px solid red";
        ph_error.style.display="block";
        ph_error.style.color="red";
        ph_error.innerHTML="Please enter a valid phone number";
       }
})




