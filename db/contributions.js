const db = require("./connection");
const baseUri = "/api/contribution";

module.exports = initContribution = (app) => {
    
    app.get(baseUri + '/all', async (req, res) => {
        try{
            let sql = "SELECT * FROM contributions";

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

    
    app.post(baseUri + '/get_contributions', async (req, res) => {
        try{

            let customerNo = req.body.customerNo;

            let sql = "SELECT * FROM contributions WHERE customer_no=?";

            db.query(sql,[customerNo],(err, result) => {
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

    app.post(baseUri + '/pay_contribution', async (req, res) => {
        try{

            let uuid = req.body.uuid;
            let referenceNo = req.body.referenceNo;
            let paymentDate = req.body.paymentDate;
            let month = req.body.month;
            let year = req.body.year;
            let amount = req.body.amount;
            let customerNo = req.body.customerNo;
            let status = req.body.status;
            let penalty = req.body.penalty;

            let sql = "INSERT INTO contributions VALUES (?,?,?,?,?,?,?,?,?)";

            db.query(sql,[
                uuid, referenceNo, paymentDate, month, year,
                amount, customerNo, status, penalty
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
}
