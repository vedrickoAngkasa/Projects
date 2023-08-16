$(document).ready(function(){

    getEventInfo();
    getStudentInfo();
    getLecturerInfo();
    getFacultyInfo();
    getWelcomeMsg();
    getStudentEventDetails();
    getFacultyOption();
});


function getStudentInfo(){
    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/stundentInfo.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {
            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            displayStudentInfo(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();

}

function displayStudentInfo(data){

    var totalStudent = 0;
    for(var i = 0 ; i < data.length; i++){
        if(data[i].includes('Images')){   
            totalStudent++;
        }
    }


    for(var i = 1; i <= totalStudent ; i++){
    
        $(".profilePic figure #studentProfile"+i).attr('src', data[i*5]); 
        $("#studentName"+i).text(data[(i*5)+1]);
        $('.enrollment #degree'+i).text(data[(i*5)+2]);

        var ratingStudent = data[(i*5)+3]; 

        for(var star =  0; star < ratingStudent; star++){
            $('#rating'+i).append('<i class="fas fa-star"></i>');
        }

        
        $("#desc"+i).text(data[(i*5)+4]);
    }


}

function getLecturerInfo(){

    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/lecturer.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {
            
            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            displayLecturerInfo(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();


}

function displayLecturerInfo(data){

    var totalLecturer = 0;
    for(var i = 0 ; i < data.length; i++){
        if(data[i].includes('Images')){   
            totalLecturer++;
        }
    }


    for(var i = 1; i <= totalLecturer ; i++){
    
        $('#lecturerPic'+i).attr('src',data[i*5]);
        $('#lecturerName'+i).text(data[(i*5) + 1]);
        $('#faculty'+i).text(data[(i*5) + 2]);
        $('#experience'+i).append( data[(i*5) + 3]);
        $('#background'+i).text(data[(i*5) + 4]);

    }



}

function getFacultyInfo(){
    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/faculty.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {

            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            displayFacultyInfo(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();


}


function displayFacultyInfo(data){

    for(var i = 0 ; i < data.length; i++){
        
        $('#title'+(i+1)).text(data[i].facultyID);
        $('#faculty'+(i+1)).text(data[i].facultyName);
       
    }
    
}

function getEventInfo(){

    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/eventInfo.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {

            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            displayEventInfo(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();

}

function displayEventInfo(data){

  
    var ID1 = $('#welcomeMsgE001').attr('id');
    var eventID1 = ID1.slice(10,14);
    var ID2 = $('#studentEventE002').attr('id');
    var eventID2 = ID2.slice(12,16);
    var ID3 = $('#eventIGE003').attr('id');
    var eventID3 = ID3.slice(7,11)

    //console.log(eventID1);
    //console.log(eventID2);
    //console.log(eventID3);

    for(var i = 0; i < data.length; i++){


        if(eventID1 == data[i].EventID){
            $('#welcomeMsgPhoto figure img').attr('src','./css/Images/'+ data[i].imageFile);
            $('#welcomeMsgContent span').text(data[i].eventName);
            $('#welcomeMsgContent p').text(data[i].eventDescription);
        }


        if(eventID2 == data[i].EventID){
            $('#studentEventPhoto figure img').attr('src','./css/Images/'+data[i].imageFile);;
            $('#studentEventContent span').text(data[i].eventName);
            $('#studentEventContent p').text(data[i].eventDescription);
        }

        if(eventID3 == data[i].EventID){
            $('#eventIGPhoto figure img').attr('src','./css/Images/'+ data[i].imageFile);
            $('#eventIGContent span').text(data[i].eventName);
            $('#eventIGContent p').text(data[i].eventDescription);
        }

    }




}

function getWelcomeMsg(){
    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/welcomeMsg.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {

            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            dislpayWelcomeMsg(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();
}

function dislpayWelcomeMsg(data){

    //console.log(data[0].description);
    $(".welcomePageContentHeader h1").text(data[0].eventName);
    $('#chairmanProfile figure img').attr('src',"css/Images/"+data[0].imageFile);
    $('#chairmanProfile figure figcaption').text(data[0].name);
    $("#chairmanProfile figure span").text(data[0].title);

    var dataDescription = data[0].description.split(";");

    for(var i = 0 ; i < dataDescription.length; i++){
        $(".desc"+(i+1)).text(dataDescription[i]);
    }
}

function getStudentEventDetails(){
    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/studentEvent.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {

            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            dislpayStudentEventDetails(data);


        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();
}

function dislpayStudentEventDetails(data){

    // console.log(data);
    $('#orientationName').text(data[0].eventNameDetails);
    $('#orientationTime').text(data[0].time);
    $('#orientationVenue').text(data[0].venue);
    $('.descriptionOrientation').text(data[0].eventDescription);
   
    $('#businessName').text(data[1].eventNameDetails);
    $('#businessTime').text(data[1].time);
    $('#businessVenue').text(data[1].venue);
    $('.descriptionBusiness').text(data[1].eventDescription);
}

function getFacultyOption(){
    var request = new XMLHttpRequest();

    request.open('GET','http://localhost/Project/php/degree.php');


    request.onreadystatechange = function() {
        if ( request.readyState == 4 && request.status == 200 ) {

            console.log('Connection Successful');
            var data = JSON.parse(request.responseText);
            displayFacultyOption(data);
            displayDegreeDetails(data);

        }else{

            request.onerror = function(){		
                console.log('Connection error');
            };

        }		
    }

    
    request.send();
}

function displayFacultyOption(data){

    for(var i = 0; i< data.length; i++){
        $('#opt'+data[i].degreeID).text(data[i].degreeName);
        $('#term'+data[i].degreeID).text(data[i].academicTerm);
        
    }
   

}

function displayDegreeDetails(data){
   
  

    var  websiteId = $('.description').attr('id');
    var checkId = websiteId.slice(11,16);



    for(var i =0 ; i < data.length; i++){
        if(checkId == data[i].degreeID){
            $('#description'+data[i].degreeID+ ' #overviewContent').text(data[i].overview);
            $('#description'+data[i].degreeID+ ' #lecturerName').text(data[i].lecturerName);
            $('#description'+data[i].degreeID+ ' #lecturerEmail').text(data[i].emailLecturer);
            $('#degreeNameDetails' + data[i].degreeID).text(data[i].degreeName);
            var dataLearningOutcome = data[i].learningOutcome;
            var learningOutcome = dataLearningOutcome.split(";");
            for(var index = 0; index < learningOutcome.length; index++){
                $('#description'+data[i].degreeID+ ' #outcome'+(index+1)).text(learningOutcome[index]);
            }

            var assessments = data[i].assessments;
            var assessmentsData = assessments.split(";");
        
            //console.log(assessmentsData);

            for(var index2 = 0; index2 < assessmentsData.length; index2++){
                $('#assessments'+(index2+1)).text(assessmentsData[index2]);
            }
            
            var assessmentsDesc = data[i].assessmentDesc;
            var assessmentsDescData = assessmentsDesc.split(";");
            
            for(var index3 = 0 ; index3 < assessmentsDescData.length ; index3++){
                $('#assessmentsDesc'+(index3+1)).text(assessmentsDescData[index3]);
            }

        }
    
    }
 
    
}