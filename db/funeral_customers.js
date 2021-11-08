const db = require("./connection");
const baseUri = "/api/funeral_customers";

module.exports = initFuneralCustomer = (app) => {

    app.get(baseUri + '/all', async (req, res) => {
        try{
            let sql = "SELECT * FROM funeral_customers";

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
            
            let uuid = req.body.uuid;
            let contractNo = req.body.contractNo;
            let lname = req.body.lname;
            let fname = req.body.fname;
            let mname = req.body.mname;
            let contactNo = req.body.contactNo;
            let dueDate = req.body.dueDate;
            let downPayment = req.body.downPayment;
            let address = req.body.address;
            let gender = req.body.gender;
            let totalAmount = req.body.totalAmount;
            let amountPaid = req.body.amountPaid;


            let sql = "INSERT INTO funeral_customers VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

            db.query(sql, [
                uuid, contractNo, lname, fname, mname,
                contactNo, dueDate, downPayment, address,
                gender, totalAmount, amountPaid
            ], (err, result) => {
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
    })
}
