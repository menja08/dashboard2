
//playlist3
fetch("display_playlist3.php").then(result => result.text()).then(result => {
    const parser = new DOMParser();
    const htmlDocument = parser.parseFromString(result, "text/html");
    const section = htmlDocument.getElementById("playlist3");
    console.log(section);
    const display = document.body.appendChild(section);
    display.style.backgroundColor = "lightyellow";

    setTimeout(function() {
      display.style.backgroundColor = "lightgreen";
    }, 3000);
    console.log(display.children);

    runSlider();
    function runSlider() {
      let displayChildren = display.children;
      let slideLength = displayChildren.length;

      for(let i = 1; i < slideLength; i++) {
        displayChildren[i].style.display = "none";
      }

      let slideCounter = 0;

      function start() {
        setInterval(function () {
          setTimeout(function () {
            // display the current image of the slide
            displayChildren[slideCounter].style.display = "block";

            // hide the rest of the images
            let j = 0;
            for(let i = 0; i < slideLength; i = i + 2) {//i++
              if(j !== slideCounter) {
                displayChildren[j].style.display = "none";
              }
              j = j + 2;//
            }
          }, 1000);
          slideCounter = slideCounter + 2; // next slide to be displayed, i++
          // reset slideCounter
          if(slideCounter === slideLength) {
            slideCounter = 0;
          }
        }, 2000);
      }

      start();
    }

});
