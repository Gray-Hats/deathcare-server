const express = require('express');
const fileUpload = require('express-fileupload');

const app = express();
const cors = require('cors');
const config = require('./config');

const initLifePlanCustomer = require("./db/life_plan_customers");
const initContribution = require("./db/contributions");

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({ 
    extended: true
}));
app.use(fileUpload());

/*
* PORT
*/
app.listen(config.port, () => {
    console.log("Deathcare server is running...");
})

initLifePlanCustomer(app);
initContribution(app);