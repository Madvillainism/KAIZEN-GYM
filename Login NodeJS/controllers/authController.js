
const User = require("../models/User");
const {validationResult} = require("express-validator");

const showLogin = (req, res)=>{
    res.render("login", {mensajes: req.flash("mensajes")});
}

const loginUser = async (req, res)=>{
    const errors = validationResult(req);
    if(!errors.isEmpty()){
        req.flash("mensajes",errors.array());
        return res.redirect("/auth/login");
    }

    const {email, password} = req.body;
    try{
        let user = await User.findOne({email});
        if(!user) throw new Error("El correo no existe");
        if(user.password !== password) throw new Error("La contraseña es incorrecta");
        console.log("Iniciado Sesion Correctamente");
        req.flash("mensajes",[{msg:`Ha iniciado sesion satisfactoriamente`},{msg:`Usuario: ${user.email}`},{msg:`Nombre de Usuario: ${user.name}`}])
        return res.redirect("/");
    }catch(error){
        req.flash("mensajes",[{msg:error.message}]);
        return res.redirect("/auth/login");
    }
}

const showRegister = (req, res)=>{
    res.render("register", {mensajes: req.flash("mensajes")});
}

const registerUser = async (req, res)=>{
    const errors = validationResult(req);
    if(!errors.isEmpty()){
        req.flash("mensajes",errors.array());
        return res.redirect("/auth/register");
    }

    const {name, email, password, repassword} = req.body;
    console.log(`name: ${name}, email: ${email}, password: ${password}`);
    try{
        let user = await User.findOne({email});
        if(user) throw new Error("El correo ya se encuentra registrado");
        if(password !== repassword) throw new Error("La contraseña no coincide con su validacion");
        user = new User({email, name, password});
        await user.save();
        req.flash("mensajes", [{msg:"Registrado Satisfactoriamente"}]);
        return res.redirect("/auth/login");
    }catch(error){
        req.flash("mensajes",[{msg:error.message}]);
        return res.redirect("/auth/register");
    }
}

module.exports = {
    showLogin,
    loginUser,
    showRegister,
    registerUser,
}