$(document).ready(function(){


    hoverGraduateContent();
    hoverStudentEvent();
    hoverEventIG();


    


});

function hoverGraduateContent(){


    var hoverWelcomeMsg = $("#welcomeMsgE001");

    hoverWelcomeMsg.hover(function(){    
        $('#welcomeMsgE001').css('transform','scale(1.025)');
        $('#welcomeMsgE001').css('transition','all 0.5s');
        $('#welcomeMsgContent').css('transition','all 0.5s');
        $('#welcomeMsgE001').css('border','none');
        $('#welcomeMsgE001').css('background-color', 'orange');
        $('#welcomeMsgContent').css('background-color','orange')
        $('#welcomeMsgLink').css('transition','all 0.5s');
        $('#welcomeMsgLink a').css('color','rgb(255,255,255)');
        $('#welcomeMsgLink').css('background-color','rgb(0, 15, 155)');


    }, function(){
        $('#welcomeMsgE001').css('border','0.25px solid rgb(230, 230, 230);');
        $('#welcomeMsgE001').css('transform','scale(1)');
        $('#welcomeMsgE001 p').css('color','rgb(0,0,0)');
        $('#welcomeMsgE001').css('background-color', 'rgb(250,250,250)');
        $('#welcomeMsgContent').css('background-color','white');
        $('#welcomeMsgE001 span').css('color','black');
        $('#welcomeMsgLink a').css('color','black');
        $('#welcomeMsgLink').css('background-color','rgb(236,236,236)');

    });

    hoverWelcomeMsg.click(function(e){

        window.location.href='welcomeMsg.html';


    })

}

function hoverStudentEvent(){
    var hoverStudentEvt = $("#studentEventE002");

    hoverStudentEvt.hover(function(){    
        $('#studentEventE002').css('transform','scale(1.025)');
        $('#studentEventE002').css('transition','all 0.5s');
        $('#studentEventContent').css('transition','all 0.5s');
        $('#studentEventE002').css('border','none');
        $('#studentEventE002').css('background-color', 'orange');
        $('#studentEventContent').css('background-color','orange')
        $('#studentEventLink').css('transition','all 0.5s');
        $('#studentEventLink a').css('color','rgb(255,255,255)');
        $('#studentEventLink').css('background-color','rgb(0, 15, 155)');


    }, function(){
        $('#studentEventE002').css('border','0.25px solid rgb(230, 230, 230)');
        $('#studentEventE002').css('transform','scale(1)');
        $('#studentEventE002').css('background-color', 'rgb(250,250,250)');
        $('#studentEventContent').css('background-color','white');
        $('#studentEventE002 span').css('color','black');
        $('#studentEventLink a').css('color','black');
        $('#studentEventLink').css('background-color','rgb(236,236,236)');

    });

    hoverStudentEvt.click(function(e){

        window.location.href='studentEvent.html';


    })

}

function hoverEventIG(){
    var hoverEvtIG = $("#eventIGE003");

    hoverEvtIG.hover(function(){    
        $('#eventIGE003').css('transform','scale(1.025)');
        $('#eventIGE003').css('transition','all 0.5s');
        $('#eventIGContent').css('transition','all 0.5s');
        $('#eventIGE003').css('border','none');
        $('#eventIGE003').css('background-color', 'orange');
        $('#eventIGContent').css('background-color','orange')
        $('#eventIGLink').css('transition','all 0.5s');
        $('#eventIGLink a').css('color','rgb(255,255,255)');
        $('#eventIGLink').css('background-color','rgb(0, 15, 155)');


    }, function(){
        $('#eventIGE003').css('border','0.25px solid rgb(230, 230, 230)');
        $('#eventIGE003').css('transform','scale(1)');
        $('#eventIGE003').css('background-color', 'rgb(250,250,250)');
        $('#eventIGContent').css('background-color','white');
        $('#eventIGE003 span').css('color','black');
        $('#eventIGLink a').css('color','black');
        $('#eventIGLink').css('background-color','rgb(236,236,236)');

    });

    hoverEvtIG.click(function(e){

        window.location.href='https://www.instagram.com/newcastleuni/?hl=en';


    })

}