function displayLocation(){
  let city = document.getElementById('city').value;
  let state = document.getElementById('state').value;

  alert("You are in " + city + ", " + state);
}

function getName() {
  let text;
  let person = prompt("Please enter your name:", "John Doe");
  if (person == null || person == "") {
    text = "User cancelled the prompt.";
  } else {
    text = "Hello, " + person + "! How are you today?";
  }
  document.getElementById("name").innerHTML = text;
}

function countCharacters(object, id, maximumLength){
  let stringLength = object.value.length;

  if(stringLength > maximumLength){
    document.getElementById(id).innerHTML = '<span style="color:red;">'+stringLength+' out of '+maximumLength+' characters</span>';
  }else{
    document.getElementById(id).innerHTML = stringLength+' out of '+maximumLength+' characters';
  }
}

function photoChange(){
  document.getElementById("photo").src = "photos/blueScreen.gif";
  alert("ERROR! A Virus has been detected!");
}