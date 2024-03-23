const express = require("express");
const mysql = require("mysql");
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

const connection = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database:"sales"
    
})
app.post('/sales', (req, res) => {
    const sql = "INSERT INTO sales (Region, Country, ItemType, SalesChannel, OrderPriority, OrderDate, OrderID, ShipDate, UnitsSold, UnitPrice, UnitCost, TotalRevenue, TotalCost, TotalProfit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
    const values = [
        req.body.Region,
        req.body.Country,
        req.body.ItemType,
        req.body.SalesChannel,
        req.body.OrderPriority,
        req.body.OrderDate,
        req.body. OrderID,
        req.body.ShipDate,
        req.body.UnitsSold,
        req.body. UnitPrice,
        req.body.UnitCost,
        req.body.TotalRevenue,
        req.body.TotalCost,
        req.body.TotalProfit,


    ];
    connection.query(sql, values, (err, data) => {
        if (err) {
            console.error("Error inserting data:", err);
            return res.status(500).json({ error: "Error inserting data" });
        }
        console.log("Data inserted successfully");
        return res.status(200).json({ message: "Data inserted successfully" });
    });
});


app.listen(8081, ()=> {
    console.log("listening");
})