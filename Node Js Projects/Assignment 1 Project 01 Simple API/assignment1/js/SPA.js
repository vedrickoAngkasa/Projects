"use strict";


const linkPage = {
  1: "HomePage",
  2: "AddStudent",
  3: "ViewStudent",
};


const pages = {
  1: "HomeContent",
  2: "AddStudentContent",
  3: "ViewStudentContent",
};

const pageArray = Object.entries(pages);
const linkArray = Object.entries(linkPage);

const pagesLength = Object.keys(pages).length;


$(document).ready(function () {
  SPA();
});

function SPA() {
  for (let i = 0; i <= pagesLength; i++) {
    $("#" + linkPage[i + 1]).click(function () {
      if (this.id == linkPage[i + 1]) {
        const webPages = pages[i + 1];

        $("#" + pages[i + 1]).show();
        $("#" + linkPage[i + 1]).addClass("active");
        let filterDeactivePage = pageArray.filter(
          ([key, value]) => value != webPages
        );

        let filterDeactiveLink = linkArray.filter(
          ([key, value]) => value != linkPage[i + 1]
        );
        const deactivePage = Object.fromEntries(filterDeactivePage);
        const deactiveLink = Object.fromEntries(filterDeactiveLink);


        hidePage(deactivePage, deactiveLink);
      } else {
        console.log("Page not found");
      }
    });
  }
}


function hidePage(deactivePage, deactiveLink) {
  const deactivePagesLength = Object.keys(deactivePage).length;
  for (let i = 0; i <= deactivePagesLength; i++) {
    $("#" + deactivePage[i + 1]).hide();
    $("#" + deactiveLink[i + 1]).removeClass("active");
  }
}
