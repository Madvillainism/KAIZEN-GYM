
const express = require("express");
const router = express.Router();

router.get("/", (req, res)=>{
    res.render("home",{mensajes: req.flash("mensajes")});
})

module.exports = router;