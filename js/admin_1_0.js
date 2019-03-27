function showPlaylist() {
  const select = document.getElementById("playlists");
  let allSections = document.querySelectorAll("section");

  // show only the first playlist
  for(i = 1; i <= allSections.length - 1; i++) {
    allSections[i].style.display = "none";
  }

  select.addEventListener("change", newPlaylist);

  function newPlaylist() {
    let value = select.value;
    // console.log(value);

    function displayOnePlaylist() {
      // get all sections on page
      //let allSections = document.querySelectorAll("section");
      for(i = 0; i <= allSections.length - 1; i++) {
        if (allSections[i].id === value) {
          //allSections[i].style.backgroundColor = "red";
          allSections[i].style.display = "block";
        } else {
          //allSections[i].style.backgroundColor = "yellow";
          allSections[i].style.display = "none";
        }
      }

      if("showAll" === value) {
        for(i = 0; i <= allSections.length - 1; i++){
          //allSections[i].style.backgroundColor = "lightblue";
          allSections[i].style.display = "block";
        }

      }

    }
    displayOnePlaylist();
  }


}
showPlaylist();
