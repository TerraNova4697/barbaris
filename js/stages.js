const stageImages = document.getElementsByClassName("stage-img");
const stageDetails = document.getElementsByClassName("stage-details");
const stageText = document.getElementsByClassName("details-text");

for (let i = 0; i < stageImages.length; i++) {
  stageImages[i].addEventListener("mouseover", (event) => {
    let currImage = event.target.className.split(" ")[1];
    if (currImage === "stage-img-1") {
      stageDetails[0].classList.add("shown");
    } else if (currImage === "stage-img-2") {
      stageDetails[1].classList.add("shown");
    } else if (currImage === "stage-img-3") {
      stageDetails[2].classList.add("shown");
    } else if (currImage === "stage-img-4") {
      stageDetails[3].classList.add("shown");
    }
  });
}

for (let i = 0; i < stageDetails.length; i++) {
  stageDetails[i].addEventListener("mouseout", (event) => {
    let currStage = event.target.className.split(" ")[1];
    if (currStage === "details-1") {
      stageDetails[0].classList.remove("shown");
      // stageText[0].style.display = "none";
    } else if (currStage === "details-2") {
      stageDetails[1].classList.remove("shown");
      // stageText[1].style.display = "none";
    } else if (currStage === "details-3") {
      stageDetails[2].classList.remove("shown");
      // stageText[2].style.display = "none";
    } else if (currStage === "details-4") {
      stageDetails[3].classList.remove("shown");
      // stageText[3].style.display = "none";
    }
  });
}
