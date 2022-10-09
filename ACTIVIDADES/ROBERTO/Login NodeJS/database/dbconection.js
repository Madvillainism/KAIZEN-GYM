
const mongoose = require("mongoose");

mongoose
    .connect(process.env.URI)
    .then((req, res)=> console.log("BDD Conectada 👌"))
    .catch((req, res)=> console.log("Ocurrio un Error"));