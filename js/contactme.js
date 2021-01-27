  var config = {
    apiKey: "AIzaSyAXYRNz-cbyNy3o4EIDQAZ3fbwwDbBGuxE",
    authDomain: "project5-71afd.firebaseapp.com",
    databaseURL: "https://project5-71afd.firebaseio.com",
    projectId: "project5-71afd",
    storageBucket: "project5-71afd.appspot.com",
    messagingSenderId: "594610670441"
  };
  firebase.initializeApp(config);


var messagesRef = firebase.database().ref('suigeneris');


document.getElementById('contactForm').addEventListener('submit', submitForm);


function submitForm(e){
  e.preventDefault();


  var name = getInputVal('name');
  var email = getInputVal('email');
  var message = getInputVal('message');

  saveMessage(name, email, message);

  document.querySelector('.alert').style.display = 'block';

  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  
  document.getElementById('contactForm').reset();
}


function getInputVal(id){
  return document.getElementById(id).value;
}


function saveMessage(name, email, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email:email,
    message:message
  });
}