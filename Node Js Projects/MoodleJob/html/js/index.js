  //Calling all function when the website is loaded and ready
  $(document).ready(function () {
    linkHover();
    breadCrumbHover();
    viewHover();
    buttonDirectory();
    buttonHover();
    aboutUsNavHover();
    navAboutUsContentContactHover();
    changeAboutUsCompany();
    changeCompanyName();
    changeStudentDetails();
    changeStudentDescription();
    changeStudentPastExperience();
    changeStudentName();

  });

// Components of other function 

  const hoverOnItem = (item) => {
    $(""+item).css("transform", "scale(1.045)").css("transition", "all 0.5s").css("--bs-text-opacity", ".72"); 
  }

  const hoverOffItem = (item) => {
    $(""+item).css("transform", "scale(1)").css("--bs-text-opacity", "1");
  }

  const hoverOnBreadcrumb = (item) => {
    $(""+item).css("transform", "scale(1.075)").css("transition", "all 0.5s").css("text-decoration", "underline").css("--bs-text-opacity", ".72");
  }

  const hoverOffBreadcrumb = (item) => {
    $(""+item).css("--bs-text-opacity", "1").css("text-decoration", "none").css("transform", "scale(1)");
  }

  const hoverOnNavABoutUs = (item) => {
    $(""+item).css("transform", "scale(1.05)").css("transition", "all 0.5s");
  }

  const hoverOffNavAboutUs = (item) => {
    $(""+item).css("transform", "scale(1)").css("text-decoration", "none");
  }

// Link hover for navigation bar events
const linkHover = () => {
    $("#navItem1").hover(
      () => {
        hoverOnItem("#navItem1")
      },
      () => {
        hoverOffItem("#navItem1")
      }
    );

    $("#navItem2").hover(
      () => {
        hoverOnItem("#navItem2")
       
      },
      () => {
        hoverOffItem("#navItem2")
      }
    );

    $("#navItem3").hover(
      () => {
        hoverOnItem("#navItem3")
      },
      () => {
        hoverOffItem("#navItem3")
      }
    );

    $("#navItem4").hover(
      () => {
        hoverOnItem("#navItem4")
      },
      () => {
        hoverOffItem("#navItem4")
      }
    );
  };

// Bredcrumb hover events
const breadCrumbHover = () => {
      $("#breadcrumb-item1").hover(
          () => {
            hoverOnBreadcrumb('#breadcrumb-item1');
          },
          () => {
            hoverOffBreadcrumb("#breadcrumb-item1");
          }
        );

        $("#breadcrumb-item2").hover(
          () => {
            hoverOnBreadcrumb('#breadcrumb-item2');
          },
          () => {
            hoverOffBreadcrumb("#breadcrumb-item2");
          }
        );

        $("#breadcrumb-item3").hover(
          () => {
            hoverOnBreadcrumb('#breadcrumb-item3');
          },
          () => {
            hoverOffBreadcrumb("#breadcrumb-item3");
          }
        );
  }
  
//View List Hover Event
  const viewHover = () => {
      $("#listView").hover(
          () => {
            $("#listView").css("transform", "scale(1.075)");
            $("#listView").css("transition", "all 0.5s");
        
          },
          () => {
            $("#listView").css("transform", "scale(1)");
            $("#listView").css("text-decoration", "none");
        
          }
        );



        $("#gridView").hover(
          () => {
            $("#gridView").css("transform", "scale(1.075)");
            $("#gridView").css("transition", "all 0.5s");
        
          },
          () => {
            $("#gridView").css("transform", "scale(1)");
            $("#gridView").css("text-decoration", "none");
        
          }
        );
  }

//Button directory Hover Event
  const buttonDirectory = () => {

      $('#listView').click(() => {
          window.location.href = "http://localhost:3000/WIL_List.html";
      })

      $('#gridView').click(() => {
          window.location.href = "http://localhost:3000/WIL_Grid.html";
      })

      $('.card-container').click(() => {
          window.location.href = "http://localhost:3000/WIL_OL.html";
      })

      $('.navAboutUs-contentContact').click(() => {
        window.location.href = "http://localhost:3000/ContactUs.html";
    })
  }

//Button Hover Event
  const buttonHover = () => {

      $("#reportButton").hover(
          () => {
            $("#reportButton").css("transform", "scale(1.075)");
            $("#reportButton").css("transition", "all 0.5s");
        
          },
          () => {
            $("#reportButton").css("transform", "scale(1)");
            $("#reportButton").css("text-decoration", "none");
        
          }
        );



        $("#applyButton").hover(
          () => {
            $("#applyButton").css("transform", "scale(1.075)");
            $("#applyButton").css("transition", "all 0.5s");
        
          },
          () => {
            $("#applyButton").css("transform", "scale(1)");
            $("#applyButton").css("text-decoration", "none");
        
          }
        );

      

  }

//About Us Navigation Bar Hover Event
  const aboutUsNavHover = () => {
      $("#aboutUsNavItem1").hover(
          () => {
            hoverOnNavABoutUs("#aboutUsNavItem1")
        
          },
          () => {
            hoverOffNavAboutUs("#aboutUsNavItem1")                 
          }
        );

        $("#aboutUsNavItem2").hover(
          () => {
            hoverOnNavABoutUs("#aboutUsNavItem2")
        
          },
          () => {
            hoverOffNavAboutUs("#aboutUsNavItem2")                    
          }
        );

        $("#aboutUsNavItem3").hover(
          () => {
            hoverOnNavABoutUs("#aboutUsNavItem3")
        
          },
          () => {
            hoverOffNavAboutUs("#aboutUsNavItem3")                    
          }
        );

        $("#aboutUsNavItem4").hover(
          () => {
            hoverOnNavABoutUs("#aboutUsNavItem4")
        
          },
          () => {
            hoverOffNavAboutUs("#aboutUsNavItem4")                    
          }
        );
  }

  //About Us Contact Page Hover Event
  const navAboutUsContentContactHover = () => {
      
      $("#navAboutUsContentContact").hover(
          () => {
            $("#navAboutUsContentContact").css("transform", "scale(1.05)");
            $("#navAboutUsContentContact").css("transition", "all 0.5s");
        
          },
          () => {
            $("#navAboutUsContentContact").css("transform", "scale(1)");

        
          }
        );
      
  }

//Change the about us company event
  const changeAboutUsCompany = () => {

    $("#changeAboutUsCompany").click(()=> {
      
      const changedValue = $('#textareaAboutUsCompany').val();

      if(changedValue == ""){
        $("#invalidAboutUsCompany").removeClass('d-none')
        return false;
      }else{
        $("#invalidAboutUsCompany").addClass('d-none')
        $("#validAboutUsCompany").removeClass('d-none')
        $("#companyInformation").html(""+changedValue)
      }
      
    })


  }


//Change the Campany Name event
const changeCompanyName = () => {
  $("#changeCompanyName").click(()=> {
      
    const changedValue = $('#inputTextCompanyName').val();

    if(changedValue == ""){
      $("#invalidNameCompany").removeClass('d-none')
      return false;
    }else{
      $("#invalidNameCompany").addClass('d-none')
      $("#validNameCompany").removeClass('d-none')
      $("#companyName").html(""+changedValue)
    }
    
  })
}

//Change the Student Details Event
const changeStudentDetails = () => {

  $("#changeStudentDetails").click(()=> {
      
    const changedValue = $('#textareaStudentDetails').val();

    if(changedValue == ""){
      $("#invalidStudentDetails").removeClass('d-none')
      return false;
    }else{
      $("#invalidStudentDetails").addClass('d-none')
      $("#validStudentDetails").removeClass('d-none')
      $("#studentDetails").html(""+changedValue)
    }
    
  })
}

//Change Student Description Event
const changeStudentDescription = () => {
  $("#changeStudentDescription").click(()=> {
      
    const changedValue = $('#textareaStudentDescription').val();

    if(changedValue == ""){
      $("#invalidStudentDescription").removeClass('d-none')
      return false;
    }else{
      $("#invalidStudentDescription").addClass('d-none')
      $("#validStudentDescription").removeClass('d-none')
      $("#studentDescription").html(""+changedValue)
    }
    
  })

}

//Change Student Past Experience Event
const changeStudentPastExperience = () => {
  $("#changePastExperienceStudent").click(()=> {
      
    const changedValue = $('#textareaStudentPastExperience').val();

    if(changedValue == ""){
      $("#invalidStudentPastExperience").removeClass('d-none')
      return false;
    }else{
      $("#invalidStudentPastExperience").addClass('d-none')
      $("#validStudentPastExperience").removeClass('d-none')
      $("#pastExperienceStudent").html(""+changedValue)
    }
    
  })
}

//Change Student Name Event
const changeStudentName = () => {
  $("#changeStudentName").click(()=> {
      
    const changedValue = $('#inputStudentName').val();

    if(changedValue == ""){
      $("#invalidStudentName").removeClass('d-none')
      return false;
    }else{
      $("#invalidStudentName").addClass('d-none')
      $("#validStudentName").removeClass('d-none')
      $("#studentName").html(""+changedValue)
    }
    
  })
}

