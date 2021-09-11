const express = require('express');
const app = express();
const cors = require('cors');
const config = require('./config');


app.use(cors());
app.use(express.json());

/*
* PORT
*/
app.listen(config.port, () => {
    console.log("Deathcare server is running...");
})