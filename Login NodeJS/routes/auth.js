
const express = require("express");
const {body} = require("express-validator");
const router = express.Router();
const {
    showLogin,
    loginUser,
    showRegister,
    registerUser,
} = require("../controllers/authController");

router.get("/login", showLogin)
router.post("/login", [
    body("email","Email Invalido").trim().isEmail(),
    body("password","Contraseña Incorrecta").trim().escape().isLength({min:8}),
], loginUser);
router.get("/register", showRegister);
router.post("/register",[
    body("name","Usuario Invalido").trim().escape(),
    body("email","Email Invalido").trim().isEmail(),
    body("password","Contraseña Invalida (Minimo 8 Caracteres)").trim().escape().isLength({min:8}),
], registerUser);

module.exports = router;