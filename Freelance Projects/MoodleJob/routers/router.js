const express = require('express')
const router = express.Router()

//The following variable is exported from the requestHandlers.js file located at controllers folder
const {
    getStudentCredentials, 
    createJob,
    getAllJob,
    getEmployerCredentials,
    submitNewCompany,
    reportJob
} = require('../controllers/requestHandlers')

//route the data to the requestHandlers.js to process
router.route('/student_login').get(getStudentCredentials)
router.route('/create_job').post(createJob).get(getAllJob)
router.route('/employer_login').get(getEmployerCredentials).post(submitNewCompany)
router.route('/submit_report').post(reportJob)
module.exports = router
