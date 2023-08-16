const mongoose = require('mongoose')

const companyCredentialsSchema = new mongoose.Schema({
    ID: {
    type: String,
  }
  ,name: {
    type: String,
  }  
 , email: {
    type: String,
  },
   address: {
    type: String,
  },  
    postcode: {
    type: String,
  },
   password: {
    type: String,
  }
})

module.exports = mongoose.model('Company_Credentials', companyCredentialsSchema)
