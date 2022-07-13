if (confirm("Voulez vous vraiment enregistrer les modifications effectuées ?")) {
        oui
} else {
    non
}



function myFunction() {
    let text;
    if (confirm("Voulez vous vraiment enregistrer les modifications effectuées ?") == true) {
      text = "You pressed OK!";
    } else {
      text = "You canceled!";
    }
    document.getElementById("demo").innerHTML = text;
  }