const db = require("./connection");
const baseUri = "/api/death_records";

module.exports = initFuneralCustomer = (app) => {
    app.get(baseUri + '/all', async (req, res) => {
        try{
            let sql = "SELECT * FROM death_records";

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
}
