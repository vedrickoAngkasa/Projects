const mongoose = require('mongoose')

const createJobSchema = new mongoose.Schema({
   title: {
    type: String,
  }
  ,duration: {
    type: String,
  }  
 , type: {
    type: String,
  },
   salary: {
    type: String,
  },  
  company: {
    type: String,
  },
   location: {
    type: String,
  },
  description: {
    type: String,
  }
})

module.exports = mongoose.model('job_information', createJobSchema)
