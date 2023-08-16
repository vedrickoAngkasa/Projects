const mongoose = require('mongoose')

const studentSchema = new mongoose.Schema({
  studentID: {
    type: String,
   
  },
  password: {
    type: String,
   
  }
})

module.exports = mongoose.model('Student_Credentials', studentSchema)
