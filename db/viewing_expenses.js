const db = require("./connection");
const baseUri = "/api/viewing_expenses";

module.exports = initFuneralCustomer = (app) => {
    app.get(baseUri + '/all', async (req, res) => {
        try{
            let sql = "SELECT * FROM viewing_expenses";

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
