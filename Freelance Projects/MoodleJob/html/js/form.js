  "use strict"
  
  //Calling all function when the website is loaded and ready
  $(document).ready(function () {

    formInput();
    applyJobForm();
    createJobForm();
    createEmployerData();
    logoutButton();
    loginEmployer();
    updatePersonalInformation();
    updateCompanyInformation();
    getAllJobInfo();
    logoutButtonEmployers();
    reportProblem();
  });

  //Report Problem Job Listing
 const reportProblem = () => {

  $('#reportJob').click((e)=>{
    const textReport = $('#textareaReport').val();
    const userReport = $('#userReport').val();
    
    const reportData = {
      username: userReport, 
      report_content: textReport
    }

    $.ajax({
      url: '/submit_report',
      method: 'POST',
      data: reportData, 
      success: function(result){
        const verify = result['result']

        if(!verify){
          $('#invalidReportMsg').removeClass('d-none')
        }else{
          $('#validReportMsg').removeClass('d-none')

        }

      }
  })
    e.preventDefault();
  })

 }

  // Update Personal Information for Company
const updateCompanyInformation = () => {
  $('#updateCompanyInfo').click(() => {
    window.location.href = "http://localhost:3000/CompanyProfilePageUpdateable.html";
  })
}

  //Update Personal Information for Student
const updatePersonalInformation = () => {
    $('#updatePersonalInfo').click(() => {
      window.location.href = "http://localhost:3000/StudentProfilePageUpdateable.html";
    })
  }

 //Logout for the student 
  const logoutButton = () => {

     $('#logoutText').click(() => {
      window.location.href = "http://localhost:3000/Student_Login.html";
     })

  }


  //form input to send to the back-end
  const formInput = () => {

    $('#studentForm').submit( (e)=> {
     const ID_Input = $('#inputID').val();
     const ID_Password = $('#inputPassword').val();
     
      if(ID_Input == ""){
        $('#invalidInputID').removeClass('d-none')
        e.preventDefault()
      }else if(ID_Password == ""){
        $('#invalidInputID').addClass('d-none')
        $('#invalidInputPassword').removeClass('d-none')
        e.preventDefault()
      }else{
        $('#invalidInputPassword').addClass('d-none');
        const studentData = {
            studentID: ID_Input,
            studentPassword: ID_Password
        }
      
        const url = './student_login'
        const method = 'GET'
        sendData(studentData, url, method)
        e.preventDefault();
      
      
      }
 
    })

    $('#studentForm2').submit( ()=> {
      const ID_Input2 = $('#inputID2').val();
      const ID_Password2 = $('#inputPassword2').val();
      
       if(ID_Input2 == ""){
         $('#invalidInputID2').removeClass('d-none')
         return false;
       }else if(ID_Password2 == ""){
         $('#invalidInputID2').addClass('d-none')
         $('#invalidInputPassword2').removeClass('d-none')
         return false;
       }else{
         $('#invalidInputPassword2').addClass('d-none');
         var studentData = {
             studentID: ID_Input,
             studentPassword: ID_Password
         }
        const url = "/student_login"
        const method = "GET"
         sendDataMobile(studentData, url, method)
         return false;
       }
     })


  }


  //form input for applyJobForm
  const applyJobForm = () => {

    $('#applyJobSubmitBtn').click(() => {

      const fileInput = $('#inputResume').prop('files');
      const usernameApplicant = $('#inputStudentNameApply').val();

      const fileUpload = fileInput[0];

      if(usernameApplicant == ""){
        $('#invalidApplyMsg').removeClass('d-none')
        return false;
      }else if(fileUpload == null){
        $('#invalidApplyMsg').removeClass('d-none')
        return false;
      }else{

        $('#invalidApplyMsg').addClass('d-none')
        $('#validApplyMsg').removeClass('d-none')
        console.log(fileInput);
        console.log(usernameApplicant);
        return false;
      }



    })


  }

  //Company Create job form 
  const createJobForm = () => {
      $('#createJobBtn').click((e)=> {

        const jobTitle = $("#inputJobTitle").val();
        const jobDuration = $("#inputJobDuration").val();
        const jobType = $("#inputJobType").val();
        const jobSalary = $("#inputJobSalary").val();
        const jobCompany= $("#inputCompany").val();
        const selectedJobLocation=  $("#jobLocation option:selected").val();
        const jobDescription = $("#inputJobDescription").val();

        const jobData = {
          title: jobTitle,
          duration: jobDuration,
          type: jobType,
          salary: jobSalary,
          company: jobCompany,
          location: selectedJobLocation,
          description: jobDescription
        }
          
        $.ajax({
          url: '/create_job',
          method: 'POST',
          data: jobData, 
          success: function(result){
            const outcome = result['result'];
              if(!outcome){
                  $('#failCreateJob').removeClass('d-none')
              }else if(outcome){
                $('#failCreateJob').addClass('d-none')
                  $('#successCreateJob').removeClass('d-none')

              }

          }
      })
        
        e.preventDefault();
      })
  }

  //Get all jobs that has been post
  const getAllJobInfo = () => {
    $.ajax({
      url: '/create_job',
      method: 'GET', 
      data: {company: 'Apple'},
      success: function(result){
        
          const repeatIndex = result.count;

         
          var titlesArray = [];
          var durationArray = [];
          var typeArray = [] ;
          var locationArray = [];
          var jobIndex = [];
         
          
          for(let i = 0 ; i < repeatIndex ; i++){

            titlesArray.push(result.searchOutput[i].title)
            durationArray.push(result.searchOutput[i].duration)
            typeArray.push(result.searchOutput[i].type)
            locationArray.push(result.searchOutput[i].location)
            jobIndex.push("Job "+(i+1))
          }
          
          $('.result-output').html('<tr><th></th></tr>')
          $('.result-output tr').addClass('title-output')
          var strTitle = '<tr>'
          var strJobIndex = "<tr>"
          var strDuration = '<tr>'
          var strType = '<tr>'
          var strLocation = '<tr>'

          jobIndex.forEach((job) => {
            strJobIndex += '<th scope="col">' +job + "</th>"
          })
          titlesArray.forEach(function(title) {
            strTitle += '<td scope="row">'+ title + '</td>';
          }); 
          durationArray.forEach((duration) => {
            strDuration += '<td scope="row">'+ duration + '</td>';
          })
          typeArray.forEach((type)=> {
            strType  += '<td scope="row">'+ type + '</td>';
          })
          locationArray.forEach((location) => {
            strLocation += '<td scope="row">'+ location + '</td>';
          })
        
         

          strTitle += '</tr>'
          strJobIndex += '</tr>'
          strDuration += '</tr>'
          strType += '</tr>'
          strLocation += '</tr>'
          $('.number-jobs').html("<th class='mx-2'>"+strJobIndex+"</th>")
          $('.result-output').html("<td class='mx-2'>"+strTitle+"</td>")
          $('.duration-output').html("<td class='mx-2'>"+strDuration+"</td>")
          $('.type-output').html("<td class='mx-2'>"+strType+"</td>")
          $('.location-output').html("<td class='mx-2'>"+strLocation+"</td>")
        
      }
  })
  }

//send data using desktop version
const sendData = (studentData, urlData, methodData) => {
  
    $.ajax({
        url: urlData,
        method: methodData,
        data: studentData, 
        success: function(result){
            const verification = result.verify['answer']
            const username =  result.verify['username']

            console.log(typeof(username))
            if(!verification){
              $('#failedLogin').removeClass('d-none')
            }else if(verification){
              $('#failedLogin').addClass('d-none')
              alert("Welcome " + username)
              redirectHomePage();
              
            }
        }
    })
   
}

//Change directory to home page
const redirectHomePage = () => {
  window.location.href = "http://localhost:3000/Student_Profile.html";
}

//send data using mobile version
const sendDataMobile = (studentData, urlData, methodData) => {
  $.ajax({
    url: urlData,
    method: methodData,
    data: studentData, 
    success: function(result){
      const verification = result.verify['answer']
      const username =  result.verify['username']

      console.log(typeof(username))
      if(!verification){
        $('#failedLogin').removeClass('d-none')
      }else if(verification){
        $('#failedLogin').addClass('d-none')
        alert("Welcome " + username)
        redirectHomePage();
        
      }
    }
})

}


//Login for Employer 
const loginEmployer = () => {
  
    $('#employerLoginForm').submit((e)=> {

      const companyID = $('#companyID').val();
      const passwordCompany = $('#pwd').val();
      
      const employerData = {
        ID: companyID,
        password: passwordCompany
      }

      $.ajax({
        url: '/employer_login',
        method: 'GET',
        data: employerData, 
        success: function(result){
          
          const verification = result.verify['answer']
          const username = result.verify['username']
          if(!verification){
            alert("Wrong Credentials, Please try again")
          }else{
            alert("Welcome "+username)
            window.location.href = "http://localhost:3000/Company_Profile.html";
          }
          
        }
      })
      return false;
    
     
    })

  
}

//Create Employers data to submit
const createEmployerData = () => {
  $('#employerRegistrationForm').submit((e)=>{
     const companyName = $('#companyName').val()
     const companyID = $('#companyID').val();
     const email = $('#emailCompany').val();
     const companyAddress = $('#companyAddress').val();
     const postcode = $('#Postcode').val();
     const pwdCompany = $('#pwd').val();

    const companyData = {
      name: companyName,
      ID: companyID,
      email: email,
      address: companyAddress,
      postcode: postcode,
      password: pwdCompany
    }

     $.ajax({
      url: '/employer_login',
      method: 'POST',
      data: companyData, 
      success: function(result){
          console.log(result['result'])
          const verify = result['result']
          if(!verify){
              alert("Failed to insert data!!!")
          }else{
            
            alert("Successfully Inserted data!!!")
            window.location.href = "http://localhost:3000/MOODLEJOB_Employer_Login.html";
           
          }
      }
    })

    
    return false;
   
  })
}


//Logout button for employers
const logoutButtonEmployers = () => {
  $('#logoutTextEmployers').click(()=> {
    window.location.href = "http://localhost:3000/MOODLEJOB_Employer_Login.html";
  
  })
}