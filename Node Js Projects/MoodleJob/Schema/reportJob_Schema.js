const mongoose = require('mongoose')

const reportJobSchema = new mongoose.Schema({
  username: {
    type: String,
   
  },
  report_content: {
    type: String,
   
  }
})

module.exports = mongoose.model('Report_Job_Listing', reportJobSchema)
