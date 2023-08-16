const express = require("express");
const app = express();
const tasks = require('./routers/router');

//dotnev file libararies
require('dotenv').config()
//Connect to Database
const connectDB = require('./server/mongodb')
// static assets
app.use(express.static('./html'))
// parse form data
app.use(express.urlencoded({ extended: false }))
// parse json
app.use(express.json())

//GO TO ROUTER.JS located in the routers folder
//this will passed the data onto the router file
app.use('/', tasks)

const port = 3000;

const start = async () => {
    try{
        await connectDB(process.env.MONGO_URI)
        app.listen(port, console.log(`Server is listening on port ${port}`))
    }catch(err){
        console.log(err);
    }


}

start()