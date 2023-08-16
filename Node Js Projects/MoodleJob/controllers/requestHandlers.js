//Schema for MongoDB
const studentLoginTask = require("../Schema/studentLogin_Schema");
const createJobTask = require("../Schema/createJob_Schema");
const createCompanyInfo = require("../Schema/companyCrentials_Schema");
const reportJobTask = require("../Schema/reportJob_Schema");

//Get data from Database from Student_Credentials table
const getStudentCredentials = async (req, res) => {
  const studentIDParams = req.query["studentID"];
  const passwordParams = req.query["studentPassword"];

  const taskID = await studentLoginTask.findOne({ studentID: studentIDParams });
  const taskPassword = await studentLoginTask.findOne({ password: passwordParams });

  if (taskID !== null && taskPassword !== null) {
    verify = { answer: true, username: taskID['studentID'] };
  } else {
    verify = { answer: false, username: "No User Found" };
  }

  res.status(200).json({ verify });
};


//Create Job from company form
const createJob = async (req, res) => {
      const createJob_task = await createJobTask.create(req.body)
      res.status(201).json({ createJob_task , result: true})
}


//Get all job that has been created by the company
const getAllJob = async (req, res) => {
    const companyNameParams = req.query["company"];
     const searchOutput = await createJobTask.find({ company: companyNameParams });
     res.status(200).json({ searchOutput , count: searchOutput.length});
}

//Login for the Employers
const getEmployerCredentials = async (req, res) => {
    const employersID = req.query['ID'];
    const employerPasword = req.query['password'];

    const taskID = await createCompanyInfo.findOne({ ID: employersID});
    const taskPassword = await createCompanyInfo.findOne({ password: employerPasword});
   
    if (taskID !== null && taskPassword !== null) {
        verify = { answer: true, username: taskID['name'] };
      } else {
        verify = { answer: false, username: "No User Found" };
      }
    
      res.status(200).json({ verify });
}


//Create new credentials for employers
const submitNewCompany = async (req, res) => {
 
    const createEmployer_task = await createCompanyInfo.create(req.body)
    res.status(201).json({ createEmployer_task , result: true})
}

//Report Job Listing from students

const reportJob = async (req, res) => {
    const submit_report = await reportJobTask.create(req.body)
    res.status(201).json({ submit_report , result: true})
}


//Exports Module to other js
module.exports = {
    createJob,
    getAllJob,
  getStudentCredentials,
  getEmployerCredentials,
  submitNewCompany,
  reportJob
};
