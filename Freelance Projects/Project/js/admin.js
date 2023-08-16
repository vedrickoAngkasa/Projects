$(document).ready(function(){

    buttonHref();
   
});



function buttonHref(){

    $('#addDegreeBtn').click(function(){

        window.location.href = "addDegree.php";

    })
    
    $('#addFacultiesBtn').click(function(){

        window.location.href = "addFaculties.php";

    })

    $('#addLecturerBtn').click(function(){

        window.location.href = "addLecturer.php";

    })

    $('#addTestimonialsBtn').click(function(){

        window.location.href = "addTestimonials.php";

    })


    $('#adminLogoHeader').click(function(){

        window.location.href = "../index.html";
    })

}


