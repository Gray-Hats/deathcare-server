const DeleteFile = require("../cloud/DeleteFile");
const UploadFile = require("../cloud/UploadFile");
const db = require("./connection");
const baseUri = "/api/life_plan_customer";

module.exports = initLifePlanCustomer = (app) => {

    app.get(baseUri + '/all', async (req, res) => {
        try{
            let sql = "SELECT * FROM life_plan_customers";

            db.query(sql, (err, result) => {
                if(err){
                    console.log(err);
                    res.sendStatus(500);
                }
                else{
                    res.json(result);
                }
            });
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    });

    app.post(baseUri + '/add', async (req, res) => {
        try{

            let uuid = req.body.uuid
            let customerNo = req.body.customerNo
            let lname = req.body.lname
            let fname = req.body.fname
            let mname = req.body.mname
            let contactNo = req.body.contactNo
            let gender = req.body.gender
            let address = req.body.address
            let dateRegistered = req.body.formattedDate
            let status = req.body.status
            let lifePlanAmount = req.body.lifePlanAmount
            let password = req.body.password
            let profileUrl = "";
            let profileBucketName = "";

            let sql = "INSERT INTO life_plan_customers VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            db.query(sql,[
                uuid, customerNo, lname, fname, mname,
                contactNo, gender, address, dateRegistered, status, lifePlanAmount, 
                password, profileUrl, profileBucketName
            ],(err, result) => {
                if(err){
                    console.log(err);
                    res.sendStatus(500);
                }
                else{
                    res.json(result);
                }
            });
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    });

    app.post(baseUri + '/update_profile', async (req, res) => {
        try{

            let uuid = req.body.uuid;
            let location = req.body.uuid;
            let bucketName = req.body.bucketName;
            let file = req.files.file;

            let result = await DeleteFile(bucketName);

            if(result) {

                let {url, bucketName} = await UploadFile(file, location);

                let sql = "UPDATE life_plan_customers SET profile_url=?, profile_bucket_name=? WHERE uuid=?";

                db.query(sql,[
                    url, bucketName, uuid
                ],(err, result) => {
                    if(err){
                        console.log(err);
                        res.sendStatus(500);
                    }
                    else{
                        res.json(result);
                    }
                });
            }            
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    })

    app.post(baseUri + '/update', async (req, res) => {
        try{

            let uuid = req.body.uuid
            let lname = req.body.lname
            let fname = req.body.fname
            let mname = req.body.mname
            let contactNo = req.body.contactNo
            let gender = req.body.gender
            let address = req.body.address
            let dateRegistered = req.body.formattedDate
            let status = req.body.status
            let lifePlanAmount = req.body.lifePlanAmount

            let sql = "UPDATE life_plan_customers SET lname=?, fname=?, mname=?, contact_no=?, gender=?, addres=?, date_registered=?, status=?, life_plan_amount=? WHERE uuid=?";

            db.query(sql,[
                lname, fname, mname,
                contactNo, gender, address, dateRegistered, status,
                lifePlanAmount, uuid
            ],(err, result) => {
                if(err){
                    console.log(err);
                    res.sendStatus(500);
                }
                else{
                    res.json(result);
                }
            });
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    });

    app.post(baseUri + '/login', async (req, res) => {
        try{

            let contactNo = req.body.contactNo;
            let password = req.body.password;

            let sql = "SELECT * FROM life_plan_customers WHERE contact_no=? AND password=?";

            db.query(sql,[contactNo, password],(err, result) => {
                if(err){
                    console.log(err);
                    res.sendStatus(500);
                }
                else{
                    res.json(result);
                }
            });
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    });

    app.post(baseUri + '/get_customer', async (req, res) => {
        try{

            let uuid = req.body.uuid;

            let sql = "SELECT * FROM life_plan_customers WHERE uuid=?";

            db.query(sql,[uuid],(err, result) => {
                if(err){
                    console.log(err);
                    res.sendStatus(500);
                }
                else{
                    res.json(result);
                }
            });
        }
        catch(e){
            console.log(e);
            res.sendStatus(500);
        }
    });
}