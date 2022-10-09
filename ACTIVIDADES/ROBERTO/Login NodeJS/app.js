
const express = require("express");
const {create} = require("express-handlebars");
const session = require("express-session");
const flash = require("connect-flash");
const PORT = 5000;
require("dotenv").config();
require("./database/dbconection");

const app = express();

const hbs = create({
    extname: ".hbs",
    partialsDir: ["views/components"],
});

app.use(
    session({
        secret: "sessionSecreta",
        resave: false,
        saveUninitialized: false,
        name: "secreto-nombre-session",
    })
);

app.use(flash());

app.engine(".hbs", hbs.engine);
app.set("views", "./views");
app.set("view engine", ".hbs");

app.use(express.urlencoded({extended: true}));
app.use(express.static(__dirname + "/public"));
app.use("/", require("./routes/home"));
app.use("/auth", require("./routes/auth"));

app.listen(PORT, (req, res)=>{
    console.log("Servidor Andando 👍");
});